<?php
	include_once("dbConnect.php");

	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
			
		$creator = $_POST["creator"];
		$title = $_POST["title"];
		$type = $_POST["type"];
		$identifier = $_POST["identifier"];
		$date = $_POST["date"];
		$language = $_POST["language"];
		$description = $_POST["description"];
			
		$result = mysqli_query($dbConn, "UPDATE ebook_metadata SET creator='$creator', title='$title', type='$type', identifier='$identifier', date='$date', language='$language', description='$description' WHERE id=$id");

		if($result)
		{
			echo "<script>alert('Successfully updated!')</script>";
		}
		else
		{
			echo "<script>alert('ERROR! Please try again.')</script>";
		}
	}
?>

<html>
<head>
	<title>UPDATE</title>
<style type="text/css">
	header {
		font-family: Verdana, Geneva, sans-serif;
	    color: #145666;
	    background-color: white;
	    clear: left;
	    text-align: center;
	}

	table.ebook {
  		font-family: Verdana, Geneva, sans-serif;
	}
	
	table.ebook td, table.ebook th {
  		border: 1px solid #AAAAAA;
	}

	table.ebook tbody td {
		background: #ffffff;
  		font-size: 13px;
	}

	table.ebook thead {
	  background: #39A4A2;
	  background: -moz-linear-gradient(top, #6abbb9 0%, #4cadab 66%, #39A4A2 100%);
	  background: -webkit-linear-gradient(top, #6abbb9 0%, #4cadab 66%, #39A4A2 100%);
	  background: linear-gradient(to bottom, #6abbb9 0%, #4cadab 66%, #39A4A2 100%);
	}

	table.ebook thead th {
	  font-size: 15px;
	  font-weight: bold;
	  color: #FFFFFF;
	  border-left: 2px solid #D0E4F5;
	}

	table.ebook thead th:first-child {
  	  border-left: none;
	}

	table.ebook tfoot td {
  	  font-size: 14px;
	}

	table.ebook tfoot .links {
  	  text-align: right;
	}
	
	table.ebook tfoot .links a{
	  display: inline-block;
	  background: #1C6EA4;
	  color: #FFFFFF;
	  padding: 2px 8px;
	  border-radius: 5px;
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
	}
</style>
</head>
<body>
	<a href = "homepage.html" class = "btn">Back</a>
	<header><h1>Update Row Data Zone</h1></header>
	<div class = "container">
	<table class = "ebook" width="700" align="center">
		<thead>
			<tr>
				<th>ID</th>
				<th>CREATOR</th>
				<th>TITLE</th>
				<th>TYPE</th>
				<th>IDENTIFIER</th>
				<th>DATE</th>
				<th>LANGUAGE</th>
				<th>DESCRIPTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include_once("dbConnect.php");
				$no = 1;
				$total = 0;
				while($res = mysqli_fetch_array($query))
				{
					echo '<tr>
						<td>'.$res['id'].'</td>
						<td>'.$res['creator'].'</td>
						<td>'.$res['title'].'</td>
						<td>'.$res['type'].'</td>
						<td>'.$res['identifier'].'</td>
						<td>'.date('F d, Y', strtotime($res['date'])).'</td>
						<td>'.$res['language'].'</td>
						<td>'.$res['description'].'</td>
						</tr>';
					echo "<td><a href=\"updateform.php?id=$res[id]\">Edit</a></td>";
				} 
			?>
		</tbody>
	</table>
</body>
</html>