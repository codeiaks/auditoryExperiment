<?php
session_start();
include("dBConnection.php");

function cleanStr($str){
  $str = str_replace("'", "_", $str);
  return preg_replace("/[^a-zA-Z0-9_]+/", " ", $str);
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
  if (isset($_GET["answers1"])){
    $_SESSION["answers"]["answers1"] = cleanStr($_GET["answers1"]);
  }
  if (isset($_GET["answers2"])){
    $_SESSION["answers"]["answers2"] = cleanStr($_GET["answers2"]);
  }
  if (isset($_GET["answers3"])){
    $_SESSION["answers"]["answers3"] = cleanStr($_GET["answers3"]);
  }
  if (isset($_GET["answers4"])){
    $_SESSION["answers"]["answers4"] = cleanStr($_GET["answers4"]);
  }
  if (isset($_GET["answers5"])){
    $_SESSION["answers"]["answers5"] = cleanStr($_GET["answers5"]);
  }
  if (isset($_GET["answers6"])){
    $_SESSION["answers"]["answers6"] = cleanStr($_GET["answers6"]);
  }
  if (isset($_GET["answers7"])){
    $_SESSION["answers"]["answers7"] = cleanStr($_GET["answers7"]);
  }
  if (isset($_GET["answers8"])){
    $_SESSION["answers"]["answers8"] = cleanStr($_GET["answers8"]);
  }
  if (isset($_GET["answers9"])){
    $_SESSION["answers"]["answers9"] = cleanStr($_GET["answers9"]);
  }
  if (isset($_GET["answers10"])){
    $_SESSION["answers"]["answers10"] = cleanStr($_GET["answers10"]);
  }
  if (isset($_GET["answers11"])){
    $_SESSION["answers"]["answers11"] = cleanStr($_GET["answers11"]);
  }
  if (isset($_GET["answers12"])){
    $_SESSION["answers"]["answers12"] = cleanStr($_GET["answers12"]);
  }
  if (isset($_GET["answers13"])){
    $_SESSION["answers"]["answers13"] = cleanStr($_GET["answers13"]);
  }
  if (isset($_GET["answers14"])){
    $_SESSION["answers"]["answers14"] = cleanStr($_GET["answers14"]);
  }
  if (isset($_GET["answers15"])){
    $_SESSION["answers"]["answers15"] = cleanStr($_GET["answers15"]);
  }
  if (isset($_GET["answers16"])){
    $_SESSION["answers"]["answers16"] = cleanStr($_GET["answers16"]);
  }
  if (isset($_GET["answers17"])){
    $_SESSION["answers"]["answers17"]= cleanStr($_GET["answers17"]);
  }
  if (isset($_GET["answers18"])){
    $_SESSION["answers"]["answers18"] = cleanStr($_GET["answers18"]);
  }
  if (isset($_GET["answers19"])){
    $_SESSION["answers"]["answers19"] = cleanStr($_GET["answers19"]);
  }
  if (isset($_GET["answers20"])){
    $_SESSION["answers"]["answers20"] = cleanStr($_GET["answers20"]);
  }
  if (isset($_GET["answers21"])){
    $_SESSION["answers"]["answers21"] = cleanStr($_GET["answers21"]);
  }
  if (isset($_GET["answers22"])){
    $_SESSION["answers"]["answers22"] = cleanStr($_GET["answers22"]);
  }
  if (isset($_GET["answers23"])){
    $_SESSION["answers"]["answers23"] = cleanStr($_GET["answers23"]);
  }
  if (isset($_GET["answers24"])){
    $_SESSION["answers"]["answers24"] = cleanStr($_GET["answers24"]);
  }
  if (isset($_GET["answers25"])){
    $_SESSION["answers"]["answers25"] = cleanStr($_GET["answers25"]);
  }
  if (isset($_GET["answers26"])){
    $_SESSION["answers"]["answers26"] = cleanStr($_GET["answers26"]);
  }
  if (isset($_GET["answers27"])){
    $_SESSION["answers"]["answers27"] = cleanStr($_GET["answers27"]);
  }
  if (isset($_GET["answers28"])){
    $_SESSION["answers"]["answers28"] = cleanStr($_GET["answers28"]);
  }

  header("Location: storeInfo.php");

}
?>
