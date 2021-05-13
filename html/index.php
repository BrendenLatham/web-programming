<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content= "width=device-width, user-scalable=no, initial-scale=1.0,
                        maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travel Hotspots of the USA</title>
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <script>
            function openSlideMenu(){
                document.getElementById('menu').style.width='35%';
                document.getElementById('content').style.marginLeft='-100%';
            }
            function closeSlideMenu(){
                document.getElementById('menu').style.width='0';
                document.getElementById('content').style.marginLeft='0';
            }
        </script>
        <link rel="stylesheet"  href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">


    </head>

    <body>
        <section>
        <div id="content">
            <span class="slide">
                <a  onclick="openSlideMenu()">
                    <i class="fas fa-bars"></i>
                </a>
            </span>
            <div id="menu" class="nav">
                <a  class="closes" onclick="closeSlideMenu()">
                    <i class="fas fa-times"></i>
                </a>

                <a href="#" class="active" >Home</a>
                <a href="#one">About</a>
                <a href="#two">Featured</a>
                <a href="../map/map.php" target="_blank">Map</a>
                <a href="../reviews/reviews.php" target="_blank">Reviews</a>
                <a href="#four">Contact</a>

            </div>
        </div>


        <div class="slideshow">


            <div class="slideshow-item">
                <img width="1500" src="../img/sedona10.jpg" alt="yo bro">
                
                </div>


        <div class="slideshow-item">
                <img width="1500" src="../img/neworleans10.jpeg" alt="yo bro">
                
            </div>


            <div class="slideshow-item">
                <img width="1500" src="../img/galena11.jpeg" alt="yo bro">
                
            </div>

            <div class="slideshow-item">
                <img src="../img/Coeur-dAlene3.jpeg" alt="yo bro">
                
                </div>

            <div class="slideshow-item">
                <img width="1500" src="../img/aspen 5.jpg" alt="yo bro">
                
            </div>

            <div class="slideshow-item">
                <img width="1500" src="../img/Anchorage1.jpg" alt="yo bro">
                
            </div>

            <!--Search box in Home Page-->
                <div class="wrapper">
                    <h2 class = "wrapper-heading">Top Hot Spots</h2>


                <div class="select-box">
                <div class="options-container" onchange="location=this.value">

                <div class="option">
                <input type="radio" class="radio" id="film" name="category" />
                <label for="film"><a href="../html/Anchorage.html">Anchorage, Alaska</a></label>
                </div>

                <div class="option">
                <input type="radio" class="radio" id="music" name="category" />
                <label for="music"><a href="../html/aspen.html">Aspen, Colorado</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/capecod.html">Cape Cod, Massachusetts</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/chesterton.html">Chesterton, Indiana</a></label>
                </div>

                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/couer.html">Coeur d'Alene, Idaho</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/galena.html">Galena, Illinois</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="automobiles" name="category"/>
                <label for="automobiles"><a href="../html/gulfshores.html">Gulf Shores, Alabama</a></label>
                </div>


                <div class="option">
                 <input type="radio" class="radio" id="travel" name="category" />
                <label for="travel"><a href="../html/madison.html">Madison, Connecticut</a></label>
                </div>

                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/maui.html">Maui, Hawaii</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/neworleans.html">New Orleans, Louisiana</a></label>
                </div>

                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/okobji.html">Okoboji, Iowa</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="sports" name="category" />
                <label for="sports"><a href="../html/rehoboth.html">Rehoboth Beach, Delaware</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="news" name="category" />
                <label for="news"><a href="../html/rehoboth.html">Sanibel Island, Florida</a></label>
                </div>

                <div class="option">
                <input type="radio" class="radio" id="art" name="category" />
                <label for="art"><a href="../html/santabarbara.html">Santa Barbara, California</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="science" name="category" />
                <label for="science"><a href="../html/sedona.html">Sedona, Arizona</a></label>
                </div>


                <div class="option">
                <input type="radio" class="radio" id="tutorials" name="category" />
                <label for="tutorials"><a href="../html/tybee.html">Tybee Island, Georgia</a></label>
                </div>

                </div>

                <div class="selected"> Find A Spot </div>

                <div class="search-box">
                <input type="text" placeholder="Start Typing..." />
                </div>
                </div>
                <p class="home-text">Enjoy our top picks for travel destinations in the U.S.A.
                    </p>
                </div>




    </section>
    <!--About-->
    <section class="about" id="one">
        <!-- header -->
        <div class="about-header">
            <h2 class="h2">About</h2>
        </div>
        <!-- end of header -->
        <!-- about center -->
        <div class="about-center">
            <!-- about img wrapper -->
            <div class="about-img">
                <img  src="../img/Anchorage 3.jpg" width="100%" height="500" class="about-photo" alt="picture"/>
            </div>
            <!-- about info -->
            <article class="about-info">
                <h3>Explore Some Beautiful Places With US</h3>
                <p>Enjoy a list of the top places the U.S.A has to offer. We would love to share with you some information about our favorite travel destinations, as well as some bonus info about the great national parks awaiting your visit!</p>

            </article>
        </div>
    </section>
    <!-- Featured Destinations -->
    <section class="card-wrapper" >
        <!-- header -->
        <div class="card-header">
            <h2 class="h2" id="two"> Featured Destinations</h2>
            <div class="card-underline"></div>
        </div>
        <!-- end of header -->
        <!-- card body -->
        <div class="cards" >
            <div class="cards-single">
                <div class="card-image-wrapper">
                    <img class="card-img" src="../img/neworleans14.webp" width="500" alt="lake tahoe">
                </div>
                <div class="card-info">
                    <h3>New Orleans, Louisiana</h3>
                    <p>New Orleans is widely acclaimed for its beautiful midnight nightlife, vibrant music, Creole food, and he best and unique, its yearly festivals, most eminently Mardi Gras, </p>
                    <button><a href="../html/neworleans.html">Read More</a></button>
                </div>
            </div>

            <div class="cards-single">
                <div class="card-image-wrapper">
                    <img class="card-img" src="../img/maui2.jpg" width="500" alt="lake tahoe">
                </div>
                <div class="card-info">
                    <h3>Maui, Hawaii</h3>
                    <p>Maui is a Hawaiian island full of nature, Hawaiian tradition, and aloha spirit. It is famous worldwide for its geographical beauty, beaches and breathtaking sights </p>
                    <button><a href="../html/maui.html">Read More</a></button>
                </div>
            </div>

            <div class="cards-single">
                <div class="card-image-wrapper">
                    <img class="card-img" src="../img/santa barbara 10.jpg" width="500" alt="lake tahoe">
                </div>
                <div class="card-info">
                    <h3>Santa Barbara, California</h3>
                    <p>Santa Barbara is a city on the central California coast and is know for its  attractive cultural and tourism opportunities, prime agricultural land,</p>
                    <button><a href="../html/santabarbara.html">Read More</a></button>
                </div>
            </div>

        </div>
    </section>
    <!-- Newsletter section -->
    <section class="newsletter" id="three">
        <div class="heading-wrapper">
            <h3>Newsletter</h3>
            <h2>Subscribe for Monthly Updates</h2>
        </div>
        <div class="form-wrapper">
            <form class="form" method="post" id="newsletter">
                <input type="text" name="name" class="form-name" placeholder="Name">

                <span style="width: 75px; display: inline-block;"></span>

                <input type="email" name="email" class="form-email" placeholder="Email Address">
            </form>
            <button class="subs" name="submit" type="submit" form="newsletter">Subscribe</button>
            <?php store_email(); ?>
        </div>
    </section>


    <!-- Footer  -->
    <section class="footer" id="four">
        <div class="footer-text">
            <h3>COPYRIGHT <span>&#169;</span>2021. ALL RIGHTS RESERVED.</h3>
        </div>
        <div class="footer-list">
           <ul>
               <li class><a href = "https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href = "https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
               <li><a href = "https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
               <li><a href = "https://myaccount.google.com/intro/profile" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
           </ul>
        </div>
    </section>
    <a href="#" class="top">
        <i class="fas fa-arrow-up"></i>
    </a>
     <script src="../js/np.js"></script>
    </body>
</html>

<!--php for storing emails-->
<?php
function store_email() {
  //$thanks = "email Submitted Succesfully!"; not using right now
  $message = "Thank you for subscribing to our newsletter!\r\nThis is how we will let you know of any big changes that come to the site.\r\nJust don't try to email us back from here, because we won't get it :(";
  $subject = "Subscribed!";
  if(isset($_POST["submit"])) {
    //Including dbconfig_email file.
    include 'dbconfig_email.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $headers = "From: newsletter@travelspotsbystate.com"."\r\n"."Hello ".$name;
    mysql_query("INSERT INTO email_table (name,email) VALUES ('$name','$email')");
    mail($email, $subject, $message, $headers);
  }
  else {
  }
}
?>

<!--prevents form resub on this page refresh-->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
