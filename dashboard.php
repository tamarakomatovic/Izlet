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

//  $currentUser = $_SESSION['user'];
//  $userID = $_SESSION['uid'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="container">

      <div class="posts">
	       <div class="id">
		         <h1>00</h1>
	       </div>
	       <div class="photo">
		         <img src="images/slika1.jpg" alt="slika1">
	       </div>
	       <div class="text">
		         <div class="postheader">
			            <div class="headertxt">
				             <h2>Šuma</h2>
				             <h4>Fruška gora, Srbija</h4>
                     <i class="far fa-map"></i>
			            </div>
			            <div class="headerphoto">
				             <i class="fas fa-car fa-3x"></i>
		              </div>
		        </div>
		     <div class="textbody">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
            in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Facilis unde nam perferendis iusto earum accusantium
            dolorem voluptas dolores neque error. Magni a maxime vitae quas adipisci alias
            omnis deserunt consectetur molestiae, ducimus velit animi consequatur!
		     </div>

		     <div class="buttons">
			        <div class="btnleft">
				         <div id="userBtn"><img src="images/placeholder.png" alt="profile-img" class="BtnImg"><a href="">username</a></div>
				         <button id="commentBtn">Comment</button>
			        </div>
			        <div class="btnright">
				         <button class="vote" onmouseover="favorite()"><i class="far fa-star fa-2x"></i></button>
			        </div>
		     </div>
		  </div>
    </div>

    <div class="posts">
       <div class="id">
           <h1>00</h1>
       </div>
       <div class="photo">
           <img src="images/slika1.jpg" alt="slika1">
       </div>
       <div class="text">
           <div class="postheader">
                <div class="headertxt">
                   <h2>Šuma</h2>
                   <h4>Fruška gora, Srbija</h4>
                   <i class="far fa-map"></i>
                </div>
                <div class="headerphoto">
                   <i class="fas fa-car fa-3x"></i>
                </div>
          </div>
       <div class="textbody">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
          in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Facilis unde nam perferendis iusto earum accusantium
          dolorem voluptas dolores neque error. Magni a maxime vitae quas adipisci alias
          omnis deserunt consectetur molestiae, ducimus velit animi consequatur!
          <div class="scroll-down"></div>
       </div>

       <div class="buttons">
            <div class="btnleft">
               <div id="userBtn"><img src="images/placeholder.png" alt="profile-img" class="BtnImg"><a href="">username</a></div>
               <button id="commentBtn">Comment</button>
            </div>
            <div class="btnright">
               <button class="vote" onmouseover="favorite()"><i class="far fa-star fa-2x"></i></button>
            </div>
       </div>
    </div>
  </div>

    </div>
    <div class="sidebar">
     <div class="main-buttons">
       <div id="profileBtn"><img src="images/placeholder.png" alt="profile-img" class="BtnImg"><a href="">aleksa ivkovic</a></div>
       <div id="dashboardBtn"><a href="#">Dashboard</a></div>
       <div id="newPostBtn"><a href="#">Make a post</a></div>
     </div>
      <div class="logoutWrap"><a href="logout.php" id="logoutBtn">Logout</a></div>
    </div>

    <script>
     function favorite() {
       this.innerHTML = "<i class='fas fa-star fa-2x'></i>";
     }
    </script>
  </body>
</html>
