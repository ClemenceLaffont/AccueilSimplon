<?php
    $users = scandir("..");
    if ($users === false) {
        header('content-type: text/plain');
        echo 'Oops, une erreur est survenu !';
        exit(1);
    }
    $users = array_diff($users, ['lost+found', 'index.php', 'img', 'css', 'README.md', 'LICENSE', 'AccueilSimplon', 'html']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Simplon Lyon" />
    <meta name="description" content="Une liste des apprenants de la promo 3 du centre de formation Simplon Lyon avec accès à leurs portfolio." />
    <meta name="author" content="Clémence Laffont" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="img/avatar.png">
    <title>Simplon Lyon</title>
</head>

<body>
    <header>
        <h1><img src="img/logo-simplonlyon.jpg" alt="logo de simplon lyon" class="logo" /></h1>
        <section>
            <img src="img/illustration.png" alt="illustration balise auto-fermante" />
            <div>
                <h2>Formation développeur web</h2>
                <h3><i>Intensive sur 7 mois et gratuite</i></h3>
            </div>
        </section>
        <h4 id="slogant">[In Code We Trust]</h4>
        <h3>Ci-dessous une liste des apprenants de la promo 3 avec accès à leurs portfolio :</h3>
    </header>
    <main>
    <ul>
        <?php
        foreach ($users as $u) {
            if ($u[0] != '.') {
                echo '<li>';
                if (file_exists("../$u/conf.json")) { 
                    $json_source = file_get_contents("../$u/conf.json");
                    $json_data = json_decode($json_source);
                    ?>
                    <a href="promo/<?php echo $u; ?>">
                        <div>
                        <?php if($json_data->nom != '') { ?>
                            <h4>
                            <?php 
                                $json_source = file_get_contents("../$u/conf.json");
                                $json_data = json_decode($json_source);
                                echo htmlspecialchars($json_data->prenom);
                            ?>
                            </h4>
                            <h4>
                            <?php
                                echo htmlspecialchars($json_data->nom);
                            ?>
                            </h4>
                        <?php } elseif($json_data->nom == '' || !isset($json_data->nom)) { ?>
                            <h4 style="margin-bottom: 24.8px;">
                            <?php
                                echo htmlspecialchars($json_data->prenom);
                            ?>
                            </h4>
                        <?php } ?>
                        </div>
                        <img 
                        <?php
                            if ($json_data->avatar != "" && is_file("../$u/$json_data->avatar")) {
                                echo 'src="promo/' . $u . '/' . htmlspecialchars($json_data->avatar) . '"';
                                echo 'alt="avatar personnalisé de l\'apprenant '.htmlspecialchars($json_data->prenom).' '.htmlspecialchars($json_data->nom).'"';
                            } else {
                                echo 'src="img/avatar.png" ';
                            }
                        ?>
                    </a>
                    <?php 
                        } else {
                    ?>
                    <a href="./promo/<?php echo $u; ?>">
                        <div>
                            <h4 style="margin-bottom: 24.8px;">
                            <?php 
                                echo $u;
                            ?>
                            </h4>
                        </div>
                        <img src="img/avatar.png"/>
                    </a>
                <?php 
                }
                echo '</li>';
            } 
        }
        ?>
    </main>
    <footer>
        <img src="img/icone1.png" alt="illustration représantant une ampoule dans un cercle noir" />
        <img src="img/icone2.png" alt="illustration representant un processeur dans un cercle noir" />
        <img src="img/icone5.png" alt="illustration representant une fenetre de navigation contenant du code dans un cercle noir" />
        <img src="img/icone3.png" alt="illustration representant un pacman dans un cercle noir" />
        <img src="img/icone4.png" alt="illustration representant un erlenmeyer contenant du liquide dans un cercle noir" />
    </footer>
</body>

</html>