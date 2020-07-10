<?php
session_start();
include("dBConnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["proceed"])){
    $pAge = $pGender = $pHandedness = $pLang = $pHearing = "";
    $pCredits = $pName = $pID = $pClass = "";
    $nameError = $idError = $classError = "";

    if (isset($_POST["pAge"])){
      $pAge = $_POST["pAge"];
    }else{
      $pAge = 18;
    }

    if (isset($_POST["pGender"])){
      $pGender = $_POST["pGender"];
    }else{
      $pGender = 0;
    }

    if (isset($_POST["pHandedness"])){
      $pHandedness = $_POST["pHandedness"];
    }else{
      $pHandedness = 0;
    }

    if (isset($_POST["spokenLang"])){
      $pLang = $_POST["spokenLang"];
    }else{
      $pLang = 0;
    }

    if (isset($_POST["hearingProblems"])){
      $pHearing = $_POST["hearingProblems"];
    }else{
      $pHearing = 0;
    }

    if (isset($_POST["classCredits"])){
      $pCredits = $_POST["classCredits"];
    }else{
      $pCredits = 0;
    }

    if ($pCredits == 1){
      if (empty($_POST["pName"])){
        $nameError = "*Required";
      }else{
        $pName = $_POST["pName"];
      }

      if (empty($_POST["pClass"])){
        $classError = "*Required";
      }else{
        $pClass = $_POST["pClass"];
      }

      if (empty($_POST["pStudentID"])){
        $idError = "*Required";
      }else{
        $pID = $_POST["pStudentID"];
      }

      if ((empty($nameError)) and (empty($idError)) and (empty($classError))){
        // echo "Age: " . $pAge . "<br>";
        // echo "Sex: " . $pGender . "<br>";
        // echo "Hand: " . $pHandedness . "<br>";
        // echo "Lang: " . $pLang . "<br>";
        // echo "Hearing: " . $pHearing . "<br>";
        // echo "Credits: " . $pCredits . "<br>";
        // echo "Name: " . $pName . "<br>";
        // echo "ID: " . $pID . "<br>";
        // echo "Class: " . $pClass . "<br>";
        $result = $pAge . $pGender . $pHandedness . $pLang . $pHearing . $pName . $pID . $pClass . date("Y-m-d H:i:s");
        $givenID = md5($result);
        $_SESSION["givenID"] = $givenID;
        $pInfo = array("pAge" => $pAge, "pGender" => $pGender, "pHandedness" => $pHandedness, "pLang" => $pLang, "pHearing" => $pHearing, "pName" => $pName, "pID" => $pID, "pClass" => $pClass);
        $_SESSION["pInfo"] = $pInfo;
        $sql = "INSERT INTO participant (name, studentID, class) VALUES ('$pName', '$pID', '$pClass')";
        if ($conn->query($sql) === TRUE){
          header("Location: audio-setup.php");
        }
      }else{
        header("Location: participant-information.php?error1=$nameError&error2=$idError&error3=$classError&disp=block");
      }
    }elseif($pCredits == 2){
      // $pName = "None";
      // $pID = "None";
      // $pClass = "None";
      // echo "Age: " . $pAge . "<br>";
      // echo "Sex: " . $pGender . "<br>";
      // echo "Hand: " . $pHandedness . "<br>";
      // echo "Lang: " . $pLang . "<br>";
      // echo "Hearing: " . $pHearing . "<br>";
      // echo "Credits: " . $pCredits . "<br>";
      // echo "Name: " . $pName . "<br>";
      // echo "ID: " . $pID . "<br>";
      // echo "Class: " . $pClass . "<br>";
      $result = $pAge . $pGender . $pHandedness . $pLang . $pHearing . date("Y-m-d H:i:s");
      $givenID = md5($result);
      $_SESSION["givenID"] = $givenID;
      $pInfo = array("pAge" => $pAge, "pGender" => $pGender, "pHandedness" => $pHandedness, "pLang" => $pLang, "pHearing" => $pHearing);
      $_SESSION["pInfo"] = $pInfo;
      header("Location: audio-setup.php");
    }else{
      $opt = "*Required";
      header("Location: participant-information.php?error4=$opt");
    }
  }
  if (isset($_POST["returnHome"])){
    header("Location: index.php");
  }
}

?>
