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
<span id="claveC" class="hide"> I       ii      iii IV      V       vi     VII   I
/C  /   /Dm /   /Em /F  /   /G  /   /Am /   /Bº / C</span><span id="claveD" class="hide"> I       ii      iii IV      V       vi      VII I
/D  /   /Em /   /F#m/G  /   /A  /   /Bm /   /C#º/D</span><span id="claveE" class="hide"> I       ii      iii IV      V       vi     VII  I
/E  /   /F#m/   /G#m/A  /   /B  /   /C#m/   /D#º/E</span><span id="claveF" class="hide"> I       ii      iii IV      V       vi      VII  I
/F  /   /Gm /   /Am /Bb /   /C  /   /Dm /   /Eº / F</span><span id="claveG" class="hide"> I       ii      iii IV      V       vi      VII  I
/G  /   /Am /   /Bm /C  /   /D  /   /Em /   /F#º/ G</span><span id="claveA" class="hide"> I       ii      iii IV      V       vi      VII  I
/A  /   /Bm /   /C#m/D  /   /E  /   /F#m/   /G#º/ A</span><span id="claveB" class="hide"> I       ii      iii IV      V       vi     VII  I
/B  /   /C#m/   /D#m/E  /   /F# /   /G#m/   /A#º/B</span>

<?php
include 'db.php';
$sql = "select * from tabla1 WHERE id=(SELECT MAX(id) FROM `tabla1`);";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['texto'];?>


</pre>

</code>
<br />
<center>
<a href="/highlightphp">convertir otro texto</a>
</center>


</div>



</body>


<script src="https://unpkg.com/custom-syntax-highlighter@latest/bin/index.js"></script>
<script>
var highlight = window.csHighlight;
</script>

<script>
var lines = code.innerHTML.split(/\r?\n/);

var newContent = lines.map(function(line) {
    return '&nbsp; ' + line;
}).join('<br>');

code.innerHTML = newContent;
</script>

<script type="text/javascript" src="scripts/script1.js"></script>




</html>