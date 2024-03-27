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

<h1>Marcador de Funciones Armonicas para Tablaturas</h1>

<br />
  
<form class="formulario" id="formulario" action="create.php" method="POST">

<p class="pradio">
<label for="C"><input type="radio" name="clave" class="clave" value="C" id="C" required> Clave de Do (C)</label> 
<label for="D"><input type="radio" name="clave" class="clave" value="D" id="D"> Clave de Re (D)</label> 
<label for="E"><input type="radio" name="clave" class="clave" value="E" id="E"> Clave de Mi (E)</label> 
<label for="F"><input type="radio" name="clave" class="clave" value="F" id="F"> Clave de Fa (F)</label> 
</p>

<p class="pradio">
<label for="G"><input type="radio" name="clave" class="clave" value="G" id="G"> Clave de Sol (G)</label> 
<label for="A"><input type="radio" name="clave" class="clave" value="A" id="A"> Clave de La (A)</label> 
<label for="B"><input type="radio" name="clave" class="clave" value="B" id="B"> Clave de Si (B)</label> 
</p>
<br />

<center><button type="submit" onclick="radioValue()" id="botonPosta" >Convertir</button></center>
<br />
    <div id="textareaWrap">
    <textarea id="texto" name="texto" rows="30" cols="50"></textarea>
    </div>  
  
  </form>

</div>


</body>

<script type="text/javascript">

function radioValue() {

        var ele = document.getElementsByName('clave');

        for (i = 0; i < ele.length; i++) {
            if (ele[i].checked) {
               sessionStorage.setItem("valorRadioBtn", ele[i].value);
            }
        }

}

</script>


</html>






