<head>
<title>Site Reviews</title>
<link rel="stylesheet" type="text/css" href="reviews_style.css" media="screen"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4))
                   ,url(../img/sedona3.jpg);
                   background-position: top;
                   background-attachment: fixed;
                   background-size: 100% 100%;
                   object-fit: cover;">
<table bgcolor="#f2f2f2" style="padding:50px; background-color:transparent;" align="center" width="100%">
  <th><h2 style="font-size: 35px;
                font-family: 'Kiwi Maru',serif;
                font-weight: 600;
                letter-spacing: 3px;
                color :white;">Leave a review of our site for others to see</h2></th>
  <form id="review_sub" action="" method="post">
    <tr>
      <td><input type="text" name="name" placeholder="your name"></td>
    </tr>
    <tr>
      <td><textarea name="review" rows="2" cols="50" placeholder="your review"></textarea></td>
    </tr>
    <tr>
      <td align="center" class="g-recaptcha" data-sitekey="6LcgLYIaAAAAABrGfEAl0DBBEWLD3rQask3NEwd1" data-callback="enableBtn"></td>
    </tr>
    <tr>
      <td align="center"><input id="submit_review" disabled="disabled" type="submit" name="submit"></input></td>
    </tr>
  </form>
  <?php store_reviews(); ?>
</table>
<!-- table that displays reviews from database-->
<table bgcolor="#f2f2f2" style="padding:50px; background-color:transparent;" align="center" width="100%" border="2">
  <?php
    include 'dbpull_reviews.php';
    while ($row = mysql_fetch_assoc($result)) {
  ?>
  <tr>
    <td id="name" style="color: whitesmoke;"><?php echo $row[name]; ?></td>
    <td id="review" style="color: whitesmoke;"><?php echo $row[review]; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
<!--function to store reviews in database-->
<?php
function store_reviews() {
  //$thanks = "Review Submitted Succesfully!"; not using right now
  if(isset($_POST["submit"])) {
    //Including dbconfig_reviews file.
    include 'dbconfig_reviews.php';
    $name = $_POST["name"];
    $review = $_POST["review"];
    mysql_query("INSERT INTO review_table (name,review) VALUES ('$name','$review')");
  }
  else {
  }
}
?>
<!--keep button disabled until racaptcha success-->
<script type="text/javascript">
function enableBtn(){
document.getElementById("submit_review").disabled = false;
}
</script>
<!--prevents form resub on page refresh-->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
