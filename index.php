<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="margin: 0px 10px 0px 10px">
    <form action="recebe.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="senha">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" >
          <label class="form-check-label" for="exampleCheck1" name="sbt">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    
   </form>
</body>
</html>
<?php
if (isset($_GET['x']) && $_GET['x'] == 1){
    echo "<p style= font-size:10em >Campos não preenchidos</p>";
}
if (isset($_GET['x']) && $_GET['x'] == 2){
  echo "<p style= font-size:10em> Cadastrado</p>";
}

?>