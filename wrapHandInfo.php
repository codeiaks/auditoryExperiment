<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST["proceed"])){

    $writingL = $writingR = $drawingL = $drawingR = "";
    $throwingL = $throwingR = $scissorL = $scissorR = "";
    $toothbrushL = $toothbrushR = $knifeL = $knifeR = "";
    $spoonL = $spoonR = $broomL = $broomR = "";
    $matchL = $matchR = $lidL = $lidR = "";

    if (isset($_POST["writingLeft"])){
      $writingL = $_POST["writingLeft"];
    }else{
      $writingL = 0;
    }
    if (isset($_POST["writingRight"])){
      $writingR = $_POST["writingRight"];
    }else{
      $writingR = 0;
    }
    if (isset($_POST["drawingLeft"])){
      $drawingL = $_POST["drawingLeft"];
    }else{
      $drawingL = 0;
    }
    if (isset($_POST["drawingRight"])){
      $drawingR = $_POST["drawingRight"];
    }else{
      $drawingR = 0;
    }
    if (isset($_POST["throwingLeft"])){
      $throwingL = $_POST["throwingLeft"];
    }else{
      $throwingL = 0;
    }
    if (isset($_POST["throwingRight"])){
      $throwingR = $_POST["throwingRight"];
    }else{
      $throwingR = 0;
    }
    if (isset($_POST["scissorLeft"])){
      $scissorL = $_POST["scissorLeft"];
    }else{
      $scissorL = 0;
    }
    if (isset($_POST["scissorRight"])){
      $scissorR = $_POST["scissorRight"];
    }else{
      $scissorR = 0;
    }
    if (isset($_POST["tbLeft"])){
      $toothbrushL = $_POST["tbLeft"];
    }else{
      $toothbrushL = 0;
    }
    if (isset($_POST["tbRight"])){
      $toothbrushR = $_POST["tbRight"];
    }else{
      $toothbrushR = 0;
    }
    if (isset($_POST["knifeLeft"])){
      $knifeL = $_POST["knifeLeft"];
    }else{
      $knifeL = 0;
    }
    if (isset($_POST["knifeRight"])){
      $knifeR = $_POST["knifeRight"];
    }else{
      $knifeR = 0;
    }
    if (isset($_POST["spoonLeft"])){
      $spoonL = $_POST["spoonLeft"];
    }else{
      $spoonL = 0;
    }
    if (isset($_POST["spoonRight"])){
      $spoonR = $_POST["spoonRight"];
    }else{
      $spoonR = 0;
    }
    if (isset($_POST["broomLeft"])){
      $broomL = $_POST["broomLeft"];
    }else{
      $broomL = 0;
    }
    if (isset($_POST["broomRight"])){
      $broomR = $_POST["broomRight"];
    }else{
      $broomR = 0;
    }
    if (isset($_POST["matchLeft"])){
      $matchL = $_POST["matchLeft"];
    }else{
      $matchL = 0;
    }
    if (isset($_POST["matchRight"])){
      $matchR = $_POST["matchRight"];
    }else{
      $matchR = 0;
    }
    if (isset($_POST["lidLeft"])){
      $lidL = $_POST["lidLeft"];
    }else{
      $lidL = 0;
    }
    if (isset($_POST["lidRight"])){
      $lidR = $_POST["lidRight"];
    }else{
      $lidR = 0;
    }

    $pHandInfo = array("writingLeft" => $writingL, "writingRight" => $writingR, "drawingLeft" => $drawingL, "drawingRight" => $drawingR,
     "throwingLeft" => $throwingL, "throwingRight" => $throwingR, "scissorLeft" => $scissorL, "scissorRight" => $scissorR,
     "toothbrushLeft" => $toothbrushL, "toothbrushRight" => $toothbrushR, "knifeLeft" => $knifeL, "knifeRight" => $knifeR, "spoonLeft" => $spoonL, "spoonRight" => $spoonR,
     "broomLeft" => $broomL, "broomRight" => $broomR, "matchLeft" => $matchL, "matchRight" => $matchR, "lidLeft" => $lidL, "lidRight" => $lidR);
     $_SESSION["pHandednessTest"] = $pHandInfo;
     header("Location: audio-setup.php");
  }
  if (isset($_POST["returnHome"])){
    header("Location: index.php");
  }

}
?>
