<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form - Result</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div id="container">
	<header>
		Thanks for submitting this form! You have submitted this form <?=$count?> times in a now.
	</header>
	<div id="main">
		<table>
			<thead>
				<tr>
					<th>Submitted Information</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Name:</td>
					<td><?=$name?></td>
				</tr>
				<tr>
					<td>Dojo Location:</td>
					<td><?=$location?></td>
				</tr>
				<tr>
					<td>Favorite Language:</td>
					<td><?=$language?></td>
				</tr>
				<tr>
					<td>Comment: </td>
					<td><?=$comment?></td>
				</tr>
			</tbody>
		</table>
		<form action="/surveys/goback" method="post">
			<input type="submit" value="Go Back">
		</form>
		<form action="/surveys/end" method="post">
			<input type="submit" value="Clear Session">
		</form>
	</div>
</div>
</body>
</html>