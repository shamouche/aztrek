<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables
$list_projects = getAllProjects(3);

getHeader("Accueil");
?>

<main id="main">

    <section id="aventures" class="container">
      <article class="news-article">
        <h2>Nos aventures,<span> en  route pour une expérience unique et sur-mesure</span></h2>
        <p>Partir en couple ou en groupe ? Faire un trekking ou bien des activités ? Nos agents locaux vous proposent des centaines de suggestions de circuits à personnaliser selon vos envies.</p>
      </article>
    </section>


    <section id="slider" class="owl-carousel">
    <div class="item container">
      <div class="item-infos">
        <a href="#"><h2>Nature & Découverte</h2></a>
        <p>5 circuits 100% HIKE sur mesure</p>
        <a href="#" class="btn">Voir les circuits</a>
      </div>
      <div class="item-img">
        <a href="#">
                      <img src="images/photo-circuit-1.jpg" alt="Découverte" /></a>
      </div>
    </div>
    <div class="item container">
      <div class="item-infos">
        <a href="#"><h2>Nature & Aventure</h2></a>
        <p>4 circuits 100% FUN sur mesure</p>

        <a href="#" class="btn">Voir les circuits</a>
      </div>
      <div class="item-img">
        <a href="#">
                      <img src="images/photo-circuit-2.jpg" alt="Realisation" /></a>
      </div>
    </div>
    <div class="item container">
      <div class="item-infos">
        <a href="#"><h2>Nature & Multi-activités</h2></a>
        <p>5 circuits 100% SPORT sur mesure</p>
        <a href="#" class="btn">Voir les circuits</a>
      </div>
      <div class="item-img">
        <a href="#">
                      <img src="images/photo-circuit-3.jpg" alt="Realisation" /></a>
      </div>
    </div>
  </section>



    <section id="communaute" class="container">
      <article class="news-article">
        <h2>NOTRE COMMUNAUTÉ, <span> déjà 100 000 voyageurs et 96% de satisfactions</span></h2>
        <p>AZTREK c’est une grande communauté de hikeurs passionnés. Découvrez leurs retours d’expériences et leurs avis sur leurs voyages au centre de l’Amérique latine accompagnés par nos agents locaux.
        </p>
      </article>
    </section>


      <section id="temoignages">
        <article class="news-article-1"> <img src="images/photo-temoignage.jpg" alt="Photo Témoignages">
          <p>Antoine G. 28 ans</p>
          <p>Hikeur Expert</p>
        </article>
        <article class="news-article-2">
          <h3>“ Un Voyage 100% réussi ”</h3>
          <p>Antoine enthousiaste de son voyage à la découverte des Trésors du Salvadors nous raconte son aventure ! </p>
          <a href="#" class="btn">Les témoignages &gt; </a>
        </article>
      </section>
      <aside id="main-aside">
        <p>AZTREK, c’est aussi le partage de tes expériences les plus folles en photos et vidéos sur nos réseaux !</p>
        <img src="images/photo-insta.jpg" alt="Photo Instagram">
      </aside>
      <nav id="reseaux-nav">
        <div class="container">
          <h4>Rejoignez-nous ici</h4>
          <ul>
            <li><a href="#" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i>Facebook</a></li>
            <li><a href="#" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i>Instagram</a></li>
            <li><a href="#" title="Snapchat"><i class="fab fa-snapchat" aria-hidden="true"></i>Snapchat</a></li>
            <li><a href="#" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</a></li>
          </ul>
        </div>
      </nav>

    <section id="voyages">
      <div class="container">
        <h2>LES AZTREKEURS partagent aussi ses COUPS DE COEUR ! </h2>
          <article class="btn-circuit">
            <a href="#"><img src="images/photo-yucatan.jpg" alt="Yucatan"></a>
            <div id="prix-yucatan">
              <a href="#"><h2>Les trésors du Yucatan</h2></a>
              <p>à partir de 3200 €, 15 jours </p>
            </div>
          </article>

          <article class="btn-circuit">
            <a href="#"><img src="images/photo-guatemala.jpg" alt="Guatemala"></a>
            <div id="prix-guatemala">
              <a href="#"><h2>CAMINANDO GUATEMALA</h2></a>
              <p>à partir de 2500 €, 15 jours </p>
            </div>
          </article>
          <a href="#" class="btn-heart">Les coups de <i class="fas fa-heart"></i></a>
        </div>
    </section>


    <section id="evenements" class="container">
      <div id="events">
      <article class="news-article">
        <h2>NOS ÉVÈNEMENTS, <span>des rendez-vous près de chez toi</span></h2>
        <p>AZTREK c’est une grande communauté de hikeurs passionnés qui se réunient pour partager ses expériences avec vous.</p>
      </article>
      </div>
      <article class="btn-evenement">
        <img src="images/photo-events.jpg" alt="Yucatan">
        <a href="#" class="btn">Les évènements &gt; </a>
      </article>
    </section>
  </main>

        <?php foreach ($list_projects as $project) : ?>
            <?php include 'include/project_inc.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php getFooter(); ?>