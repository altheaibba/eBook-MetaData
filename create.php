<?php
	include("dbConnect.php");

	if(isset($_POST["submit"]))
	{
		$creator = $_POST["creator"];
		$title = $_POST["title"];
		$type = $_POST["type"];
		$identifier = $_POST["identifier"];
		$date = $_POST["date"];
		$language = $_POST["language"];
		$description = $_POST["description"];

		$result = mysqli_query($dbConn, "INSERT INTO ebook_metadata (creator,title,type,identifier,date,language,description) 
							VALUES ('$creator','$title','$type','$identifier','$date','$language','$description')");

		if($result)
		{
			echo "<script>alert('Successfully created!')</script>";
		}
		else
		{
			echo "<script>alert('ERROR! Please try again.')</script>";
		}
	}
?>

<html>
<head>
	<title>CREATE</title>
<style>
	header {
		font-family: Verdana, Geneva, sans-serif;
	    color: #145666;
	    background-color: white;
	    clear: left;
	    text-align: center;
	}

	td {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 12px;
	}

	input[type=text], select, textarea {
	    width: 100%;
	    padding: 12px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    resize: vertical;
	}

	input[type=date], select, textarea {
	    width: 100%;
	    padding: 12px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    resize: vertical;
	}

	input[type=submit] {
	    background-color: #71bdd6;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    float: left;
	}

	input[type=submit]:hover {
	    background-color: #4d91a8;
	}

	.container {
	    border-radius: 5px;
	    background-color: #e6eced;
	    padding: 20px;
	}

	.btn {
	  -webkit-border-radius: 0;
	  -moz-border-radius: 0;
	  border-radius: 0px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 12px;
	  background: #517a96;
	  padding: 5px 10px 5px 10px;
	  text-decoration: none;
	}

	.btn:hover {
	  background: #10344a;
	  text-decoration: none;
</style>
</head>
<body>
	<a href = "homepage.html" class = "btn">Back</a>
	<header><h1>Create Row Data Zone</h1></header>
	<div class = "container">
	<form action = "create.php" method = "post">
		<table align = "center">
			<tr>
				<td>Creator:</td>
				<td><input class = "form" type = "text" name = "creator"></td>
			</tr>
			<tr>
				<td>Title:</td>
				<td><input type = "text" name = "title"></td>
			</tr>
			<tr>
				<td>Type:</td>
				<td><input type = "text" name = "type"></td>
			</tr>
			<tr>
				<td>Identifier:</td>
				<td><input type = "text" name = "identifier"></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type = "date" name = "date"></td>
			</tr>
			<tr>
				<td>Language:</td>
				<td><input type = "text" name = "language"></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><input type = "text" name = "description"></td>
			</tr>
			<td><input type = "submit" name = "submit" value="CREATE"></td>
		</table>
	</form>
</div>
</body>
</html>