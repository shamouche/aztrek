<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AZTREK - <?php echo $title; ?></title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header id="page-header">
    <div id="header-wrap" class="container">
      <div id="mobile-header">
        <a class="burger" href="#sidr-main">
                    <i class="fa fa-bars" aria-hidden="true"></i>Menu
                </a>
      </div>
      <div id="header-left">
        <div class="logo">
          <a href="index.html" title="Accueil"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <h2 id="site-title">Aztrek</h2>
      </div>
      <div id="header-right">

        <nav id="main-nav">
          <ul class="container">
            <li><a href="#">NOS DESTINATIONS</a></li>
            <li><a href="#">NOS CIRCUITS</a></li>
            <li> <a href="#">LE CONCEPT</a></li>
            <li><a href="#">LES AZTREKEURS</a></li>
            <li><a href="#">0299808989</a></li>
            <li><a href="#">SE CONNECTER</a></li>
          </ul>
        </nav>

        <div class="form">
          <h1>L'AVENTURE COMMENCE ICI</h1>
          <form class="search-form" action="#" method="get">
            <input type="text" name="keywords" value="" placeholder="Où souhaitez-vous partir ?" size="30">
            <button type="submit" name="submit" size="30">J'y vais !</button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <section id="concept" class="container">
    <div id="concept-inner">
      <div class="item">
        <h4>Découvrez</h4>
        <p>1200 agences locales sélectionnées par Aztrek</p>
      </div>

      <div class="item">
        <h4>Co-créez</h4>
        <p>Personnalisez votre circuit en direct avec un agent local</p>
      </div>

      <div class="item">
        <h4>Voyagez</h4>
        <p>Vivez une expérience sur-mesure en toute sérénité</p>
      </div>
    </div>
  </section>

          <?php getMenu(); ?>
        </div>
    </header>

    <main>