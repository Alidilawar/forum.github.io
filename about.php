<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>

    <?php
session_start();
 
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/forum">iDiscuss</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="/forum">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/forum/about.php">About  <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Top Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

        $sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id'] .'">'. $row['category_name']. '</a>';
        }
      
        echo '</div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/forum/contact.php" tabindex="-1" >Contact</a>
    </li>
  </ul>
  <div class="row mx-2">';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
   echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. '</p>
    <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
    </form>';
}
 else{
   echo '<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
  <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">SignUp</button>';
 }

echo '</div>
    </div>
    </nav>';  
    
   ?>

    <div class="container-portfolio">
        <h1>
            I'm a dedicated web developer
        </h1>
        <p>You know your users, and you have solutions for their needs. But, to win
            your users' loyalty, you also need to give them the best possible
            experience with your site.While these principles seem basic, there's a lot of room for improvement
            across the web. With web.dev, you can see how your website is
            performing, and learn tips to improve your user experience.
        </p>            
        
    </div>

    <div class="portfolio-items">
        <div class="hvrbox">
            <a href="">
                <img src="https://cdn.pixabay.com/photo/2020/05/27/21/46/flowers-5229022_1280.jpg" alt="">
                <div class="hvrbox-layer">
                    <div class="hvrbox-position">
                        <h3>Web Development</h3>
                        <h4>Dilawar Web Agency</h4>
                    </div>
                </div>
            </a>
        </div>

        <div class="hvrbox-zoom">
            <a href="">
                <img src="https://cdn.pixabay.com/photo/2016/01/08/11/57/butterfly-1127666_1280.jpg" alt="">
            </a>
        </div>

        <!--<div>
            <a href="">
                <img src="https://cdn.pixabay.com/photo/2020/05/27/21/46/flowers-5229022_1280.jpg" alt="">
            </a>
        </div>-->

        <div class="hvrbox-grayscale">
            <a href="">
                <img src="https://cdn.pixabay.com/photo/2020/06/05/22/21/beach-5264739_1280.jpg" alt="">
            </a>
        </div>

        <div class="hvrbox-blur">
            <a href="">
                <img src="https://cdn.pixabay.com/photo/2020/06/03/17/51/hummingbird-5255827_1280.jpg" alt="">
            </a>
        </div>

    </div>





    <?php include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>