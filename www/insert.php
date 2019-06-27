<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>DEMO</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" >
	</head>

<body>

<div class="header">
  <h1>DEMO</h1>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="rss.php">RSS Reader App</a>

</div>

<div class="row">
  <div class="column side">
    <h2>Add your feeds here</h2>
   
</div>

  <div class="column middle">
    <h2>Feeds</h2>
    <p>
	<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("35.242.182.228", "admin", "iamroot1", "RSSFeeds");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$FeedName = mysqli_real_escape_string($link, $_REQUEST['FeedName']);
$FeedUrl = mysqli_real_escape_string($link, $_REQUEST['FeedUrl']);
 
// Attempt insert query execution
$sql = "INSERT INTO Feeds (FeedName, FeedUrl) VALUES ('$FeedName', '$FeedUrl')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

    </p>
  </div>

  <div class="column side">
    <h2>Sidebar</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. 
	Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. 
	Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
</div>

</body>
</html>

