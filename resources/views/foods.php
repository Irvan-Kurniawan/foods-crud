<?php
require __DIR__.'\connection.php';

if (!isset($_COOKIE['login'])){
echo '<script> alert("You have not logon yet"); </script>';
	echo '<script> window.location.replace("/", "_self"); </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="background-color: #eff0f3">
<div class="container mt-4">
    <h1 class='text-center mt-4'>Food List</h1>
    <hr/>
    	<div>
    		<table class="table table-hover p-4 rounded-2" style="background-color:#fffffe">
	          <thead>
	            <tr>
	              <th scope="col">#</th>
	              <th scope="col">Name</th>
	              <th scope="col">Description</th>
	              <th scope="col" class="text-center">Action</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php
		            $result = mysqli_query($connection,"SELECT * FROM m_foods");
				    if(mysqli_num_rows($result)>0){
				    	$i=1;
				    	while($row = $result->fetch_assoc()) {
						    echo '<td>'. $i++ .'</td>
						    <td>'. $row["name"] .'</td>
						    <td> '. $row["description"] .' </td>
						    <td class="container d-flex justify-content-around text-center">
					          <button
					            class="bi btn btn-primary"
					            onClick="deleteRow()"
					          >Update</button>
					          <a class="bi btn btn-danger" href="delete?id='.$row['id'].'">Delete</a>
					          
					        </td>';
						  }

				    }
				?>
	          </tbody>
	      </table>
        </div>
        <div class="container d-flex  justify-content-around">
<?php
	echo '<a class="bi btn btn-primary" href="addfood">Add Food</a>';
	echo '<a class="bi btn btn-danger" href="logout">Log Out</a>';
?>
</div>
</div>
</body>
</html>