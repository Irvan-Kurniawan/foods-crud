<?php
require __DIR__.'\connection.php';

// error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_COOKIE['login'])){
echo '<script> alert("You have not logon yet"); </script>';
  echo '<script> window.location.replace("/", "_self"); </script>';
}
$id=$_GET['id'];
$result = mysqli_query($connection,"SELECT * FROM m_foods WHERE id=$id");
            if(mysqli_num_rows($result)>0){
              while($row = $result->fetch_assoc()) {
                $name= $row["name"];
                $description= $row["description"];
              }
            }
              else{
                echo '<script> alert("Food does not exists"); </script>';
                  echo '<script> window.location.replace("/foods", "_self"); </script>';
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
      <h1 class='text-center'>Update Food</h1>
      <hr />
        <form action="updatingfood" class='mb-5' method="GET">
          <input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
          <label htmlFor="name" class="form-label mb-3">
            Name
          </label>
          <input
            type="text"
            name="name"
            class="form-control"
            id="name"
            value="<?=$name?>"
            required
          />

          <label htmlFor="description" class="form-label mb-3 mt-3">
            Description
          </label>
          <textarea
            name="description"
            id="description"
            class="form-control"
            required
          ><?=$description?></textarea>

          <div class="container d-flex justify-content-around w-100 mt-3">
            <?php
              echo '<a class="bi btn btn-danger" href="/foods">Back</a>';
              // echo '<a class="bi btn btn-primary" href="/addingfood?name='.$_POST['name'].'&description='.$_POST['description'].'">Add Food</a>';
            ?>
            <button class="bi btn btn-primary" type="submit" onclick="" name="update">Update Food</button>
          </div>

        </form>
        
</body>
</html>
