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
    <textarea id="texto" name="texto" rows="30" cols="45"></textarea>
    </div>  
  
  </form>

</div>
<br />

<h1>Instrucciones</h1>
<div class="textoInst">
<p>
Esta aplicación marca con coloreado sintáctico similar al de los editores de codigo de programación los grados o funciones de cada acorde en una tablatura de acuerdo a la clave 
que se le asigna, para lo cual se debe pegar el texto de la misma en el cuadro superior.
</p>

<p>
Para entender el concepto de clave recomiendo el siguiente link 
<a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">La Clave: Acordes sobre los Grados de la Escala</a>. 
</p>

<p>Los acordes propios de la clave (usualmente conocidos como "diatonicos") no iran marcados con ningún
color, pero sí se marcaran los que no sean completamente naturales de la clave (usualmente conocidos como "no-diatonicos"
y que generalmente caen en las categorias de <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">Acordes Prestados del Modo Paralelo</a> y
<a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">Dominantes Secundarios</a>)
si serán marcados con un color y mas abajo se lo asociará a un link que explicará en más detalle la función de dicho acorde.
</p>

<p>
Sin embargo debe tenerse en cuenta que a menudo las canciones cambian de clave, 
a esto tecnicamente se lo conoce como <i>"modulación"</i> en dichos casos se deben convertir por separado 
las partes de cada canción que estan en diferentes claves. Acá va una lista de las modulaciones más comunes:
</p>


<p>
    <ul>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">Modulación al Grado IV atravez de VdeIV</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#modulación-ii-v-i-al-grado-iv" target="_blank">Modulación al Grado IV atravez de ii-V-I</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Modulación al Grado ii</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#modulación-de-semitono-o-tono-completo" target="_blank">Modulación de un Semitono y de un Tono Completo</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#modulación-entre-claves-mayores-a-un-intervalo-de-tercera-menor" target="_blank">Modulación entre Claves Mayores a un intervalo de Tercera Menor</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-prestado-refuncionalizado-como-iv" target="_blank">bVII Prestado Refuncionalizado como IV</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm1#claves-relativas" target="_blank">Modulación entre Claves Relativas</a></li>
    <li><a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-modo-paralelo-cómo-cambio-de-clave" target="_blank">Modulación entre Claves Paralelas</a></li>     
    </ul>
</p>

<p>
Sobre estos dos últimos casos, por ser modulaciones entre una clave mayor y una clave menor se debe tener en
cuenta que la aplicación aún no convierte claves menores.
</p>

<p>Para casos que no cuadren dentro de los casos indicados más arriba recomiendo revisar el
concepto de <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#ambigüedad-tonal" target="_blank">Ambigüedad Tonal</a>.
</p>


</p>

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






