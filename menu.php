  <nav id="mainav" class="fl_right">
      <ul class="clear" class="dropdown">

        <li class="<?php if($page=='espace_admin'){echo 'active';} ?>"><a href="espace_admin.php">Espace Admin</a></li>
        <li class="<?php if($page=='list_bus'){echo 'active';} ?>"><a href="list_bus.php">Gérer Bus</a></li>
        <li class="<?php if($page=='list_voyages'){echo 'active';} ?>"><a href="list_voyages.php">Gérer Voyages</a></li>
        <li class="<?php if($page=='list_stations'){echo 'active';} ?>"><a href="list_stations.php">Gérer Stations</a></li>
        <li class="<?php if($page=='list_chauffeurs'){echo 'active';} ?>"><a href="list_chauffeurs.php">Gérer Chauffeurs</a></li>
        <li><a href="logout.php">Déconnexion</a></li>

      </ul>

  </nav>