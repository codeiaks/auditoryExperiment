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
      <h1>Experiment Instructions</h1>
      <p>The experiment will play one or more voices. Please type what you think the voice in <i>the middle</i> was saying.</p>
      <p>Some of these are very difficult. Please try your best but don't worry if you have trouble. It's OK to guess.</p>
      <hr>
      <p id="twm">We'll do some practice to get you started.</p>
      <p id="twm1">Type what you heard in the middle.</p>
    </div>
    <br>
    <div class="centered resized" id="practiceTest1">
      <textarea rows="3" cols="40" class="btn-block" id="testAnswer1"></textarea><br>
      <p style="text-align: center;"> 1/5 </p>
      <button class="btn btn-danger btn-lg btn-block" id="test1">Play</button>
      <button class="btn btn-danger btn-lg btn-block" id="next1" disabled>Next</button>
    </div>
    <div class="centered resized" id="practiceTest2" style="display: none;">
      <textarea rows="3" cols="40" class="btn-block" id="testAnswer2"></textarea><br>
      <p style="text-align: center;"> 2/5 </p>
      <button class="btn btn-danger btn-lg btn-block" id="test2">Play</button>
      <button class="btn btn-danger btn-lg btn-block" id="next2" disabled>Next</button>
    </div>
    <div class="centered resized" id="practiceTest3" style="display: none;">
      <textarea rows="3" cols="40" class="btn-block" id="testAnswer3"></textarea><br>
      <p style="text-align: center;"> 3/5 </p>
      <button class="btn btn-danger btn-lg btn-block" id="test3">Play</button>
      <button class="btn btn-danger btn-lg btn-block" id="next3" disabled>Next</button>
    </div>
    <div class="centered resized" id="practiceTest4" style="display: none;">
      <textarea rows="3" cols="40" class="btn-block" id="testAnswer4"></textarea><br>
      <p style="text-align: center;"> 4/5 </p>
      <button class="btn btn-danger btn-lg btn-block" id="test4">Play</button>
      <button class="btn btn-danger btn-lg btn-block" id="next4" disabled>Next</button>
    </div>
    <div class="centered resized" id="practiceTest5" style="display: none;">
      <textarea rows="3" cols="40" class="btn-block" id="testAnswer5"></textarea><br>
      <p style="text-align: center;"> 5/5 </p>
      <button class="btn btn-danger btn-lg btn-block" id="test5">Play</button>
      <button class="btn btn-danger btn-lg btn-block" id="next5" disabled>Next</button>
    </div>
    <div class="centered resized" id="showResponses" style="display: none;">
      <p style="text-align: center;"><b><u>Results of practice trials</u></b></p>
      <ol>
        <li>
          <p id="track1">Your answer: <span id="input1"></span></p>
          <p id="track1-ans">Correct answer: just get on with your job</p>
        </li>
        <li>
          <p id="track2">Your answer: <span id="input2"></span></p>
          <p id="track2-ans">Correct answer: i foolishly had done nothing about it</p>
        </li>
        <li>
          <p id="track3">Your answer: <span id="input3"></span></p>
          <p id="track3-ans">Correct answer: he was then replaced by ross</p>
        </li>
        <li>
          <p id="track4">Your answer: <span id="input4"></span></p>
          <p id="track4-ans">Correct answer: a hospital spokewoman described his condition as stable</p>
        </li>
        <li>
          <p id="track5">Your answer: <span id="input5"></span></p>
          <p id="track5-ans">Correct answer: they are only interested in attacking labour</p>
        </li>
      </ol>

      <button class="btn btn-danger btn-lg btn-block" id="finished">Start Experiment</button>
      <button class="btn btn-danger btn-lg btn-block" id="returnHome">Withdraw</button>
    </div>
  </div>
</body>
<script>
function playAudio(input){
  var aud_arr = [
    "./playlist/instructions/p304_403.wav",
    "./playlist/instructions/p302_180.wav",
    "./playlist/instructions/p283_379.wav",
    "./playlist/instructions/p302_158.wav",
    "./playlist/instructions/p286_192.wav"
  ];
  var aud = new Audio(aud_arr[input]);
  aud.play();
}
document.getElementById("test1").addEventListener("click", function(){
  document.getElementById("test1").disabled = true;
  document.getElementById("next1").disabled = false;
  playAudio(0);
});
document.getElementById("test2").addEventListener("click", function(){
  document.getElementById("test2").disabled = true;
  document.getElementById("next2").disabled = false;
  playAudio(1);
});
document.getElementById("test3").addEventListener("click", function(){
  document.getElementById("test3").disabled = true;
  document.getElementById("next3").disabled = false;
  playAudio(2);
});
document.getElementById("test4").addEventListener("click", function(){
  document.getElementById("test4").disabled = true;
  document.getElementById("next4").disabled = false;
  playAudio(3);
});
document.getElementById("test5").addEventListener("click", function(){
  document.getElementById("test5").disabled = true;
  document.getElementById("next5").disabled = false;
  playAudio(4);
});

document.getElementById("next1").addEventListener("click", function(){
  document.getElementById("input1").innerHTML = document.getElementById("testAnswer1").value;
  document.getElementById("practiceTest1").style.display = "none";
  document.getElementById("practiceTest2").style.display = "block";
});
document.getElementById("next2").addEventListener("click", function(){
  document.getElementById("input2").innerHTML = document.getElementById("testAnswer2").value;
  document.getElementById("practiceTest2").style.display = "none";
  document.getElementById("practiceTest3").style.display = "block";
;  });
document.getElementById("next3").addEventListener("click", function(){
  document.getElementById("input3").innerHTML = document.getElementById("testAnswer3").value;
  document.getElementById("practiceTest3").style.display = "none";
  document.getElementById("practiceTest4").style.display = "block";
});
document.getElementById("next4").addEventListener("click", function(){
  document.getElementById("input4").innerHTML = document.getElementById("testAnswer4").value;
  document.getElementById("practiceTest4").style.display = "none";
  document.getElementById("practiceTest5").style.display = "block";
});
document.getElementById("next5").addEventListener("click", function(){
  document.getElementById("input5").innerHTML = document.getElementById("testAnswer5").value;
  document.getElementById("twm").style.display = "none";
  document.getElementById("twm1").style.display = "none";
  document.getElementById("practiceTest5").style.display = "none";
  document.getElementById("showResponses").style.display = "block";
});

document.getElementById("finished").addEventListener("click", function(){
  location.href="experiment.php";
});
document.getElementById("returnHome").addEventListener("click", function(){
  location.href="index.php";
});
</script>
</html>
