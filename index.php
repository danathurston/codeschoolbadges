<?php
	$data = file_get_contents('https://codeschool.com/users/danathurston.json');
	
	$json_data = json_decode($data, true);
	//var_dump($json_data['courses']['completed']);
	$courses = ($json_data['courses']['completed']);
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $json_data['user']['username']; ?>'s Code School Badges</title>
		<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
		<link rel="stylesheet" href="css/grid.css" media="screen" title="no title" charset="utf-8">
		
	</head>
	<body>
		<header>
	      <h1>Badger</h1>
	    </header>
	    <div class="container">
		    <div class="grid">
				<?php
					foreach ($courses as $course) {
						echo '<div class="grid-cell">';
						echo '<img height="200px" src="' . $course["badge"] .'"><br />';
						echo '<a href="' . $course["url"] .'" target="_blank">' . $course["title"] . '</a>';
						echo "</div>";
					};
				?>
		    </div>
	    </div>
	</body>
</html>
