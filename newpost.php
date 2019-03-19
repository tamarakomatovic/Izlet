<?php
session_start();
include("config/config.php");
//if(empty($_SESSION['user'])) {
//  header('Location: index.php');
// }
  $conn = new mysqli(SERVER, USER, PASS, DB);

  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }

//$currentUser = $_SESSION['user'];
//$userID = $_SESSION['uid'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="popupPost">
      <h1>New post</h1>
      <form class="newpost" action="newpost.php" method="post">
        <input type="text" name="title" placeholder="Naziv">
        <input type="text" name="location" placeholder="Lokacija">
        <select class="transport" name="transport">
          <option value="walk">Walk</option>
          <option value="car">Car</option>
          <option value="motorbike">Motorbike</option>
          <option value="bicycle">Bicycle</option>
          <option value="bus">Bus</option>
        </select>
        <textarea name="description" rows="5" cols="10" placeholder="Opis"></textarea>
        <input type="submit" name="postSubmit" value="Post">
      </form>
    </div>

  </body>
</html>
