<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auditory Experiment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/312c0e746f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="myStyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .error{
      color: red !important;
      font-weight: 900;
    }
  </style>
</head>
<body>
  <?php
  session_start();
  $disp = "none";
  if ($_SERVER["REQUEST_METHOD"] == "GET"){

    $pName = $pID = $pClass = "";

    if (isset($_SESSION["pInfo"])){
      $pName = $_SESSION["pName"];
      $pID = $_SESSION["pID"];
      $pClass = $_SESSION["pClass"];
    }

    if (isset($_GET["disp"])){
      $disp = $_GET["disp"];
    }else{
      $disp = "none";
    }

    if (!empty($_GET["error1"])){
      $nameError = $_GET["error1"];
    }else{
      $nameError = "";
    }

    if (!empty($_GET["error2"])){
      $idError = $_GET["error2"];
    }else{
      $idError = "";
    }

    if (!empty($_GET["error3"])){
      $classError = $_GET["error3"];
    }else{
      $classError = "";
    }

    if (!empty($_GET["error4"])){
      $opt = $_GET["error4"];
    }else{
      $opt = "";
    }
  }else{
    $disp = "none";
  }
  ?>
  <div class="container-fluid">
    <div class="centered">
      <h1>Participant Information</h1>
      <p>Please fill in the following form</p>
      <p><span class="error">* All Fields Required</span></p>
      <hr>
    </div>
    <div class="centered">
      <form action="wrapInfo.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="pAge">Age</label>
          <input type="number" class="form-control" id="pAge" name="pAge" min="18" max="65" value="18">
        </div>
        <div class="form-group">
          <label>Sex at birth: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pGender" id="pGenderM" value="1" checked>
          <label class="form-check-label" for="pGenderM">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pGender" id="pGenderF" value="2">
          <label class="form-check-label" for="pGenderF">Female</label>
        </div>
      </div>
        <div class="form-group">
          <label>Handedness: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pHandedness" id="pHandL" value="1" checked>
          <label class="form-check-label" for="pHandL">Left</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pHandedness" id="pHandR" value="2">
          <label class="form-check-label" for="pHandR">Right</label>
        </div>
      </div>
        <div class="form-group">
          <label>Is English you first language?  </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="spokenLang" id="pLangY" value="1" checked>
          <label class="form-check-label" for="pLangY">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="spokenLang" id="pLangN" value="2">
          <label class="form-check-label" for="pLangN">No</label>
        </div>
      </div>
        <div class="form-group">
          <label>Are you aware of any hearing problems?  </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hearingProblems" id="pEarN" value="1" checked>
          <label class="form-check-label" for="pEarN">No</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hearingProblems" id="pEarY" value="2">
          <label class="form-check-label" for="pEarY">Yes</label>
        </div>
      </div>
        <div class="form-group">
          <label for="classCredits">Are you participating for course credit? <span class="error"><?php echo $opt;?></span></label>
          <select class="form-control" id="classCredits" name="classCredits" onchange="showMore()">
            <option selected disabled>Choose Option</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
          </select>
        </div>
        <div id="courseInfo" style="display: <?php echo $disp; ?>;">
          <div class="form-group">
            <label for="pName">Full Name <span class="error"><?php echo $nameError; ?></span></label>
            <input class="form-control" type="text" id="pName" name="pName" value="<?php echo $pName; ?>">
          </div>
          <div class="form-group">
            <label for="pStudentID">Student ID <span class="error"><?php echo $idError; ?></span></label>
            <input class="form-control" type="text" id="pStudentID" name="pStudentID" value="<?php echo $pID; ?>">
          </div>
          <div class="form-group">
            <label for="pClass">Course Number <span class="error"><?php echo $classError; ?></span></label>
            <input class="form-control" type="text" id="pClass" name="pClass" placeholder="ex: Neuro4850-A" value="<?php echo $pClass; ?>">
          </div>
        </div>
        <div style="display:none;">
          <input type="hidden" value="" name="qs" id="whichExp">
        </div>
        <hr>
        <button class="btn btn-danger btn-lg btn-block" type="submit" name="proceed">Proceed</button>
        <button class="btn btn-danger btn-lg btn-block" name="returnHome">Return Home</button>
      </form>
  </div>
</body>
<script>
  function showMore(){
    var x = document.getElementById("classCredits").value;
    if (x == "1"){
      document.getElementById("courseInfo").style.display = "block";
    }else{
      document.getElementById("courseInfo").style.display = "none";
    }
  }
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const qs = urlParams.get('qs');
  document.getElementById("whichExp").value = qs;
</script>
</html>
