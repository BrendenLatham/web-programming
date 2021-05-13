
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Map page">
  <meta name="author" content="Brenden Latham">
  <title>Our Map</title>
  <link rel="stylesheet" type="text/css" href="map_style.css" media="screen"/>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <iframe src="https://www.google.com/maps/d/embed?mid=1Kk8RqqbcMoZmuCJjmurzh_J19qDyIA6X" width="100%" height="520"></iframe>
  <hr>
  <table bgcolor="#f2f2f2" style="padding:50px; background-color:transparent;" align="center" width="100%">
    <th class="heading-wrapper"><h2>Have a location you want others to know about?</h2> <br> <h3>Send us a message and it could get featured on our map!</h3></th>
    <form id="loc_sub" action="" method="post">
      <tr>
        <td><input type="text" name="name" placeholder="your name"></td>
      </tr>
      <tr>
        <td><textarea name="comment" rows="2" cols="50" placeholder="your location recommendation"></textarea></td>
      </tr>
      <tr>
        <td align="center" class="g-recaptcha" data-sitekey="6LcgLYIaAAAAABrGfEAl0DBBEWLD3rQask3NEwd1" data-callback="enableBtn"></td>
      </tr>
      <tr>
        <td align="center"><input id="submit_loc" disabled="disabled" type="submit" name="submit"></input></td>
      </tr>
    </form>
    <?php store_comments(); ?>
  </table>
</body>
</html>
<!--function to store comments in database-->
<?php
function store_comments() {
  $thanks = "Location Succesfully Submitted!";
  if(isset($_POST["submit"])) {
    //Including dbconfig file.
    include 'dbconfig.php';
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    mysql_query("INSERT INTO comment_table (name,comment) VALUES ('$name','$comment')");
    echo "<span style = 'font-size: 20px;
    font-weight:530;
    background-color: slategray;
    color: snow;
    text-transform: uppercase;
    letter-spacing: 3px;
    border: 5px solid slategray;
    padding: 20px;
    margin: 500px 500px;
    border-radius: 10px;
    border-style:groove;'>".$thanks."</span>";
  }
  else {
  }
}
?>
<!--keep button disabled until racaptcha success-->
<script type="text/javascript">
function enableBtn(){
document.getElementById("submit_loc").disabled = false;
}
</script>
<!--prevents form resub on page refresh-->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
