<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div id="container">
	<form action="/surveys/result" method="post">
		<label for="name">Your Name:</label>
		<input type="text" name="name" id="name" placeholder="Your Name"><br/>
		<label for="location">Your Name:</label>
		<select name="location" id="location">
			<option value="Mountain View">Mountain View</option>
			<option value="Seattle">Seattle</option>
		</select><br/>
		<label for="language">Favorite Language:</label>
		<select name="language" id="language">
			<option value="Javascript">Javascript</option>
			<option value="PHP">PHP</option>
			<option value="Ruby">Ruby</option>
		</select>
		<label for="comment" id="lblcomment">Comment (optional)</label>
		<textarea name="comment" id="comment" cols="60" rows="5"></textarea><br/>
		<input type="submit" value="Submit">
	</form>
</div>
</body>
</html>