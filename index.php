<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
header('Content-Type: text/html; charset=utf-8');
?>

<style>
.vdevi { color: #cc33ff}
.bvi  { color: red }
.bvii  { color: red }


pre {
  background-color: #232f1e;
  width: 60%;
  margin-left: auto;
  margin-right: auto;
  border: solid;
  border-width: 3px;
  border-color: aqua;
  color: antiquewhite;
  padding: 1.3em  ;
}

textarea {
  background-color: #232f1e;
  border: solid;
  border-width: 3px;
  border-color: aqua;
  color: antiquewhite;
  padding: 1.3em;
  width: 60%;
}

form {
  width: 100%;
  margin-left: 17%;
  margin-right: auto;
}


</style>

</head>

<body>

<div class="container">

  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  
  <form class="form-inline m-2" action="create.php" method="POST">
    
    <textarea id="texto" name="texto" rows="30" cols="50"></textarea>

    <button type="submit" class="btn btn-primary">Add</button>
  </form>

</div>


</body>

</html>






