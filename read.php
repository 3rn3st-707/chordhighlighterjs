<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Armonicas</title>

   
<?php
header('Content-Type: text/html; charset=utf-8');
?>

<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>

<div class="container">
<br />

<h1>Marcador de Funciones Armonicas para Tablaturas</h1>

<br />
  
<pre>
<code id="code">
<?php
include 'db.php';
$sql = "select * from tabla1 WHERE id=(SELECT MAX(id) FROM `tabla1`);";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['texto'];?>


</pre>

</code>

<a href="/highlightphp">convertir otro texto</a>

</div>




</body>


<script src="https://unpkg.com/custom-syntax-highlighter@latest/bin/index.js"></script>
<script>
var highlight = window.csHighlight;
</script>

<script type="text/javascript" src="scripts/script1.js"></script>




</html>