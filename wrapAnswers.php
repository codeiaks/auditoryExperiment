<?php
session_start();
include("dBConnection.php");

function cleanStr($str){
  $str = str_replace("'", "_", $str);
  return preg_replace("/[^a-zA-Z0-9_]+/", " ", $str);
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
  if (!empty($_GET["answers1"])){
    $_SESSION["answers"]["answers1"] = cleanStr($_GET["answers1"]);
  }else{
    $_SESSION["answers"]["answers1"] = "BLANK";
  }
  if (!empty($_GET["answers2"])){
    $_SESSION["answers"]["answers2"] = cleanStr($_GET["answers2"]);
  }else{
    $_SESSION["answers"]["answers2"] = "BLANK";$_SESSION["answers"]["answers2"] = "BLANK";
  }
  if (!empty($_GET["answers3"])){
    $_SESSION["answers"]["answers3"] = cleanStr($_GET["answers3"]);
  }else{
    $_SESSION["answers"]["answers3"] = "BLANK";$_SESSION["answers"]["answers3"] = "BLANK";
  }
  if (!empty($_GET["answers4"])){
    $_SESSION["answers"]["answers4"] = cleanStr($_GET["answers4"]);
  }else{
    $_SESSION["answers"]["answers4"] = "BLANK";$_SESSION["answers"]["answers4"] = "BLANK";
  }
  if (!empty($_GET["answers5"])){
    $_SESSION["answers"]["answers5"] = cleanStr($_GET["answers5"]);
  }else{
    $_SESSION["answers"]["answers5"] = "BLANK";$_SESSION["answers"]["answers5"] = "BLANK";
  }
  if (!empty($_GET["answers6"])){
    $_SESSION["answers"]["answers6"] = cleanStr($_GET["answers6"]);
  }else{
    $_SESSION["answers"]["answers6"] = "BLANK";$_SESSION["answers"]["answers6"] = "BLANK";
  }
  if (!empty($_GET["answers7"])){
    $_SESSION["answers"]["answers7"] = cleanStr($_GET["answers7"]);
  }else{
    $_SESSION["answers"]["answers7"] = "BLANK";$_SESSION["answers"]["answers7"] = "BLANK";
  }
  if (!empty($_GET["answers8"])){
    $_SESSION["answers"]["answers8"] = cleanStr($_GET["answers8"]);
  }else{
    $_SESSION["answers"]["answers8"] = "BLANK";$_SESSION["answers"]["answers8"] = "BLANK";
  }
  if (!empty($_GET["answers9"])){
    $_SESSION["answers"]["answers9"] = cleanStr($_GET["answers9"]);
  }else{
    $_SESSION["answers"]["answers9"] = "BLANK";$_SESSION["answers"]["answers9"] = "BLANK";
  }
  if (!empty($_GET["answers10"])){
    $_SESSION["answers"]["answers10"] = cleanStr($_GET["answers10"]);
  }else{
    $_SESSION["answers"]["answers10"] = "BLANK";$_SESSION["answers"]["answers10"] = "BLANK";
  }
  if (!empty($_GET["answers11"])){
    $_SESSION["answers"]["answers11"] = cleanStr($_GET["answers11"]);
  }else{
    $_SESSION["answers"]["answers11"] = "BLANK";$_SESSION["answers"]["answers11"] = "BLANK";
  }
  if (!empty($_GET["answers12"])){
    $_SESSION["answers"]["answers12"] = cleanStr($_GET["answers12"]);
  }else{
    $_SESSION["answers"]["answers12"] = "BLANK";$_SESSION["answers"]["answers12"] = "BLANK";
  }
  if (!empty($_GET["answers13"])){
    $_SESSION["answers"]["answers13"] = cleanStr($_GET["answers13"]);
  }else{
    $_SESSION["answers"]["answers13"] = "BLANK";$_SESSION["answers"]["answers13"] = "BLANK";
  }
  if (!empty($_GET["answers14"])){
    $_SESSION["answers"]["answers14"] = cleanStr($_GET["answers14"]);
  }else{
    $_SESSION["answers"]["answers14"] = "BLANK";$_SESSION["answers"]["answers14"] = "BLANK";
  }
  if (!empty($_GET["answers15"])){
    $_SESSION["answers"]["answers15"] = cleanStr($_GET["answers15"]);
  }else{
    $_SESSION["answers"]["answers15"] = "BLANK";$_SESSION["answers"]["answers15"] = "BLANK";
  }
  if (!empty($_GET["answers16"])){
    $_SESSION["answers"]["answers16"] = cleanStr($_GET["answers16"]);
  }else{
    $_SESSION["answers"]["answers16"] = "BLANK";$_SESSION["answers"]["answers16"] = "BLANK";
  }
  if (!empty($_GET["answers17"])){
    $_SESSION["answers"]["answers17"]= cleanStr($_GET["answers17"]);
  }else{
    $_SESSION["answers"]["answers17"] = "BLANK";$_SESSION["answers"]["answers17"] = "BLANK";
  }
  if (!empty($_GET["answers18"])){
    $_SESSION["answers"]["answers18"] = cleanStr($_GET["answers18"]);
  }else{
    $_SESSION["answers"]["answers18"] = "BLANK";$_SESSION["answers"]["answers18"] = "BLANK";
  }
  if (!empty($_GET["answers19"])){
    $_SESSION["answers"]["answers19"] = cleanStr($_GET["answers19"]);
  }else{
    $_SESSION["answers"]["answers19"] = "BLANK";$_SESSION["answers"]["answers19"] = "BLANK";
  }
  if (!empty($_GET["answers20"])){
    $_SESSION["answers"]["answers20"] = cleanStr($_GET["answers20"]);
  }else{
    $_SESSION["answers"]["answers20"] = "BLANK";$_SESSION["answers"]["answers20"] = "BLANK";
  }
  if (!empty($_GET["answers21"])){
    $_SESSION["answers"]["answers21"] = cleanStr($_GET["answers21"]);
  }else{
    $_SESSION["answers"]["answers21"] = "BLANK";$_SESSION["answers"]["answers21"] = "BLANK";
  }
  if (!empty($_GET["answers22"])){
    $_SESSION["answers"]["answers22"] = cleanStr($_GET["answers22"]);
  }else{
    $_SESSION["answers"]["answers22"] = "BLANK";$_SESSION["answers"]["answers22"] = "BLANK";
  }
  if (!empty($_GET["answers23"])){
    $_SESSION["answers"]["answers23"] = cleanStr($_GET["answers23"]);
  }else{
    $_SESSION["answers"]["answers23"] = "BLANK";$_SESSION["answers"]["answers23"] = "BLANK";
  }
  if (!empty($_GET["answers24"])){
    $_SESSION["answers"]["answers24"] = cleanStr($_GET["answers24"]);
  }else{
    $_SESSION["answers"]["answers24"] = "BLANK";$_SESSION["answers"]["answers24"] = "BLANK";
  }
  if (!empty($_GET["answers25"])){
    $_SESSION["answers"]["answers25"] = cleanStr($_GET["answers25"]);
  }else{
    $_SESSION["answers"]["answers25"] = "BLANK";$_SESSION["answers"]["answers25"] = "BLANK";
  }
  if (!empty($_GET["answers26"])){
    $_SESSION["answers"]["answers26"] = cleanStr($_GET["answers26"]);
  }else{
    $_SESSION["answers"]["answers26"] = "BLANK";$_SESSION["answers"]["answers26"] = "BLANK";
  }
  if (!empty($_GET["answers27"])){
    $_SESSION["answers"]["answers27"] = cleanStr($_GET["answers27"]);
  }else{
    $_SESSION["answers"]["answers27"] = "BLANK";$_SESSION["answers"]["answers27"] = "BLANK";
  }
  if (!empty($_GET["answers28"])){
    $_SESSION["answers"]["answers28"] = cleanStr($_GET["answers28"]);
  }else{
    $_SESSION["answers"]["answers28"] = "BLANK";$_SESSION["answers"]["answers28"] = "BLANK";
  }

  header("Location: storeInfo.php");

}
?>
