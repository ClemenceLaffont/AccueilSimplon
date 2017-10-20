<?php
$page = "catalogue";
include_once('head.html');
include_once('nav.html');
?>
<main>
    <section class="en-tete">
        <h2>Portfolios</h2>
        <p>Ci-dessous les portfolios des apprenant.e.s de la promo3 de Simplon Villeurbanne qui termineront leurs formation le 10 Novembre 2017. Cliquez sur leur vignette pour accéder à leur portfolio</p>
    </section>

    <ul id="liste-apprenant">
        <?php

        // Mise en place de la route qui mene au dossier contenant tout les dossiers personnels des apprenants
        $route = "promo3/";

        // Création et remplissage du tableau qui contiendra tout les apprenants
        $users = scandir($route);
        if ($users === false) {
            header('content-type: text/plain');
            echo 'Oops, une erreur est survenu !';
            exit(1);
        }

        // Malheueusement, dans le dossier il n'y a pas QUE des dossiers personnels d'apprenant ! si un intru apparait dans la liste mettez son nom en dessous et il sera enlevé du tableau d'appenant
        $users = array_diff($users, ['lost+found', 'index.php', 'img', 'css', 'README.md', 'LICENSE', 'AccueilSimplon', 'html', 'jdemel', 'larod']);

        // OPTIONNEL : Par défaut, les apprenants apparaissent par ordre alphabetique ! la ligne juste en dessous permet un affichage aleatoire
        shuffle($users);

        foreach ($users as $u) {
            if ($u[0] != '.') {
                if (file_exists("$route/$u/conf.json")) { 
                    $json_source = file_get_contents("$route/$u/conf.json");
                    $json_data = json_decode($json_source);
                    ?>
                    <li>
                    <a href="<?php echo $route.'/'.$u; ?>">
                        <?php if (isset($json_data->emboche) && $json_data->emboche == true) { 
                            echo '<div class="emboche"><h4>EN RUPTURE DE STOCK</h4>';
                            if (isset($json_data->contrat) && $json_data->contrat != '' && isset($json_data->entreprise) && $json_data->entreprise != '') {
                                echo '<p>en '.htmlspecialchars($json_data->contrat).' chez '.htmlspecialchars($json_data->entreprise);
                            }
                            echo '</div>';
                        } ?>
                        <div>
                        <?php if($json_data->nom != '') { ?>
                            <h4>
                            <?php 
                                echo htmlspecialchars($json_data->prenom);
                            ?>
                            </br>
                            <?php
                                echo htmlspecialchars($json_data->nom);
                            ?>
                            </h4>
                        <?php } elseif($json_data->nom == '' || !isset($json_data->nom)) { ?>
                            <h4>
                            <?php
                                echo htmlspecialchars($json_data->prenom);
                            ?>
                            </h4>
                        <?php } ?>
                        <?php if(isset($json_data->techno) && $json_data->techno != '') { ?>
                            <p>
                            <?php
                                echo htmlspecialchars($json_data->techno);
                            ?>
                            </p>
                        <?php } ?>
                        </div>
                        <img 
                        <?php
                            if ($json_data->avatar != "" && is_file("$route/$u/$json_data->avatar")) {
                                echo 'src="'.$route.'/'.$u.'/'.htmlspecialchars($json_data->avatar).'"';
                                echo 'alt="avatar personnalisé de l\'apprenant '.htmlspecialchars($json_data->prenom).' '.htmlspecialchars($json_data->nom).'"';
                            } else {
                                echo 'src="img/avatar.png" ';
                            }
                        ?>/>
                    </a>
                    </li>
                    <?php 
                        } else {
                    ?>
                    <li>
                    <a href="./<?php echo $route.'/'.$u; ?>">
                        <div>
                            <h4>
                            <?php 
                                echo $u;
                            ?>
                            </h4>
                        </div>
                        <img src="img/avatar.png"/>
                    </a>
                    </li>
                <?php 
                }
            } 
        }
        ?>
    </ul>
</main>
<?php
include_once('footer.html');
?>