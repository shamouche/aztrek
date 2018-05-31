<nav id="main-nav">
          <ul class="container">
            <li><a href="#">NOS PAYS</a></li>
            <li><a href="#">NOS CIRCUITS</a></li>
            <li> <a href="#">LE CONCEPT</a></li>
            <li><a href="#">LES AZTREKEURS</a></li>
            <li><a href="#">0299808989</a></li>
            <?php if (!isset($utilisateur["id"])) : ?>
            <li><a href="admin/login.php">Se connecter</a></li>
        <?php else: ?>
            <li><a href="#">Mon Compte</a></li>
        <?php endif; ?>
          </ul>
        </nav>