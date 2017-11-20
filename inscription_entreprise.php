<?php 
session_start();
require("fonctions_affichage.php");
require("fonctions_util.php");
test_log();

print_head();
print_header();
print_nav();
  
form_entreprise();  
print_footer();
  ?>

  