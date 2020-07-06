<?php
session_start();
include("dBConnection.php");

$pHand = $_SESSION["pHandednessTest"];

$pGID = $_SESSION["givenID"];

$writingLeft = $_SESSION["pHandednessTest"]["writingLeft"];
$writingRight = $_SESSION["pHandednessTest"]["writingRight"];
$drawingLeft = $_SESSION["pHandednessTest"]["drawingLeft"];
$drawingRight = $_SESSION["pHandednessTest"]["drawingRight"];
$throwingLeft = $_SESSION["pHandednessTest"]["throwingLeft"];
$throwingRight = $_SESSION["pHandednessTest"]["throwingRight"];
$scissorLeft = $_SESSION["pHandednessTest"]["scissorLeft"];
$scissorRight = $_SESSION["pHandednessTest"]["scissorRight"];
$toothbrushLeft = $_SESSION["pHandednessTest"]["toothbrushLeft"];
$toothbrushRight = $_SESSION["pHandednessTest"]["toothbrushRight"];
$knifeLeft = $_SESSION["pHandednessTest"]["knifeLeft"];
$knifeRight = $_SESSION["pHandednessTest"]["knifeRight"];
$spoonLeft = $_SESSION["pHandednessTest"]["spoonLeft"];
$spoonRight = $_SESSION["pHandednessTest"]["spoonRight"];
$broomLeft = $_SESSION["pHandednessTest"]["broomLeft"];
$broomRight = $_SESSION["pHandednessTest"]["broomRight"];
$matchLeft = $_SESSION["pHandednessTest"]["matchLeft"];
$matchRight = $_SESSION["pHandednessTest"]["matchRight"];
$lidLeft = $_SESSION["pHandednessTest"]["lidLeft"];
$lidRight = $_SESSION["pHandednessTest"]["lidRight"];

$sql2 = "INSERT INTO pHandedness (gID,
  wLeft,
  wRight,
  dLeft,
  dRight,
  throwLeft,
  throwRight,
  sLeft,
  sRight,
  tbLeft,
  tbRight,
  kLeft,
  kRight,
  spoonLeft,
  spoonRight,
  bLeft,
  bRight,
  mLeft,
  mRight,
  lLeft,
  lRight) VALUES ('$pGID', '$writingLeft',
    '$writingRight', '$drawingLeft', '$drawingRight', '$throwingLeft', '$throwingRight', '$scissorLeft', '$scissorRight', '$toothbrushLeft', '$toothbrushRight',
    '$knifeLeft', '$knifeRight', '$spoonLeft', '$spoonRight', '$broomLeft', '$broomRight', '$matchLeft', '$matchRight', '$lidLeft', '$lidRight')";

if ($conn->query($sql2) === TRUE){
  header("Location: storeAnswers.php");
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
