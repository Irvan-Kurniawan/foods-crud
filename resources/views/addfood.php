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
      <h1 class='text-center'>Add New Food</h1>
      <hr />
        <form action="/addingfood" class='mb-5' method="GET">
          <label htmlFor="name" class="form-label mb-3">
            Name
          </label>
          <input
            type="text"
            name="name"
            class="form-control"
            id="name"
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
          ></textarea>

          <div class="container d-flex justify-content-around w-100 mt-3">
            <?php
              echo '<a class="bi btn btn-danger" href="/foods">Back</a>';
              // echo '<a class="bi btn btn-primary" href="/addingfood?name='.$_POST['name'].'&description='.$_POST['description'].'">Add Food</a>';
            ?>
            <button class="bi btn btn-primary" type="submit" onclick="">Add Food</button>
          </div>

        </form>
        <script type="text/javascript">
          function addingfood(e){
            e.preventDefault();
            let name = document.getElementById('name').value;
            let description = document.getElementById('description').value;
            console.log(name);
            console.log(description);
            window.location.href="/addingfood?name="+name"&description="+description; 
          }
        </script>
</body>
</html>
