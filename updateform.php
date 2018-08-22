<?php
	include("dbConnect.php");

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		$result = mysqli_query($dbConn, "SELECT * FROM ebook_metadata WHERE id=$id");

		while($res=mysqli_fetch_array($result))
		{
			$id = $res['id'];
			$creator = $res['creator'];
			$title = $res['title'];
			$type = $res['type'];
			$identifier = $res['identifier'];
			$date = $res['date'];
			$language = $res['language'];
			$description = $res['description'];
		}
	}
?>

<html>
<head>
	<title>UPDATE</title>
<style>
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
	    background-color: #f2f2f2;
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
	<a href = "update.php" class="btn">Back</a>
	<br>
	<div class = "container">
	<form action = "update.php" method = "post">
		<table align = "center">
			<tr>
				<td>Creator:</td>
				<td><input type = "text" name = "creator" value="<?php echo $creator;?>"></td>
			</tr>
			<tr>
					<td>Title:</td>
					<td><input type = "text" name = "title" value="<?php echo $title;?>"></td>
			</tr>
			<tr>
					<td>Type:</td>
					<td><input type = "text" name = "type" value="<?php echo $type;?>"></td>
			</tr>
			<tr>
					<td>Identifier:</td>
					<td><input type = "text" name = "identifier" value="<?php echo $identifier;?>"></td>
			</tr>
			<tr>
					<td>Date:</td>
					<td><input type = "date" name = "date" value="<?php echo $date;?>"></td>
			</tr>
			<tr>
					<td>Language:</td>
					<td><input type = "text" name = "language" value="<?php echo $language;?>"></td>
			</tr>
			<tr>
					<td>Description:</td>
					<td><input type = "text" name = "description" value="<?php echo $description;?>"></td>
			</tr>
			<tr>
				<td><input type = "hidden" name = "id" value=<?php if(isset($_GET['id'])) { echo $_GET['id']; } ?>></td>
				<td><input type = "submit" name = "update" value = "UPDATE"></td>
			</tr>
		</table>
	</form>
</body>
</html>