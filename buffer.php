<?php
require 'connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$grade = $_POST['grade'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$club_shirt = $_POST['club_shirt'];
$meeting_day = $_POST['meeting_day'];

$sql = "INSERT INTO student_information (first_name, last_name, grade, email, phone, club_shirt, meeting_day)
        VALUES ('$first_name', '$last_name', '$grade', '$email', $phone, '$club_shirt', '$meeting_day')";
$result = $conn->query($sql);

if ($result) {
  echo "<div
    style='height: 800px;
    width: 1500px;

    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;'>
      <h1 font-family=Arial>All signed up!</h1>
      <img src='media/check.gif' style='width: 255px; height: 225px;'>
        </div>";
        header("refresh: 5; url=index.php");
  // header("refresh: 4; url=index.php");
} else {
  echo "Something wasn't quite right.";
  header("refresh: 5; url=index.php");
}
?>
