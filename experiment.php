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
  if (!isset($_SESSION["songID"])){
    $songID = 0;
  }
  $tracks = array('0' => "./playlist/expTracks/p283_056.wav",
                              '1' => "./playlist/expTracks/p279_295.wav",
                              '2' => "./playlist/expTracks/p237_188.wav",
                              '3' => "./playlist/expTracks/p304_229.wav",
                              '4' => "./playlist/expTracks/p229_330.wav",
                              '5' => "./playlist/expTracks/p304_305.wav",
                              '6' => "./playlist/expTracks/p304_360.wav",
                              '7' => "./playlist/expTracks/p283_024.wav",
                              '8' => "./playlist/expTracks/p274_429.wav",
                              '9' => "./playlist/expTracks/p277_441.wav",
                              '10' => "./playlist/expTracks/p283_128.wav",
                              '11' => "./playlist/expTracks/p277_406.wav",
                              '12' => "./playlist/expTracks/p286_307.wav",
                              '13' => "./playlist/expTracks/p279_376.wav",
                              '14' => "./playlist/expTracks/p277_197.wav",
                              '15' => "./playlist/expTracks/p277_299.wav",
                              '16' => "./playlist/expTracks/p274_281.wav",
                              '17' => "./playlist/expTracks/p286_170.wav",
                              '18' => "./playlist/expTracks/p277_316.wav",
                              '19' => "./playlist/expTracks/p283_373.wav",
                              '20' => "./playlist/expTracks/p302_110.wav",
                              '21' => "./playlist/expTracks/p277_090.wav",
                              '22' => "./playlist/expTracks/p279_336.wav",
                              '23' => "./playlist/expTracks/p302_063.wav",
                              '24' => "./playlist/expTracks/p274_243.wav",
                              '25' => "./playlist/expTracks/p283_354.wav",
                              '26' => "./playlist/expTracks/p283_449.wav",
                              '27' => "./playlist/expTracks/p304_409.wav"
                            );

  if (!isset($_SESSION["tracks"])){
    shuffle($tracks);
    $_SESSION["tracks"] = $tracks;
  }
  $userAnsNum = array("userAnswer1",
"userAnswer2",
"userAnswer3",
"userAnswer4",
"userAnswer5",
"userAnswer6",
"userAnswer7",
"userAnswer8",
"userAnswer9",
"userAnswer10",
"userAnswer11",
"userAnswer12",
"userAnswer13",
"userAnswer14",
"userAnswer15",
"userAnswer16",
"userAnswer17",
"userAnswer18",
"userAnswer19",
"userAnswer20",
"userAnswer21",
"userAnswer22",
"userAnswer23",
"userAnswer24",
"userAnswer25",
"userAnswer26",
"userAnswer27",
"userAnswer28"
);
  ?>
  <div class="container-fluid">
    <div class="centered">
      <h1>Experiment</h1>
      <p>When you are ready press play.</p>
      <p>Type what you hear in the middle.</p>
      <hr>
    </div>
    <div class="centered">
      <div class="expResize" id="track1">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[0];?>" name="<?php echo $userAnsNum[0];?>"></textarea><br>
        <p style="text-align: center;"> 1/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play1">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next1" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="withdraw1">Withdraw</button>
        <input type="hidden" id="t1" value="<?php echo $_SESSION["tracks"][0]; ?>">
      </div>
      <div class="expResize" id="track2" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[1];?>" name="<?php echo $userAnsNum[1];?>"></textarea><br>
        <p style="text-align: center;"> 2/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play2">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next2" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="withdraw2">Withdraw</button>
        <input type="hidden" id="t2" value="<?php echo $_SESSION["tracks"][1]; ?>">
      </div>
      <div class="expResize" id="track3" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[2];?>" name="<?php echo $userAnsNum[2];?>"></textarea><br>
        <p style="text-align: center;"> 3/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play3">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next3" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="withdraw3">Withdraw</button>
        <input type="hidden" id="t3" value="<?php echo $_SESSION["tracks"][2]; ?>">
      </div>
      <div class="expResize" id="track4" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[3];?>" name="<?php echo $userAnsNum[3];?>"></textarea><br>
        <p style="text-align: center;"> 4/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play4">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next4" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="withdraw4">Withdraw</button>
        <input type="hidden" id="t4" value="<?php echo $_SESSION["tracks"][3]; ?>">
      </div>
      <div class="expResize" id="track5" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[4];?>" name="<?php echo $userAnsNum[4];?>"></textarea><br>
        <p style="text-align: center;"> 5/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play5">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next5" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw5">Withdraw</button>
        <input type="hidden" id="t5" value="<?php echo $_SESSION["tracks"][4]; ?>">
      </div>
      <div class="expResize" id="track6" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[5];?>" name="<?php echo $userAnsNum[5];?>"></textarea><br>
        <p style="text-align: center;"> 6/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play6">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next6" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw6">Withdraw</button>
        <input type="hidden" id="t6" value="<?php echo $_SESSION["tracks"][5]; ?>">
      </div>
      <div class="expResize" id="track7" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[6];?>" name="<?php echo $userAnsNum[6];?>"></textarea><br>
        <p style="text-align: center;"> 7/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play7">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next7" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw7">Withdraw</button>
        <input type="hidden" id="t7" value="<?php echo $_SESSION["tracks"][6]; ?>">
      </div>
      <div class="expResize" id="track8" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[7];?>" name="<?php echo $userAnsNum[7];?>"></textarea><br>
        <p style="text-align: center;"> 8/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play8">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next8" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw8">Withdraw</button>
        <input type="hidden" id="t8" value="<?php echo $_SESSION["tracks"][7]; ?>">
      </div>
      <div class="expResize" id="track9" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[8];?>" name="<?php echo $userAnsNum[8];?>"></textarea><br>
        <p style="text-align: center;"> 9/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play9">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next9" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw9">Withdraw</button>
        <input type="hidden" id="t9" value="<?php echo $_SESSION["tracks"][8]; ?>">
      </div>
      <div class="expResize" id="track10" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[9]; ?>" name="<?php echo $userAnsNum[9]; ?>"></textarea><br>
        <p style="text-align: center;"> 10/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play10">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next10" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw10">Withdraw</button>
        <input type="hidden" id="t10" value="<?php echo $_SESSION["tracks"][9]; ?>">
      </div>
      <div class="expResize" id="track11" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[10]; ?>" name="<?php echo $userAnsNum[10]; ?>"></textarea><br>
        <p style="text-align: center;"> 11/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play11">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next11" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw11">Withdraw</button>
        <input type="hidden" id="t11" value="<?php echo $_SESSION["tracks"][10]; ?>">
      </div>
      <div class="expResize" id="track12" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[11]; ?>" name="<?php echo $userAnsNum[11]; ?>"></textarea><br>
        <p style="text-align: center;"> 12/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play12">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next12" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw12">Withdraw</button>
        <input type="hidden" id="t12" value="<?php echo $_SESSION["tracks"][11]; ?>">
      </div>
      <div class="expResize" id="track13" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[12]; ?>" name="<?php echo $userAnsNum[12]; ?>"></textarea><br>
        <p style="text-align: center;"> 13/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play13">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next13" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw13">Withdraw</button>
        <input type="hidden" id="t13" value="<?php echo $_SESSION["tracks"][12]; ?>">
      </div>
      <div class="expResize" id="track14" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[13]; ?>" name="<?php echo $userAnsNum[13]; ?>"></textarea><br>
        <p style="text-align: center;"> 14/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play14">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next14" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw14">Withdraw</button>
        <input type="hidden" id="t14" value="<?php echo $_SESSION["tracks"][13]; ?>">
      </div>
      <div class="expResize" id="track15" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[14]; ?>" name="<?php echo $userAnsNum[14]; ?>"></textarea><br>
        <p style="text-align: center;"> 15/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play15">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next15" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw15">Withdraw</button>
        <input type="hidden" id="t15" value="<?php echo $_SESSION["tracks"][14]; ?>">
      </div>
      <div class="expResize" id="track16" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[15]; ?>" name="<?php echo $userAnsNum[15]; ?>"></textarea><br>
        <p style="text-align: center;"> 16/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play16">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next16" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw16">Withdraw</button>
        <input type="hidden" id="t16" value="<?php echo $_SESSION["tracks"][15]; ?>">
      </div>
      <div class="expResize" id="track17" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[16]; ?>" name="<?php echo $userAnsNum[16]; ?>"></textarea><br>
        <p style="text-align: center;"> 17/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play17">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next17" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw17">Withdraw</button>
        <input type="hidden" id="t17" value="<?php echo $_SESSION["tracks"][16]; ?>">
      </div>
      <div class="expResize" id="track18" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[17]; ?>" name="<?php echo $userAnsNum[17]; ?>"></textarea><br>
        <p style="text-align: center;"> 18/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play18">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next18" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw18">Withdraw</button>
        <input type="hidden" id="t18" value="<?php echo $_SESSION["tracks"][17]; ?>">
      </div>
      <div class="expResize" id="track19" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[18]; ?>" name="<?php echo $userAnsNum[18]; ?>"></textarea><br>
        <p style="text-align: center;"> 19/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play19">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next19" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw19">Withdraw</button>
        <input type="hidden" id="t19" value="<?php echo $_SESSION["tracks"][18]; ?>">
      </div>
      <div class="expResize" id="track20" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[19]; ?>" name="<?php echo $userAnsNum[19]; ?>"></textarea><br>
        <p style="text-align: center;"> 20/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play20">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next20" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw20">Withdraw</button>
        <input type="hidden" id="t20" value="<?php echo $_SESSION["tracks"][19]; ?>">
      </div>
      <div class="expResize" id="track21" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[20]; ?>" name="<?php echo $userAnsNum[20]; ?>"></textarea><br>
        <p style="text-align: center;"> 21/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play21">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next21" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw21">Withdraw</button>
        <input type="hidden" id="t21" value="<?php echo $_SESSION["tracks"][20]; ?>">
      </div>
      <div class="expResize" id="track22" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[21]; ?>" name="<?php echo $userAnsNum[21]; ?>"></textarea><br>
        <p style="text-align: center;"> 22/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play22">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next22" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw22">Withdraw</button>
        <input type="hidden" id="t22" value="<?php echo $_SESSION["tracks"][21]; ?>">
      </div>
      <div class="expResize" id="track23" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[22]; ?>" name="<?php echo $userAnsNum[22]; ?>"></textarea><br>
        <p style="text-align: center;"> 23/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play23">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next23" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw23">Withdraw</button>
        <input type="hidden" id="t23" value="<?php echo $_SESSION["tracks"][22]; ?>">
      </div>
      <div class="expResize" id="track24" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[23]; ?>" name="<?php echo $userAnsNum[23]; ?>"></textarea><br>
        <p style="text-align: center;"> 24/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play24">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next24" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw24">Withdraw</button>
        <input type="hidden" id="t24" value="<?php echo $_SESSION["tracks"][23]; ?>">
      </div>
      <div class="expResize" id="track25" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[24]; ?>" name="<?php echo $userAnsNum[24]; ?>"></textarea><br>
        <p style="text-align: center;"> 25/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play25">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next25" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw25">Withdraw</button>
        <input type="hidden" id="t25" value="<?php echo $_SESSION["tracks"][24]; ?>">
      </div>
      <div class="expResize" id="track26" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[25]; ?>" name="<?php echo $userAnsNum[25]; ?>"></textarea><br>
        <p style="text-align: center;"> 26/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play26">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next26" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw26">Withdraw</button>
        <input type="hidden" id="t26" value="<?php echo $_SESSION["tracks"][25]; ?>">
      </div>
      <div class="expResize" id="track27" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[26]; ?>" name="<?php echo $userAnsNum[26]; ?>"></textarea><br>
        <p style="text-align: center;"> 27/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play27">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next27" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="witdraw27">Withdraw</button>
        <input type="hidden" id="t27" value="<?php echo $_SESSION["tracks"][26]; ?>">
      </div>
      <div class="expResize" id="track28" style="display: none;">
        <textarea rows="3" class="btn-block" id="<?php echo $userAnsNum[27]; ?>" name="<?php echo $userAnsNum[27]; ?>"></textarea><br>
        <p style="text-align: center;"> 28/28 </p>
        <button class="btn btn-danger btn-lg btn-block" id="play28">Play</button>
        <button class="btn btn-danger btn-lg btn-block" id="next28" disabled>Next</button>
        <button class="btn btn-danger btn-lg btn-block" id="returnHome">Withdraw</button>
        <input type="hidden" id="t28" value="<?php echo $_SESSION["tracks"][27]; ?>">
      </div>
    </div>
  </div>
