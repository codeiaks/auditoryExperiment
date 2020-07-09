<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auditory Experiment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/312c0e746f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="myStyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container-fluid">
    <div class="centered">
      <h1>Participant Information</h1>
      <p>Please fill in the following form</p>
      <hr>
    </div>
    <div class="centered">
      <form action="wrapInfo.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="pAge">Age</label>
          <input type="number" class="form-control" id="pAge" name="pAge" min="18" max="65" value="18">
        </div>
        <div class="form-group">
          <label for="pGender">Sex at Birth</label>
          <select class="form-control" id="pGender" aria-describedby="participantGender" name="pGender">
            <option selected disabled>Choose Option</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
          </select>
          <small id="participantGender" class="form-text text-muted" style="color: white !important;">
            We understand and support what you identify as. For the purpose of this study, please select the gender you were assigned at birth.
          </small>
        </div>
        <div class="form-group">
          <label for="pHandedness">Handedness</label>
          <select class="form-control" id="pHandedness" name="pHandedness">
            <option selected disabled>Choose Option</option>
            <option value="1">Left</option>
            <option value="2">Right</option>
          </select>
        </div>
        <div class="form-group">
          <label for="spokenLang">Is English your first language?</label>
          <select class="form-control" id="spokenLang" name="spokenLang">
            <option selected disabled>Choose Option</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
          </select>
        </div>
        <div class="form-group">
          <label for="hearingProblems">Are you aware of any hearing problems?</label>
          <select class="form-control" id="hearingProblems" name="hearingProblems">
            <option selected disabled>Choose Option</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
          </select>
        </div>
        <div class="form-group">
          <label for="classCredits">Are you participating for course credit?</label>
          <select class="form-control" id="classCredits" name="classCredits" onchange="showMore()">
            <option selected disabled>Choose Option</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
          </select>
        </div>
        <div id="courseInfo" style="display: none;">
          <div class="form-group">
            <label for="pName">Full Name</label>
            <input class="form-control" type="text" id="pName" name="pName">
          </div>
          <div class="form-group">
            <label for="pStudentID">Student ID</label>
            <input class="form-control" type="text" id="pStudentID" name="pStudentID">
          </div>
          <div class="form-group">
            <label for="pClass">Course Number</label>
            <input class="form-control" type="text" id="pClass" name="pClass" placeholder="ex: Neuro4850-A">
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
