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
  <?php
    session_start();
  ?>
  <div class="container-fluid">
    <div class="centered">
      <h1>Experiment</h1>
      <p>Please select a category of your interest</p>
      <hr>
    </div>
    <div class="experiment">
      <div class="sub-experiment" id="auditory">
        <!--img src="./images/audio.png" alt="auditory"-->
      </div>
      <div class="sub-sub-experiment">
        <button class="btn btn-danger btn-lg btn-block" id="btn-audio">Auditory</button>
      </div>
    </div>
    <div class="experiment">
      <div class="sub-experiment" id="visual">
        <!--img src="./images/video.png" alt="visual"-->
      </div>
      <div class="sub-sub-experiment">
        <button class="btn btn-danger btn-lg btn-block" id="btn-video" disabled>Visual</button>
      </div>
    </div>
  </div>
</body>
<script>
  document.getElementById("btn-audio").addEventListener("click", function(){
    location.href="audio-experiment.php";
  });
  document.getElementById("btn-video").addEventListener("click", function(){
    location.href="video-experiment.php";
  });
</script>
</html>
