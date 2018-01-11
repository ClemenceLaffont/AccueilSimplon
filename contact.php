<?php
$page = "contact";
include_once('head.html');
include_once('nav.html');
?>
<main>
    <section class="en-tete">
        <h2>Contact</h2>
        <!-- Modif de la phrase d'accroche et rajout de Ingrid -->
        <p>Pour plus de renseignements, n'hésitez pas à contacter Pauline ou Ingrid, chargée de promo, ou à leur rendre visite directement sur les sites  Simplon Villeurbanne ou Simplon Vénissieux du lundi au vendredi de 9h à 12h30 et de 13h30 à 18h.</p>
    </section>
    <div id="contact">
        <section id="coordonee">
            <section id="map">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.498,41.381C63.5,54.5,50.5,69.5,50.5,69.5s-13-16-16.997-28.119  C32.864,39.535,32.5,37.562,32.5,35.5c0-9.941,8.059-18,18-18s18,8.059,18,18C68.5,37.562,68.137,39.535,67.498,41.381z M50.5,28.5  c-3.865,0-7,3.134-7,7s3.135,7,7,7c3.866,0,7-3.134,7-7S54.366,28.5,50.5,28.5z M50.5,72.506c8.284,0,15,2.96,15,5.994  c0,3.033-6.716,5.993-15,5.993s-15-2.96-15-5.993C35.5,75.466,42.216,72.506,50.5,72.506z M50.5,82.5c7.29,0,13-1.978,13-4  c0-2.023-5.71-4-13-4s-13,1.977-13,4C37.5,80.522,43.21,82.5,50.5,82.5z"/>
                    </svg>
                    352 Cours Emile Zola, 69100 Villeurbanne, France
                </p>
                <iframe
                    width="95%"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAP-1GKIIrUaDSC8ToIMh6qlxdpcEeRvqw
                    &q=Simplon.co,Villeurbanne" allowfullscreen>
                </iframe>
            </section>
            <div>
                <section class="cv-personnel">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/2/005/086/13b/3844bd7.jpg" alt="Photo de Pauline Rouillet"/>
                    <div>
                        <h3>Pauline ROUILLET</h3>
                        <p>Chargée de promotion</p>
                        <p>06 64 46 73 88</p>
                        <p><a href="mailto:prouillet@simplon.co">prouillet@simplon.co</a></p>
                    </div>
                </section>
                <section class="cv-personnel">
                    <img src="img/ingrid.png" alt="Photo de Ingrid Genet"/>
                    <div>
                        <h3>Ingrid GENET</h3>
                        <p>Chargée de promotion</p>
                        <p>06 59 59 60 05</p>
                        <p><a href="mailto:igenet@simplon.co">igenet@simplon.co</a></p>
                    </div>
                </section>
                <section class="cv-personnel">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/2/000/22a/367/0433187.jpg" alt="photo de Pierre-Yves Charpenet"/>
                    <div>
                        <h3>Pierre-Yves CHARPENET</h3>
                        <p>Directeur Simplon Auvergne Rhône-Alpes</p>
                        <p><a href="mailto:pycharpenet@simplon.co">pycharpenet@simplon.co</a></p>
                    </div>
                </section>
                <h3>Si vous voulez en savoir plus sur l'aventure Simplon au niveau national : </h3>
                <a href="https://simplon.co/" id="lien" title="Portail national de Simplon.co">C'est par ici !</a>
            </div>
        </section>
    </div>
    
</main>
<?php
include_once('footer.html');
?>