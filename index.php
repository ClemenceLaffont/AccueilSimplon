<?php
    $users = scandir("..");
    if ($users === false) {
        header('content-type: text/plain');
        echo 'Oops, une erreur est survenu !';
        exit(1);
    }
    $users = array_diff($users, ['lost+found', 'index.php', 'img', 'css', 'README.md', 'LICENSE', 'AccueilSimplon']);
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
        <img src="img/logo-simplonlyon.jpg" alt="logo de simplon lyon" class="logo" />
        <section>
            <img src="img/illustration.png" alt="illustration balise auto-fermante" />
            <div>
                <h2>Formation développeur web</h2>
                <h3><i>Intensive sur 7 mois et gratuite</i></h3>
            </div>
        </section>
        <h6>[In Code We Trust]</h6>
        <h3>Ci-dessous une liste des apprenants de la promo 3 avec accès à leurs portfolio :</h3>
    </header>
    <main>
        <?php
        foreach ($users as $u) {
            if ($u[0] != '.') {
                if (file_exists("../$u/conf.json")) { ?>
                    <a href="promo/<?php echo $u; ?>">
                        <div>
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
                        </div>
                        <img 
                        <?php
                            if ($json_data->avatar != "" && is_file("../$u/$json_data->avatar")) {
                                echo 'src="promo/' . $u . '/' . htmlspecialchars($json_data->avatar) . '"';
                            } else {
                                echo 'src="img/avatar.png" ';
                            }
                        ?>
                        alt="avatar de l'apprenant" />
                    </a>
                    <?php 
                        } else {
                    ?>
                    <a href="./promo/<?php echo $u; ?>">
                        <div>
                            <h4>
                            <?php 
                                echo $u;
                            ?>
                            </h4>
                            <h4>&nbsp;</h4>
                        </div>
                        <img src="img/avatar.png" alt="avatar de l'apprenant" />
                    </a>
                <?php 
                }
            } 
        }
        ?>
    </main>
    <footer>
        <img src="img/icone1.png" alt="illustration" />
        <img src="img/icone2.png" alt="illustration" />
        <img src="img/icone5.png" alt="illustration" />
        <img src="img/icone3.png" alt="illustration" />
        <img src="img/icone4.png" alt="illustration" />
    </footer>
</body>

</html>