<?php
    include_once('vendor/twig/twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem('views/templates'); // Dossier contenant les templates
    $twig = new Twig_Environment($loader, array(
      'cache' => false
    ));

?>
    Vous venez de créer votre premier template avec {{ moteur_name }} !