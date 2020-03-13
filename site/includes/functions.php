<?php

function getTitle( $page ) {
  global $pagesTitles;
  return $pagesTitles[ $page ];
}



global $pagesTitles;
$pagesTitles = [
  'index' => 'labonnepoir, site de petites annonces gratuites',
  'signin' => 'Connexion',
];

?>