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
      <h1>Auditory Experiment</h1>
      <p>Please select and experiment of your interest</p>
      <hr>
    </div>
    <div class="centered">

        <h2>Speech Perception:</h2>
        <ul>
          <li>In this experiment you will listen to short clips of people speaking and type in what you heard.</li>
        </ul>
        <div class="buttonFix">
          <button class="btn btn-danger btn-lg btn-block" id="speech-perception">Do Speech Perception Experiment</button>
        </div>
        <h2>Sound Localization:</h2>
        <ul>
          <li>In this experiment you will listen to sounds and say where you think they are coming from.</li>
          <li>This is just an example to have multiple different experiments and style them properly on the page.</li>
        </ul>
        <div class="buttonFix">
          <button class="btn btn-danger btn-lg btn-block" id="sound-localization" disabled>Do Sound Localization Experiment</button>
        </div>

    </div>
  </div>
</body>
<script>
  document.getElementById("speech-perception").addEventListener("click", function(){
    location.href="consent-form.php?qs=speech-perception/";
  });
  document.getElementById("sound-localization").addEventListener("click", function(){
    location.href="consent-form.php?qs=sound-localization/";
  });

</script>
</html>
