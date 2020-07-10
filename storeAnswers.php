<?php
session_start();
include("dBConnection.php");

$a1 = $a2 = $a3 = $a4 = $a5 = $a6 = $a7 = "";
$a8 = $a9 = $a10 = $a11 = $a12 = $a13 = $a14 = "";
$a15 = $a16 = $a17 = $a18 = $a19 = $a20 = $a21 = "";
$a22 = $a23 = $a24 = $a25 = $a26 = $a27 = $a28 = "";

$givenID = $_SESSION["givenID"];
// print_r($_SESSION);
$stuff = $_SESSION["answers"];
foreach($stuff as $x => $y){
  echo "Key: " . $x . ", Value: " . $y . "<br>";
}
echo "<br>---<br>";

$a1 = $_SESSION["answers"]["answers1"];
$a2 = $_SESSION["answers"]["answers2"];
$a3 = $_SESSION["answers"]["answers3"];
$a4 = $_SESSION["answers"]["answers4"];
$a5 = $_SESSION["answers"]["answers5"];
$a6 = $_SESSION["answers"]["answers6"];
$a7 = $_SESSION["answers"]["answers7"];
$a8 = $_SESSION["answers"]["answers8"];
$a9 = $_SESSION["answers"]["answers9"];
$a10 = $_SESSION["answers"]["answers10"];
$a11 = $_SESSION["answers"]["answers11"];
$a12 = $_SESSION["answers"]["answers12"];
$a13 = $_SESSION["answers"]["answers13"];
$a14 = $_SESSION["answers"]["answers14"];
$a15 = $_SESSION["answers"]["answers15"];
$a16 = $_SESSION["answers"]["answers16"];
$a17 = $_SESSION["answers"]["answers17"];
$a18 = $_SESSION["answers"]["answers18"];
$a19 = $_SESSION["answers"]["answers19"];
$a20 = $_SESSION["answers"]["answers20"];
$a21 = $_SESSION["answers"]["answers21"];
$a22 = $_SESSION["answers"]["answers22"];
$a23 = $_SESSION["answers"]["answers23"];
$a24 = $_SESSION["answers"]["answers24"];
$a25 = $_SESSION["answers"]["answers25"];
$a26 = $_SESSION["answers"]["answers26"];
$a27 = $_SESSION["answers"]["answers27"];
$a28 = $_SESSION["answers"]["answers28"];

$track1 = substr($_SESSION["tracks"][0], 21);
$track2 = substr($_SESSION["tracks"][1], 21);
$track3 = substr($_SESSION["tracks"][2], 21);
$track4 = substr($_SESSION["tracks"][3], 21);
$track5 = substr($_SESSION["tracks"][4], 21);
$track6 = substr($_SESSION["tracks"][5], 21);
$track7 = substr($_SESSION["tracks"][6], 21);
$track8 = substr($_SESSION["tracks"][7], 21);
$track9 = substr($_SESSION["tracks"][8], 21);
$track10 = substr($_SESSION["tracks"][9], 21);
$track11 = substr($_SESSION["tracks"][10], 21);
$track12 = substr($_SESSION["tracks"][11], 21);
$track13 = substr($_SESSION["tracks"][12], 21);
$track14 = substr($_SESSION["tracks"][13], 21);
$track15 = substr($_SESSION["tracks"][14], 21);
$track16 = substr($_SESSION["tracks"][15], 21);
$track17 = substr($_SESSION["tracks"][16], 21);
$track18 = substr($_SESSION["tracks"][17], 21);
$track19 = substr($_SESSION["tracks"][18], 21);
$track20 = substr($_SESSION["tracks"][19], 21);
$track21 = substr($_SESSION["tracks"][20], 21);
$track22 = substr($_SESSION["tracks"][21], 21);
$track23 = substr($_SESSION["tracks"][22], 21);
$track24 = substr($_SESSION["tracks"][23], 21);
$track25 = substr($_SESSION["tracks"][24], 21);
$track26 = substr($_SESSION["tracks"][25], 21);
$track27 = substr($_SESSION["tracks"][26], 21);
$track28 = substr($_SESSION["tracks"][27], 21);

$sql3 = "INSERT INTO pResponse (givenID, track1, track2, track3, track4, track5, track6, track7, track8, track9, track10, track11, track12, track13,track14, track15, track16, track17, track18, track19, track20, track21, track22, track23, track24, track25, track26, track27, track28, userAnswer1,userAnswer2, userAnswer3, userAnswer4,userAnswer5,userAnswer6,userAnswer7,
     userAnswer8,userAnswer9,userAnswer10,userAnswer11,userAnswer12,userAnswer13,userAnswer14,userAnswer15,userAnswer16,userAnswer17,userAnswer18,userAnswer19,userAnswer20,userAnswer21,userAnswer22,userAnswer23,userAnswer24,userAnswer25,userAnswer26,userAnswer27,userAnswer28)
   VALUES ('$givenID','$track1','$track2','$track3','$track4','$track5','$track6','$track7','$track8','$track9','$track10','$track11','$track12','$track13','$track14',
    '$track15','$track16','$track17','$track18','$track19','$track20','$track21','$track22','$track23','$track24','$track25','$track26','$track27','$track28',
    '$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20',
    '$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28')";
 if ($conn->query($sql3) === TRUE){
   session_destroy();
   header("Location: thank-you.html");
 }else{
  echo $conn->error;
}

?>
