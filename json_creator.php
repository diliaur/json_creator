<html>
<head>
	<title>JSON object creator</title>
</head>
<body>

<form action="json_creator.php" method="GET">
	<label for="fname">First Name: </label><input name="fname" type="text"><br/>
	<label for="lname">Last Name: </label><input name="lname" type="text"><br/>
	<label for="title">Title (if applicable): </label><input name="title" type="text"><br/>
	<label for="email">Email: </label><input name="email" type="text"><br/>
	<label for="website">Website URL: </label><input name="website" type="text"><br/>
	<label for="photo-url">Photo URL: </label><input name="photo-url" type="text"><br/>
	<label for="countries">Countries*: </label><input name="countries" type="text"><br/>
	<label for="main-topics">Main Topics*: </label><input name="main-topics" type="text"><br/>
	<label for="sub-topics">Sub Topics*: </label><input name="sub-topics" type="text"><br/>
	<p>* Separate items by comma.</p>
	<button>Submit</button>
</form>

<?php 
	
	// need to clean input first

	$values = $_GET;
	$countries = $values['countries'];
	$maintopics = $values['main-topics'];
	$subtopics = $values['sub-topics'];

	// convert country, topics into arrays from comma-separated strings
	// save those arrays back into the $values array.

	$values['countries'] = explode(",",$countries);
	$values['main-topics'] = explode(",",$maintopics);
	$values['sub-topics'] = explode(",",$subtopics);

	echo $countries . $maintopics . $subtopics . "<br/>";
	//var_dump($values);

	// then encode into JSON

	$object = json_encode($values);

	echo $object;

	// then save it to some backup file or whatever will persist
	
?>

<script>
</script>

</body>
</html>