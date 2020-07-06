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
      <h1 id="consent-form">Consent Form: Mechanisms of Perception and Action in Human Brain</h1>
      <hr>
    </div>
    <div class="centered">
      <h4>Dear Participants:</h4>
      <p>
        The Cognitive Neuroscience Lab at the University of Lethbridge invites you to participate in an investigation of auditory and visual perception.<br>
        Your participation is entirely voluntary and has no bearing on any other aspect of your coursework or employment.<br><br>

        Before you begin, we will ask you to complete a brief questionnaire to record some basic information to help us interpret the results of the study.<br>
        You will also be asked to answer a few questions to determine whether you are left or right handed.<br><br>

        The information from this study will be reported in general terms at conferences and in scientific journals without reference to your particular results.<br>
        It is emphasized that this is not a diagnostic test and we can't make any determination about your health using this technique.<br><br>

        We hope that you will participate in this study, but if for any reason you decide to withdraw,<br>
        you are free to do so at any time and with no penalty whatsoever and your data will be destroyed.<br><br>

        The data collected are confidential and your results are attached only to an arbitrary assigned ID code.<br>
        However, if you are participating for course credit, we will record your name, student ID and the course name.<br>
        This will allow us to pass the information to your instructor at the end of the term.<br>
        No data will be attached to this record, and your responses will not be stored until you click submit at end of the experiment.<br><br>

        Questions about this experiment can be addressed to Dr. Matthew Tata at the University of Lethbridge [Email: matthew.tata@uleth.ca].<br>
        Questions regarding your rights as a participant in this research may be addressed to the Office of Research Services, University of Lethbridge [Phone: (403) 329-2747].<br><br>
      </p>
      <p><b><i><u>If you have read the above information and consent to participate in this study, please click on agree to proceed with the experiment.</u></i></b></p>
      <div class="buttonFix">
        <button class="btn btn-danger btn-lg btn-block" id="agree">Agree</button>
        <button class="btn btn-danger btn-lg btn-block" id="returnHome">Return Home</button>
      </div>
  </div>
</body>
<script>
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const qs = urlParams.get('qs');
  document.getElementById("agree").addEventListener("click", function(){
    location.href="participant-information.php?qs=" + qs;
  });

  document.getElementById("returnHome").addEventListener("click", function(){
    location.href="index.php";
  });
</script>
</html>
