<html>
<head>
<link rel="stylesheet" href="styles.css" >
</head>
	
	<div class="header">
	  <h1>DEMO</h1>
	</div>

	<div class="topnav">
	  <a href="index.php">Home</a>
	  <a href="rss.php">RSS Reader App</a>
          <a href="addfeed.php">Add Feeds Here</a>

	</div>
	
	
	<div class="row">
		<div class="column side">
			<p> Last 5 RSS Posts from your subscribed feeds. </p>
		</div>
		<div class="Column middle">
// connecting to database
	 <?php
		$servername = "35.242.182.228";
		$username = "admin";
		$password = "iamroot1";
		$dbname = "RSSFeeds";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT FeedName, FeedUrl FROM Feeds";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		// assign data of each row to variable to be used below
 		    while($row = $result->fetch_assoc()) {
			$feedurl[] = $row["FeedUrl"];
		 }   
		} else {
		    echo "0 results";
		}
		$conn->close();
		?>
// displaying feed results
    <?php
        foreach ($feedurl as $value) {

    	$rss = new DOMDocument();
    	$rss->load($value);
	    	$feed = array();
	    	foreach ($rss->getElementsByTagName('item') as $node) {
    			$item = array ( 
    				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    				'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    				);
 	   		array_push($feed, $item);
   	 	}
    		$limit = 5;
    		for($x=0;$x<$limit;$x++) {
    			$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    			$link = $feed[$x]['link'];
    			$description = $feed[$x]['desc'];
    			$date = date('l F d, Y', strtotime($feed[$x]['date']));
    			echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
    			echo '<small><em>Posted on '.$date.'</em></small></p>';
    			echo '<p>'.$description.'</p>';
    		}
}
    ?>

		</div
	<div id="aside">
	</div>
		<div class="column side"></div>
	</div>
</html>

