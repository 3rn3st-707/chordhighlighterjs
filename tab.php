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
<h1>Clave de <span id="claveH1"></span></h1>

<center>
<a href="/highlightphp" style="color: #76edf5d2;" class="linkx">convertir otra tablatura</a>
</center>

<pre>
<code id="code1">
<span id="claveC" class="hide">&nbsp; I       ii      iii IV      V       vi     VII   I
C  /   /Dm /   /Em /F  /   /G  /   /Am /   /Bº / C</span><span id="claveD" class="hide">&nbsp; I       ii      iii IV      V       vi      VII I
D  /   /Em /   /F#m/G  /   /A  /   /Bm /   /C#º/D</span><span id="claveE" class="hide">&nbsp; I       ii      iii IV      V       vi     VII  I
E  /   /F#m/   /G#m/A  /   /B  /   /C#m/   /D#º/E</span><span id="claveF" class="hide">&nbsp; I       ii      iii IV      V       vi      VII  I
F  /   /Gm /   /Am /Bb /   /C  /   /Dm /   /Eº / F</span><span id="claveG" class="hide">&nbsp; I       ii      iii IV      V       vi      VII  I
G  /   /Am /   /Bm /C  /   /D  /   /Em /   /F#º/ G</span><span id="claveA" class="hide">&nbsp; I       ii      iii IV      V       vi      VII  I
A  /   /Bm /   /C#m/D  /   /E  /   /F#m/   /G#º/ A</span><span id="claveB" class="hide">&nbsp; I       ii      iii IV      V       vi     VII  I
B  /   /C#m/   /D#m/E  /   /F# /   /G#m/   /A#º/B</span>

<?php
include 'db.php';
$sql = "select * from tabla1 WHERE id=(SELECT MAX(id) FROM `tabla1`);";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['texto'];?>
</pre></code>

<pre class="xx"><span id="claveCNon" class="hide">Acordes no-diatonicos para la clave de Do (C):

<span class="rojo">Bb</span> o <span class="rojo">A#</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">G#</span> o <span class="rojo">Ab</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">E</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">Gm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Fm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">C7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">D</span> o <span class="magentaDom">D7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">E</span> o <span class="magentaDom">E7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">A</span> o <span class="magentaDom">A7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span><span id="claveDNon" class="hide">Acordes no-diatonicos para la clave de Re (D):

<span class="rojo">C</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">Bb</span> o <span class="rojo">A#</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">F</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">Am</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Gm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">D7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">E</span> o <span class="magentaDom">E7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">F#</span> o <span class="magentaDom">F#7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">B</span> o <span class="magentaDom">B7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span><span id="claveENon" class="hide">Acordes no-diatonicos para la clave de Mi (E):

<span class="rojo">D</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">C</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">G</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">Bm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Am</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">E7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">F#</span> o <span class="magentaDom">F#7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">G#</span> o <span class="magentaDom">G#7</span>: <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">C#</span> o <span class="magentaDom">C#7</span>: <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span><span id="claveFNon" class="hide">Acordes no-diatonicos para la clave de Fa (F):

<span class="rojo">Eb</span> o <span class="rojo">D#</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">C</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">G</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">Cm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Bbm</span> o <span class="rojo">A#m</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">F7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">G</span> o <span class="magentaDom">G7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">A</span> o <span class="magentaDom">A7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">D</span> o <span class="magentaDom">D7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span><span id="claveGNon" class="hide">Acordes no-diatonicos para la clave de Sol (G):

<span class="rojo">F</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">Eb</span> o <span class="rojo">D#</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">Bb</span> o <span class="rojo">A#</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">Dm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Cm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">G7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">A</span> o <span class="magentaDom">A7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">B7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">E</span> o <span class="magentaDom">E7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span><span id="claveANon" class="hide">Acordes no-diatonicos para la clave de La (A):

<span class="rojo">G</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">F</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">C</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">Em</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Dm</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">A7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">B</span> o <span class="magentaDom">B7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">C#</span> o <span class="magentaDom">C#7</span>:  <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">F#</span> o <span class="magentaDom">F#7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span><span id="claveBNon" class="hide">Acordes no-diatonicos para la clave de Si (B):

<span class="rojo">A</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#acordes-prestados-del-modo-paralelo" target="_blank">bVII prestado del modo paralelo menor</a>
<span class="rojo">G</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#el-acorde-bvi-prestado" target="_blank">bVI prestado del modo paralelo menor</a>
<span class="rojo">D</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3/#biii" target="_blank">bIII prestado del modo paralelo menor</a>
<span class="rojo">F#m</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm3#bvii-i-y-v-i-v-menor" target="_blank">v prestado del modo paralelo menor</a>
<span class="rojo">Em</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-cliché-iv-iv-iv-mayor-menor" target="_blank">iv prestado del modo paralelo menor</a>
<span class="magentaDom">B7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-de-iv" target="_blank">VdeIV o Dominante de IV</a>
<span class="magentaDom">C#</span> o <span class="magentaDom">C#7 : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-vdev-y-el-turnaround-con-dominantes-secundarios" target="_blank">VdeV o Dominante del Dominante</a>
<span class="magentaDom">D#</span> <span class="magentaDom">Eb</span> <span class="magentaDom">D#7</span> o <span class="magentaDom">Eb7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#dominante-del-relativo-menor-vdevi" target="_blank">Vdevi o Dominante del Relativo Menor</a>
<span class="magentaDom">G#</span> <span class="magentaDom">Ab</span> <span class="magentaDom">G#7</span> o <span class="magentaDom">Ab7</span> : <a href="https://candidato-de-manchuria.netlify.app/armonia/arm2#el-grado-ii-y-su-modulaciones" target="_blank">Vdeii o Dominante del grado II</a>
</span></pre>

<br />
<center>
<a href="/highlightphp" style="color: #76edf5d2;" class="linkx">convertir otra tablatura</a>
</center>

<h1>Instrucciones</h1>
<div class="textoInst">
<p>
Esta aplicación marca con coloreado sintáctico similar al de los editores de codigo de programación los grados o funciones de cada acorde en una tablatura de acuerdo a la clave 
que se le asigna.
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