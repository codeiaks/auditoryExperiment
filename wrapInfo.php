<?php
  session_start();
  include("dBConnection.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["proceed"])){
      $pAge = $pGender = $pHandedness = $pLang = $pHearing = "";

      if (isset($_POST["pAge"])){
        $pAge = $_POST["pAge"];
      }

      if (isset($_POST["pGender"])){
        $tGender = $_POST["pGender"];
        if ($tGender == 1){
          $pGender = 1;
        }else{
          $pGender = 0;
        }

      }

      if (isset($_POST["pHandedness"])){
        $tHand = $_POST["pHandedness"];
        if ($tHand == 1){
          $pHandedness = 1;
        }else{
          $pHandedness = 0;
        }
      }

      if (isset($_POST["spokenLang"])){
        $tLang = $_POST["spokenLang"];
        if ($tLang == 1){
          $pLang = 1;
        }else{
          $pLang = 0;
        }
      }

      if (isset($_POST["hearingProblems"])){
        $tEar = $_POST["hearingProblems"];
        if ($tEar == 1){
          $pHearing = 1;
        }else{
          $pHearing = 0;
        }
      }

      if (isset($_POST["qs"])){
        $whichExp = $_POST["qs"];
        $whichExp = rtrim($whichExp, "/");
      }

      if (isset($_POST["classCredits"])){
        $classCred = $_POST["classCredits"];
        if ($classCred == "1"){
          if (isset($_POST["pName"])){
            $pName = $_POST["pName"];
          }

          if (isset($_POST["pStudentID"])){
            $pSid = $_POST["pStudentID"];
          }

          if (isset($_POST["pClass"])){
            $pClass = $_POST["pClass"];
          }
          $result = $pAge . $pGender . $pHandedness . $pLang . $pHearing . $pName . $pSid . $pClass . $pName . $pSid . $pClass . date("Y-m-d H:i:s");
          $givenID = md5($result);
          $_SESSION["givenID"] = $givenID;
          $participantInformation = array("pAge" => $pAge, "pGender" => $pGender, "pHandedness" => $pHandedness, "pLang" => $pLang, "pHearing" => $pHearing, "pName" => $pName, "pID" => $pSid, "pClass" => $pClass, "givenID" => $givenID, "whichExp" => $whichExp);
          if ($conn->connect_error){
            $_SESSION["connError"] = $conn->connect_error;
          }
          $sql = "INSERT INTO participant (name, studentID, class) VALUES ('$pName', '$pSid', '$pClass')";

          if ($conn->query($sql) === TRUE){
            $_SESSION["queryResult"] = "STORED";
          }else{
            $_SESSION["queryResult"] = "ERROR";
          }
        }else{
          // $pName = "NONE";
          // $pSid = "NONE";
          // $pClass = "NONE";
          $result = $pAge . $pGender . $pHandedness . $pLang . $pHearing . date("Y-m-d H:i:s");
          $givenID = md5($result);
          $_SESSION["givenID"] = $givenID;
          $participantInformation = array("pAge" => $pAge, "pGender" => $pGender, "pHandedness" => $pHandedness, "pLang" => $pLang, "pHearing" => $pHearing, "givenID" => $givenID, "whichExp" => $whichExp);
        }
      }

      // $participantInformation = array("pAge" => $pAge, "pGender" => $pGender, "pHandedness" => $pHandedness, "pLang" => $pLang, "pHearing" => $pHearing, "pName" => $pName, "pID" => $pSid, "pClass" => $pClass, "givenID" => $givenID, "whichExp" => $whichExp);
      $_SESSION["pInfo"] = $participantInformation;
      header("Location: edinburgh-test.php");
    }
    if (isset($_POST["returnHome"])){
      header("Location: destroySession.php");
    }
  }

  ?>
