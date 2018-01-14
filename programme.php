<?php
$page = "programme";
include_once('head.html');
include_once('nav.html');
?>
<main>
    <section class="en-tete">
        <h2>Programme</h2>
        <p>Ci-dessous les programmes qui ont été appliqué durant les formations des apprenant.e.s de Simplon Villeurbanne et Venissieux. Les méthodes d'apprentissage sont surtout centrées sur la pratique et l'entraide. Un.e formateur.trice, issu.e du monde professionnel, est présent.e tout au long de la journée pour apporter des éléments théoriques et répondre aux questions des apprenants.</p>
    </section>

    <section id="programme">
        <section id="intro">
            <h3>Prairie/Introduction</h3>
            <ul>
                <li>Environnement Linux et Unix 
                <ul>
                    <li>Installation du système (Ubuntu)</li> 
                    <li>Ligne de commande</li> 
                </ul></li>
                <li>Introduction Gestion de projet 
                <ul>
                    <li>Méthodes agiles</li> 
                    <li>Organisation personnelle</li> 
                </ul></li>
                <li>Le métier de développeur.se web</li> 
                <li>Serveur Web </li> 
                <li>Découverte des navigateurs </li> 
                <li>Introduction IDE (VS Code)</li> 
                <li>Veille technologique</li> 
                <li>Outils de partage 
                <ul>
                    <li>Git et GitHub : versionner son code, collaborer et contribuer à un projet Open Source </li> 
                    <li>Suite Google</li> 
                    <li>Slack </li> 
                    <li>Licences : présentation de quelques licences open source</li> 
                </ul></li>
            </ul>
        </section>
        <div id="block">
            <div>
                <section>
                    <h3>BLOC 1 : Interface Utilisateurs</h3>
                    <ul>
                        <li>HTML et CSS : créer l'aspect visuel d'un site</li> 
                        <li>Qualité et accessibilité web</li> 
                        <li>JavaScript : Bases de l'algorithmie</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 2 : POO PHP</h3> 
                    <ul>
                        <li>PHP</li> 
                        <li>Architecture Serveurs</li> 
                        <li>Tests unitaires</li> 
                        <li>Design Pattern</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 3 : UX DESIGN</h3>
                    <ul>
                        <li>UI/UX : créer une interface utilisateur efficiente et une bonne expérience utilisateur</li> 
                        <li>Responsive design : créer un site qui s'affiche correctement sur tous les écrans</li> 
                        <li>Bootstrap : collection d'outils utile à la création d'un site/d'une application web</li> 
                        <li>SEO : optimisation d'un site</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 4 : BDD</h3>
                    <ul>
                        <li>Conception et administration d'une base de données SQL</li> 
                        <li>Sécurité appliquée à la programmation</li> 
                        <li>PDO : PHP Data Object</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 5 : Application Client Serveur</h3>
                    <ul>
                        <li>AJAX/jQuery : faciliter l'écriture de scripts côté client</li> 
                        <li>Web service REST</li> 
                    </ul>
                </section>
            </div>
            <div>
                <section>
                    <h3>BLOC 6 : Wordpress</h3>
                    <ul>
                        <li>Présentation du CMS et de l’interface</li> 
                        <li>Développement plugin</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 7 : Gestionnaire de package</h3>
                    <ul>
                        <li>Gestion des Dependance : versioning</li> 
                        <li>Process de Build</li> 
                        <li>Node.Js</li> 
                        <li>NPM/Composeur</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 8 : Préprocesseur</h3>
                    <ul>
                        <li>SASS et Compass : pré-processeur CSS</li> 
                        <li>TypeScript</li> 
                    </ul>
                </section>
                <section>
                    <h3>BLOC 9 : Spécialisation</h3>
                    <ul>
                        <li>Front End : Angular 2</li> 
                        <li>Back End : Symfony 3</li> 
                        <li>Full Stack : Angular 2 & Symfony 3</li> 
                    </ul>
                </section>
                <section>
                    <h3>Thèmes Divers : </h3>
                    <ul>
                        <li>Droits et Législation</li> 
                        <li>Veille Réseau</li> 
                        <li>Sécurité : sécuriser ses sites web</li> 
                    </ul>
                </section>
            </div>
        </div>
    </section>
</main>
<?php
include_once('footer.html');
?>