</body>
<script>
  function cleanStrings(input) {
    //var regexp = new RegExp('#([^\\s]*)', 'g');
    input = input.replace(/'/g, '_');
    input = input.replace(/[&\/\\#,+()$~%.":*?<>{}]/g, '');

    return input
  }
  document.getElementById("play1").addEventListener("click", function() {
    document.getElementById("play1").disabled = true;
    document.getElementById("next1").disabled = false;
    var track = document.getElementById("t1").value;
    var x = new Audio(track);
    x.play();
  });
  document.getElementById("play2").addEventListener("click", function() {
    document.getElementById("play2").disabled = true;
    document.getElementById("next2").disabled = false;
    var track = document.getElementById("t2").value;
    var x = new Audio(track);
    x.play();
  });
  document.getElementById("play3").addEventListener("click", function() {
    document.getElementById("play3").disabled = true;
    document.getElementById("next3").disabled = false;
    var track = document.getElementById("t3").value;
    var x = new Audio(track);
    x.play();
  });
  document.getElementById("play4").addEventListener("click", function() {
    document.getElementById("play4").disabled = true;
    document.getElementById("next4").disabled = false;
    var track = document.getElementById("t4").value;
    var x = new Audio(track);
    x.play();
  });
  var v5 = document.getElementById("play5");
  if (v5) {
    v5.addEventListener("click", function() {
      document.getElementById("play5").disabled = true;
      document.getElementById("next5").disabled = false;
      var track = document.getElementById("t5").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play6").addEventListener("click", function() {
    document.getElementById("play6").disabled = true;
    document.getElementById("next6").disabled = false;
    var track = document.getElementById("t6").value;
    var x = new Audio(track);
    x.play();
  });
  var v7 = document.getElementById("play7");
  if (v7) {
    v7.addEventListener("click", function() {
      document.getElementById("play7").disabled = true;
      document.getElementById("next7").disabled = false;
      var track = document.getElementById("t7").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play8").addEventListener("click", function() {
    document.getElementById("play8").disabled = true;
    document.getElementById("next8").disabled = false;
    var track = document.getElementById("t8").value;
    var x = new Audio(track);
    x.play();
  });
  var v9 = document.getElementById("play9")
  if (v9) {
    v9.addEventListener("click", function() {
      document.getElementById("play9").disabled = true;
      document.getElementById("next9").disabled = false;
      var track = document.getElementById("t9").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play10").addEventListener("click", function() {
    document.getElementById("play10").disabled = true;
    document.getElementById("next10").disabled = false;
    var track = document.getElementById("t10").value;
    var x = new Audio(track);
    x.play();
  });

  var v11 = document.getElementById("play11");

  if (v11) {
    v11.addEventListener("click", function() {
      document.getElementById("play11").disabled = true;
      document.getElementById("next11").disabled = false;
      var track = document.getElementById("t11").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play12").addEventListener("click", function() {
    document.getElementById("play12").disabled = true;
    document.getElementById("next12").disabled = false;
    var track = document.getElementById("t12").value;
    var x = new Audio(track);
    x.play();
  });
  var v13 = document.getElementById("play13");
  if (v13) {
    v13.addEventListener("click", function() {
      document.getElementById("play13").disabled = true;
      document.getElementById("next13").disabled = false;
      var track = document.getElementById("t13").value;
      var x = new Audio(track);
      x.play();
    });
  };
  document.getElementById("play14").addEventListener("click", function() {
    document.getElementById("play14").disabled = true;
    document.getElementById("next14").disabled = false;
    var track = document.getElementById("t14").value;
    var x = new Audio(track);
    x.play();
  });
  var v15 = document.getElementById("play15");

  if (v15) {
    v15.addEventListener("click", function() {
      document.getElementById("play15").disabled = true;
      document.getElementById("next15").disabled = false;
      var track = document.getElementById("t15").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play16").addEventListener("click", function() {
    document.getElementById("play16").disabled = true;
    document.getElementById("next16").disabled = false;
    var track = document.getElementById("t16").value;
    var x = new Audio(track);
    x.play();
  });
  var v17 = document.getElementById("play17");
  if (v17) {
    v17.addEventListener("click", function() {
      document.getElementById("play17").disabled = true;
      document.getElementById("next17").disabled = false;
      var track = document.getElementById("t17").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play18").addEventListener("click", function() {
    document.getElementById("play18").disabled = true;
    document.getElementById("next18").disabled = false;
    var track = document.getElementById("t18").value;
    var x = new Audio(track);
    x.play();
  });
  var v19 = document.getElementById("play19");
  if (v19) {
    v19.addEventListener("click", function() {
      document.getElementById("play19").disabled = true;
      document.getElementById("next19").disabled = false;
      var track = document.getElementById("t19").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play20").addEventListener("click", function() {
    document.getElementById("play20").disabled = true;
    document.getElementById("next20").disabled = false;
    var track = document.getElementById("t20").value;
    var x = new Audio(track);
    x.play();
  });
  var v21 = document.getElementById("play21")
  if (v21) {
    v21.addEventListener("click", function() {
      document.getElementById("play21").disabled = true;
      document.getElementById("next21").disabled = false;
      var track = document.getElementById("t21").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play22").addEventListener("click", function() {
    document.getElementById("play22").disabled = true;
    document.getElementById("next22").disabled = false;
    var track = document.getElementById("t22").value;
    var x = new Audio(track);
    x.play();
  });
  var v23 = document.getElementById("play23");
  if (v23) {
    v23.addEventListener("click", function() {
      document.getElementById("play23").disabled = true;
      document.getElementById("next23").disabled = false;
      var track = document.getElementById("t23").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play24").addEventListener("click", function() {
    document.getElementById("play24").disabled = true;
    document.getElementById("next24").disabled = false;
    var track = document.getElementById("t24").value;
    var x = new Audio(track);
    x.play();
  });
  var v25 = document.getElementById("play25");
  if (v25) {
    v25.addEventListener("click", function() {
      document.getElementById("play25").disabled = true;
      document.getElementById("next25").disabled = false;
      var track = document.getElementById("t25").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play26").addEventListener("click", function() {
    document.getElementById("play26").disabled = true;
    document.getElementById("next26").disabled = false;
    var track = document.getElementById("t26").value;
    var x = new Audio(track);
    x.play();
  });
  var v27 = document.getElementById("play27");
  if (v27) {
    v27.addEventListener("click", function() {
      document.getElementById("play27").disabled = true;
      document.getElementById("next27").disabled = false;
      var track = document.getElementById("t27").value;
      var x = new Audio(track);
      x.play();
    });
  }
  document.getElementById("play28").addEventListener("click", function() {
    document.getElementById("play28").disabled = true;
    document.getElementById("next28").disabled = false;
    document.getElementById("next28").innerHTML = "Submit Answers";
    var track = document.getElementById("t28").value;
    var x = new Audio(track);
    x.play();
  });
  var userResponses = [];
  document.getElementById("next1").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer1").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track1").style.display = "none";
    document.getElementById("track2").style.display = "block";
  });

  document.getElementById("next2").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer2").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track2").style.display = "none";
    document.getElementById("track3").style.display = "block";
  });
  document.getElementById("next3").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer3").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track3").style.display = "none";
    document.getElementById("track4").style.display = "block";
  });
  document.getElementById("next4").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer4").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track4").style.display = "none";
    document.getElementById("track5").style.display = "block";
  });
  var n5 = document.getElementById("next5");
  if (n5) {
    n5.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer5").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track5").style.display = "none";
      document.getElementById("track6").style.display = "block";
    });
  }
  document.getElementById("next6").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer6").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track6").style.display = "none";
    document.getElementById("track7").style.display = "block";
  });
  var n7 = document.getElementById("next7");
  if (n7) {
    n7.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer7").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track7").style.display = "none";
      document.getElementById("track8").style.display = "block";
    });
  }
  document.getElementById("next8").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer8").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track8").style.display = "none";
    document.getElementById("track9").style.display = "block";
  });
  var n9 = document.getElementById("next9");
  if (n9) {
    n9.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer9").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track9").style.display = "none";
      document.getElementById("track10").style.display = "block";
    });
  }
  document.getElementById("next10").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer10").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track10").style.display = "none";
    document.getElementById("track11").style.display = "block";
  });
  var n11 = document.getElementById("next11");
  if (n11) {
    n11.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer11").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track11").style.display = "none";
      document.getElementById("track12").style.display = "block";
    });
  }
  document.getElementById("next12").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer12").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track12").style.display = "none";
    document.getElementById("track13").style.display = "block";
  });
  var n13 = document.getElementById("next13");
  if (n13) {
    n13.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer13").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track13").style.display = "none";
      document.getElementById("track14").style.display = "block";
    });
  }
  document.getElementById("next14").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer14").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track14").style.display = "none";
    document.getElementById("track15").style.display = "block";
  });
  var n15 = document.getElementById("next15");
  if (n15) {
    n15.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer15").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track15").style.display = "none";
      document.getElementById("track16").style.display = "block";
    });
  }
  document.getElementById("next16").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer16").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track16").style.display = "none";
    document.getElementById("track17").style.display = "block";
  });
  var n17 = document.getElementById("next17");
  if (n17) {
    n17.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer17").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track17").style.display = "none";
      document.getElementById("track18").style.display = "block";
    });
  }
  document.getElementById("next18").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer18").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track18").style.display = "none";
    document.getElementById("track19").style.display = "block";
  });
  var n19 = document.getElementById("next19");
  if (n19) {
    n19.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer19").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track19").style.display = "none";
      document.getElementById("track20").style.display = "block";
    });
  }
  document.getElementById("next20").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer20").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track20").style.display = "none";
    document.getElementById("track21").style.display = "block";
  });
  var n21 = document.getElementById("next21");
  if (n21) {
    n21.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer21").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track21").style.display = "none";
      document.getElementById("track22").style.display = "block";
    });
  }
  document.getElementById("next22").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer22").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track22").style.display = "none";
    document.getElementById("track23").style.display = "block";
  });
  var n23 = document.getElementById("next23");
  if (n23) {
    n23.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer23").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track23").style.display = "none";
      document.getElementById("track24").style.display = "block";
    });
  }
  document.getElementById("next24").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer24").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track24").style.display = "none";
    document.getElementById("track25").style.display = "block";
  });
  var n25 = document.getElementById("next25");
  if (n25) {
    n25.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer25").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track25").style.display = "none";
      document.getElementById("track26").style.display = "block";
    });
  }
  document.getElementById("next26").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer26").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track26").style.display = "none";
    document.getElementById("track27").style.display = "block";
  });
  var n27 = document.getElementById("next27");
  if (n27) {
    n27.addEventListener("click", function() {
      var answer = document.getElementById("userAnswer27").value;
      userResponses.push(cleanStrings(answer));
      document.getElementById("track27").style.display = "none";
      document.getElementById("track28").style.display = "block";
    });
  }
  document.getElementById("next28").addEventListener("click", function() {
    var answer = document.getElementById("userAnswer28").value;
    userResponses.push(cleanStrings(answer));
    document.getElementById("track28").style.display = "none";
    //location.href= "wrapAnswers.php?answers=" + userResponses;
    location.href = "wrapAnswers.php?answers1=" +
    userResponses[0] + "&answers2=" +
    userResponses[1] + "&answers3=" +
    userResponses[2] + "&answers4=" +
    userResponses[3] + "&answers5=" +
    userResponses[4] + "&answers6=" +
    userResponses[5] + "&answers7=" +
    userResponses[6] + "&answers8=" +
    userResponses[7] + "&answers9=" +
    userResponses[8] + "&answers10=" +
    userResponses[9] + "&answers11=" +
    userResponses[10] + "&answers12=" +
    userResponses[11] + "&answers13=" +
    userResponses[12] + "&answers14=" +
    userResponses[13] + "&answers15=" +
    userResponses[14] + "&answers16=" +
    userResponses[15] + "&answers17=" +
    userResponses[16] + "&answers18=" +
    userResponses[17] + "&answers19=" +
    userResponses[18] + "&answers20=" +
    userResponses[19] + "&answers21=" +
    userResponses[20] + "&answers22=" +
    userResponses[21] + "&answers23=" +
    userResponses[22] + "&answers24=" +
    userResponses[23] + "&answers25=" +
    userResponses[24] + "&answers26=" +
    userResponses[25] + "&answers27=" +
    userResponses[26] + "&answers28=" +
    userResponses[27];
  });


  document.getElementById("returnHome").addEventListener("click", function() {
    location.href = "destroySession.php";
  })

  var w1 = document.getElementById("withdraw1");
  if (w1) {
    w1.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w2 = document.getElementById("withdraw2");
  if (w2) {
    w2.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w3 = document.getElementById("withdraw3");
  if (w3) {
    w3.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w4 = document.getElementById("withdraw4");
  if (w4) {
    w4.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w5 = document.getElementById("withdraw5");
  if (w5) {
    w5.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w6 = document.getElementById("withdraw6");
  if (w6) {
    w6.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w7 = document.getElementById("withdraw7");
  if (w7) {
    w7.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w8 = document.getElementById("withdraw8");
  if (w8) {
    w8.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w9 = document.getElementById("withdraw9");
  if (w9) {
    w9.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w10 = document.getElementById("withdraw10");
  if (w10) {
    w10.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w11 = document.getElementById("withdraw11");
  if (w11) {
    w11.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w12 = document.getElementById("withdraw12");
  if (w12) {
    w12.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w13 = document.getElementById("withdraw13");
  if (w13) {
    w13.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w14 = document.getElementById("withdraw14");
  if (w14) {
    w14.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w15 = document.getElementById("withdraw15");
  if (w15) {
    w15.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w16 = document.getElementById("withdraw16");
  if (w16) {
    w16.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w17 = document.getElementById("withdraw17");
  if (w17) {
    w17.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w18 = document.getElementById("withdraw18");
  if (w18) {
    w18.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w19 = document.getElementById("withdraw19");
  if (w19) {
    w19.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w20 = document.getElementById("withdraw20");
  if (w20) {
    w20.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w21 = document.getElementById("withdraw21");
  if (w21) {
    w21.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w22 = document.getElementById("withdraw22");
  if (w22) {
    w22.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w23 = document.getElementById("withdraw23");
  if (w23) {
    w23.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w24 = document.getElementById("withdraw24");
  if (w24) {
    w24.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w25 = document.getElementById("withdraw25");
  if (w25) {
    w25.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w26 = document.getElementById("withdraw26");
  if (w26) {
    w26.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
  var w27 = document.getElementById("withdraw27");
  if (w27) {
    w27.addEventListener("click", function() {
      location.href = "destroySession.php";
    });
  }
</script>

</html>
