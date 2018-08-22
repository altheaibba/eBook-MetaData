<html>
<head>
	<title>RETRIEVE</title>
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
	<header><h1>Retrieve Table Data Zone</h1></header>
	<div class = "container">
	<table class = "ebook" width="700" align="center">		// <div class = "Table">
		<thead>
			<tr> 											// <div class = "TableRow">
				<th>ID</th>									// <div class = "TableHead">ID</div>
				<th>CREATOR</th>
				<th>TITLE</th>
				<th>TYPE</th>
				<th>IDENTIFIER</th>
				<th>DATE</th>
				<th>LANGUAGE</th>
				<th>DESCRIPTION</th>
			</tr>											// </div>
		</thead>
		<tbody>
			<?php
				include("dbConnect.php");
				$no = 1;
				$total = 0;
				while($row = mysqli_fetch_array($query))
				{
					echo '<tr>							// <div class = "TableRow">
						<td>'.$row['id'].'</td>			// <div class = "TableCell">'.$row['id'].'</div>
						<td>'.$row['creator'].'</td>
						<td>'.$row['title'].'</td>
						<td>'.$row['type'].'</td>
						<td>'.$row['identifier'].'</td>
						<td>'.date('F d, Y', strtotime($row['date'])).'</td>
						<td>'.$row['language'].'</td>
						<td>'.$row['description'].'</td>
					</tr>';								// </div>
				} 
			?>
		</tbody>
	</table>										// </div>
</div>
</body>
</html>