<?php
$city = "";

switch($city){
  case "Dhaka":
    echo " Delivery Charge free";
    break;
  case "Sylet":
    echo " Delivery Charge 100$";
    break;
  case "Pabna":
    echo " Delivery Charge 80$";
    break;
  default:
    echo "Delivery CHarge 270$";
}
echo "<br>";

$role = 'Admin';
$message = "";

switch($role){
  case "Admin":
     $message = "You Can Visite This";
     break;
  case "editor":
    $message = "Welcom ! You have some pendint articles to edit";
    break;
  case "author";
    $message = "Welcome! Do you want to Publish the draft article?";
    break;
  case "Subcriber":
    $message = "Welcome! Check out some new aeticles";
    break;
  default:
    $message = "you are not Authorized to access this page";

}
echo $message;

$fovorite_site = 'stack-overflow';
  switch($favorite_site){
    case "laracast" :
      echo " your fevorite site is laracast";
  }
