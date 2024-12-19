<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/employee_font1.css" rel="stylesheet">
 	<link href="css/employee_font2.css" rel="stylesheet">
 	<link href="css/employee.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/employee_view.css">
	<title>Employee Details View</title>
	<style type="text/css">
		table {
		  background: url('images/6.jpg');
		  background-size: cover;
		  background-repeat: no-repeat;
		}
		
		body{
		  background-image: url('images/bg.jpg');
		  background-size: cover;
		  background-repeat: no-repeat;
		}

		.wrapper{
		  background-image: url('images/5.jpg');
		  background-repeat: no-repeat;
		  background-size: cover;
		}
	</style>

</head>
<body>

	<input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
    <ul>
		   <li><h2 style="text-align: left;color:floralwhite;">Menu</h2></li>
		   <li><a href="employee_Home.php"><p>Home</p></a></li>
			<li><a href="employee_add.php"><p>Add New Employee</p></a></li>
			<li><a href="employee_delete.php"><p>Delete Employee</p></a></li>
			<li><a href="employee_update.php"><p>Update Employee</p></a></li>
	</ul>
	</div>

	<div class="topic">MRV E-Catering Service</div>
	<h2>Employee Details</h2>
		
	<form action="" method="POST">
		<div class="wrap">
	   <div class="search">
	      <input type="search" class="searchTerm" placeholder="What is employee ID ?" name="search" required value="<?php if(isset(($_POST['search']))){echo $_POST['search'];}?>" >
	      <button type="submit" class="searchButton">
	        <i class="fa fa-search"></i>Search
	     	</button>
	     	<button onclick="window.location.href='allemployee.php';" type="submit" id="searchButton2">
	      <i class="fa fa-search" ></i>All_View</button>
	     
	   </div>
		</div>
	</form>

<table>
		<thead>
	    <tr> 
	      <th>Employee_ID</th>
	      <th>First_Name</th>
	      <th>Last_Name</th>
	      <th>NIC</th>
	      <th>Tele_Number</th>
	      <th>Birthday</th>
	      <th>Address</th>
	      <th>Section</th>
	    </tr>
	   </thead>
	   <tbody>
	  	<?php
	  		$conn = new mysqli('localhost','root','','mrvcatering');
			if($conn->connect_error){
				die('Connection Failed	: '.$conn->connect_error);
			}

			if(isset($_POST['search'])) 
			{
				$filtervalues = $_POST['search'];
				$query = "SELECT * FROM employee WHERE CONCAT(Employee_ID) LIKE '%$filtervalues%'";
				$query_run = mysqli_query($conn,$query);

				if (mysqli_num_rows($query_run)>0) {
				
				// code...
				foreach ($query_run as $items) {
				// code...
				?>
				<tr>
					<td><?= $items['Employee_ID']; ?></td>
					<td><?= $items['F_name']; ?></td>
					<td><?= $items['L_name']; ?></td>
					<td><?= $items['NIC']; ?></td>
					<td><?= $items['Tele_number']; ?></td>
					<td><?= $items['Birth_day']; ?></td>
					<td><?= $items['address']; ?></td>
					<td><?= $items['sec_id']; ?></td>
				</tr>
				<?php	}
				}

				else{
					?>
					<tr>
						<td colspan="8">No data found</td>
					</tr>
					<?php
				}
			}?>
 		</tbody>
	 	</table>
</body>
</html>