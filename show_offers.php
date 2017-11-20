<?php 
session_start();

require("fonctions_affichage.php");
require("fonctions_util.php");
test_log();
print_head();
print_header();
  print_nav();
  
$tab = array("salaire" => 22500, "diplome" => "BTS iris", "type contrats" => "CDI","lieu" => "chambray","compétance" => "dev");

  show_offers($tab);
  print_footer();
  ?>

  
