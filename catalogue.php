<?php
$page = "catalogue";
include_once('head.html');
include_once('nav.html');

// Récupération du numéro de la page avec un paramètre GET dans l'Url
// Affichage de la Promo 4 par défaut (a changer au fil des années)
if (isset($_GET['promo'])) {
    $promo_nbr = $_GET['promo'];
} else {
    $promo_nbr = 4;
}
// Check si le paramètre passé en GET dans l'url n'est pas un string ou alors que la personne essaye d'accéder à une page non crée
if(is_numeric($promo_nbr) == false || $promo_nbr < 2 || $promo_nbr > 5) {
    $promo_nbr = 4;
}
$promo_nbr = round($promo_nbr);
?>
<main>
    <section class="en-tete">
        <h2>Portfolios</h2>
        <p>Ci-dessous les portfolios des apprenant.e.s de Simplon Villeurbanne et Vénissieux trier par promo. Cliquez sur leur vignette pour accéder à leur portfolio.</p>
    </section>

    <nav id="nav-promo">
        <a href="catalogue.php?promo=2" <?php if($promo_nbr == 2) { echo 'class="promo-active"'; } ?>>Promo 2</a>
        <a href="catalogue.php?promo=3" <?php if($promo_nbr == 3) { echo 'class="promo-active"'; } ?>>Promo 3</a>
        <a href="catalogue.php?promo=4" <?php if($promo_nbr == 4) { echo 'class="promo-active"'; } ?>>Promo 4</a>
        <a href="catalogue.php?promo=5" <?php if($promo_nbr == 5) { echo 'class="promo-active"'; } ?>>Promo 5</a>
    </nav>

    <ul id="liste-apprenant">
        <?php

        // Mise en place de la route qui mene au dossier contenant tout les dossiers personnels des apprenants
        $route = "../promo$promo_nbr";

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