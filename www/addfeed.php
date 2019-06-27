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
    <h2>Test Environment</h2>
  <p>
Designed by: <br>
Mark Cardiff<br>
</p>
   
   
</div>

  <div class="column middle">
    <h2>Add Feed Here</h2>
    <p>
	<form action="insert.php" method="post">
    <p>
        <label for="FeedName">Feed Name:</label>
        <input type="text" name="FeedName" id="FeedName">
    </p>
    <p>
        <label for="FeedUrl">Feed URL:</label>
        <input type="text" name="FeedUrl" id="FeedUrl">
    </p>
    <input type="submit" value="Submit">
</form>

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

