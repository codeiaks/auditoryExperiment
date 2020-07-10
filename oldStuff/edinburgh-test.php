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
      <h1>Edinburgh Handedness</h1>
      <p style="margin: 0 25%;">
        Please indicate your preferences in the use of hands in the following activities by <u>selecting a number in the appropriate column's box.</u>
        Where the preference is so strong that you would never try to use the other hand, <b><u>unless absolutely forced to,</b> select number 2.</u>
        If in any case you are really indifferent, <u>select number 1 in both columns.</u>
        <br>
        Some of the tasks listed below require the use of both hands. In these cases, the part of the task, or object, for which hand preferences is wanted will be indicated in parentheses.
        <br>
        Please try and answer all of the questions, and only leave a blank if you have no prior experience with the object or task.
      </p>
      <hr>
    </div>
    <div class="centered">
      <h4>Example</h4>
      <p>
        If you always prefer to use your left hand, it would look like this:
      </p>
      <table>
        <tr>
          <th>Task</th>
          <th id="chgSmallEL">Left Hand</th>
          <th id="chgSmallER">Right Hand</th>
        </tr>
        <tr>
          <td>Writing</td>
          <td>
            <div class="form-group">
              <select class="form-control" name="exampleL" id="exLeft" disabled>
                <option>0</option>
                <option>1</option>
                <option selected>2</option>
              </select>
            </div>
          </td>
          <td>
            <div class="form-group">
              <select class="form-control" name="exampleR" id="exRight" disabled>
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <hr>
    <div class="form-center">
      <form method="POST" action="wrapHandInfo.php">
        <table align="center">
          <tr>
            <th>Object or Tasks</th>
            <th id="chgSmallL">Left Hand</th>
            <th id="chgSmallR">Right Hand</th>
          </tr>
          <tr>
            <td>Writing</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="writingLeft" id="writingLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="writingRight" id="writingRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Drawing</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="drawingLeft" id="drawingLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="drawingRight" id="drawingRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Throwing</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="throwingLeft" id="throwingLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="throwingRight" id="throwingRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Scissor</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="scissorLeft" id="scissorLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="scissorRight" id="scissorRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Toothbrush</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="tbLeft" id="tbLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="tbRight" id="tbRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Knife (Without a Fork)</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="knifeLeft" id="knifeLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="knifeRight" id="knifeRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Spoon</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="spoonLeft" id="spoonLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="spoonRight" id="spoonRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Broom</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="broomLeft" id="broomLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="broomRight" id="broomRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Striking a match</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="matchLeft" id="matchLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="matchRight" id="matchRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Opening a box (lid)</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="lidLeft" id="lidLeft" required>
                  <option disabled="disabled" selected="selected">Left Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" name="lidRight" id="lidRight" required>
                  <option disabled="disabled" selected="selected">Right Hand Options</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <div class="form-group">
                <button class="btn btn-danger btn-lg btn-block" name="proceed" value="1">Proceed</button>
                <button class="btn btn-danger btn-lg btn-block" name="returnHome" value="2">Return Home</button>
              </div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>
<script>
  function goHome(){
    location.href="index.php";
  }
  if (screen.width <= 720){
    document.getElementById("chgSmallL").innerHTML = "<br>";
    document.getElementById("chgSmallR").innerHTML = "";
    document.getElementById("chgSmallEL").innerHTML = "<br>";
    document.getElementById("chgSmallER").innerHTML = "";
    document.getElementById("exLeft").style.width = "200px";
    document.getElementById("exRight").style.width = "200px";
  }
</script>
</html>
