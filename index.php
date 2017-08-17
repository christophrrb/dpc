<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>DECA Programming Club!</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!--My CSS-->
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <!--Header-->
  <div class="centered-text">
    <!--Needs coding background and text highlighting to be readable.
        Add JS Typing Thing-->
    <h1 class="monospace center-text">&lt;DPC /&gt;</h1>
    <i><p class="monospace center-text">&lt;DECA Programming Club&gt;</p></i>
  </div>

  <!--Picture might go better here actually.-->

  <!--What We'll Cover-->
  <div class="center-text">
    <h2 class="monospace">What We'll Cover</h1>
    <figure class="figure">
      <img src="media/html.png" class="figure-img img-fluid img-rounded icon" alt="HTML">
      <figcaption class="figure-caption">HTML</figcaption>
    </figure>
    <figure class="figure">
      <img src="media/css.png" class="figure-img img-fluid img-rounded icon" alt="CSS">
      <figcaption class="figure-caption">CSS</figcaption>
    </figure>
    <figure class="figure">
      <img src="media/php.svg" class="figure-img img-fluid img-rounded icon" alt="PHP">
      <figcaption class="figure-caption">PHP</figcaption>
    </figure>
    <figure class="figure">
      <img src="media/mysql.png" class="figure-img img-fluid img-rounded icon" alt="MySQL">
      <figcaption class="figure-caption">MySQL</figcaption>
    </figure>
  </div>

  <!--CodeDay-->
  <div style="relative">
    <img style="margin-left: 20px; margin-top: 80px; position: absolute; z-index: 2; width: 375px; height: 175px;" src="media/codedaypicture.png" class="img-fluid pull-xs-left" alt="CodeDay">
    <video style="position: absolute; z-index: 1; width: 1536px; height: 864px;" preload="" muted="" autoplay="" loop="">
            <source src="media/codedayvideo.mp4" type="video/mp4">
    </video>
    <ul style="margin-left: 20px; margin-top: 250px; position: absolute; z-index: 2;">
      <li style="color: white" class="figure-caption">Fun</li>
      <li style="color: white" class="figure-caption">24 Hours</li>
      <li style="color: white" class="figure-caption">Meet People</li>
      <li style="color: white" class="figure-caption">Eat Well</li>
    </ul>
  </div>

<!--After Video Div-->
  <div style="margin-top: 825px;">
    <!--Requirements-->
    <div class="center-text">
      <h2 class="monospace">Requirements</h2>
      <figure class="figure">
        <img src="media/laptop.png" class="figure-img img-fluid img-rounded other-icons" alt="Laptop">
        <figcaption class="figure-caption">Laptop</figcaption>
      </figure>
      <figure class="figure">
        <img src="media/fivedollars.jpg" class="figure-img img-fluid img-rounded other-icons" alt="Five Dollars">
        <figcaption class="figure-caption">Five Dollars</figcaption>
      </figure>
      <!--Contact Info-->
      <!--Interest meeting is August 21st.-->
      <!--First club meeting is August 28th or 29th.-->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>

    <!--Sign Up-->
    <div class="center-text">
      <h2 class="monospace">Sign Up</h2>
      <center><form action="buffer.php" method="post">
        <table>
          <tr>
            <td>
              <div class="form-group left">
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName" class="form-control">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="first_name" id="lastName" class="form-control">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="email" name="email" id="email_id" class="form-control">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="phoneNumber">Phone: </label>
                <input type="number" name="phone" id="phoneNumber" class="form-control">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="grade">Grade</label>
                <select>
                  <option value="9th">9th</option>
                  <option value="10th">10th</option>
                  <option value="11th">11th</option>
                  <option value="12th">12th</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>Do you want a club shirt?</label>
                <br>
                <input type="radio" value="Yes" name="club_shirt" id="club_shirt_yes">
                <label for="club_shirt_yes">Yes</label>
                <br>
                <input type="radio" value="No" name="club_shirt" id="club_shirt_no">
                <label for="club_shirt_no">No</label>
              </div>
            </td>
            <td>
              <label>When would you like to meet?</label>
              <br>
              <input type="radio" value="Monday" name="meeting_day" id="meeting_day_monday">
              <label for="meeting_day_monday">Monday</label>
              <br>
              <input type="radio" value="Tuesday" name="meeting_day" id="meeting_data_tuesday">
              <label for="meeting_day_tuesday">Tuesday</label>
            </td>
          </tr>
        </table>
      </form></center>
    </div>
  </div>

  <div> <!--Extra jQuery and Bootstrap stuff-->
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </div>
</body>

</html>
