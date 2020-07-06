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
      <h1>Audio Setup</h1>
      <p>Please adjust the volume of your headphones to be comfortable</p>
      <hr>
    </div>
    <div class="centered">
      <div id="mainSetup">
        <div class="centered">
          <p>Now we need to check your left and right headphones.</p>
          <p>Do you hear the voice coming from the <span style="color: red;"><u>center</u></span>?</p>
          <p>If you do not hear anything or you hear something from one side, there might be something wrong with your audio system. Please try again with different headphones or a different computer.</p>
        </div>
        <p class="centered"> 1/3 </p>
        <button class="btn btn-danger btn-lg btn-block" id="playBoth">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="showLeft">Next</button>
      </div>
    </div>
    <div class="centered">
      <div id="leftSetup" style="display: none;">
        <div class="centered">
          <p>Now we need to check your left and right headphones.</p>
          <p>Do you hear the voice coming from the <span style="color: red;"><u>left</u></span>?</p>
          <p>If you hear the voice on the right, please check that your headphones are not switched!</p>
          <p>If you do not hear anything, there might be something wrong with your audio system. Please try again with different headphones or a different computer.</p>
        </div>
        <p class="centered"> 2/3 </p>
        <button class="btn btn-danger btn-lg btn-block" id="playLeft">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="showRight">Yes, the sound is on the left. Next!</button>
      </div>
    </div>
    <div class="centered">
      <div id="rightSetup" style="display: none;">
        <div class="centered">
          <p>Now we need to check your left and right headphones.</p>
          <p>Do you hear the voice coming from the <span style="color: red;"><u>right</u></span>?</p>
          <p>If you hear the voice on the left, please check that your headphones are not switched!</p>
          <p>If you do not hear anything, there might be something wrong with your audio system. Please try again with different headphones or a different computer.</p>
        </div>
        <p class="centered"> 3/3 </p>
        <button class="btn btn-danger btn-lg btn-block" id="playRight">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="continue">Yes, the sound is on the right, Proceed to the Experiment.</button>
      </div>
    </div>
  </div>
</body>
<script>
  function startExample(input){
    var audioFiles = [
      "./playlist/examples/both.wav",
      "./playlist/examples/left.wav",
      "./playlist/examples/right.wav",
    ];

    var newTrack = new Audio(audioFiles[input]);
    newTrack.play();

  }

  document.getElementById("playBoth").addEventListener("click", function(){
    startExample(0);
  });
  document.getElementById("playLeft").addEventListener("click", function(){
    startExample(1);
  });
  document.getElementById("playRight").addEventListener("click", function(){
    startExample(2);
  });

  document.getElementById("showLeft").addEventListener("click", function(){
    document.getElementById("mainSetup").style.display = "none";
    document.getElementById("rightSetup").style.display = "none";
    document.getElementById("leftSetup").style.display = "block";
  });
  document.getElementById("showRight").addEventListener("click", function(){
    document.getElementById("mainSetup").style.display = "none";
    document.getElementById("leftSetup").style.display = "none";
    document.getElementById("rightSetup").style.display = "block";
  });
  document.getElementById("continue").addEventListener("click", function(){
    location.href="experiment-instructions.php";
  });
</script>
</html>
