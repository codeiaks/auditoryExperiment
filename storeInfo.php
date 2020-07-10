<?php
session_start();
include("dBConnection.php");
$pInfo = $_SESSION["pInfo"];

$pAge = $_SESSION["pInfo"]["pAge"];
$pGender = $_SESSION["pInfo"]["pGender"];
$pHand = $_SESSION["pInfo"]["pHandedness"];
$pLang = $_SESSION["pInfo"]["pLang"];
$pEar = $_SESSION["pInfo"]["pHearing"];
if (isset($_SESSION["pInfo"]["pName"])){
  $pName = $_SESSION["pInfo"]["pName"];
}
if (isset($_SESSION["pInfo"]["pID"])){
  $pSID = $_SESSION["pInfo"]["pID"];
}
if (isset($_SESSION["pInfo"]["pClass"])){
  $pClass = $_SESSION["pInfo"]["pClass"];
}

$pGID = $_SESSION["givenID"];

$sql1 = "INSERT INTO pInformation (givenID, pAge, pGender, pHand, pSpokenLang, pHearing) VALUES ('$pGID', '$pAge', '$pGender', '$pHand', '$pLang', '$pEar')";
if ($conn->query($sql1) === TRUE){
  header("Location: storeAnswers.php");
}else{
  echo $conn->error;
}

?>
