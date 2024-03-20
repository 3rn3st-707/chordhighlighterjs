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


.vdev { color: #cc33ff}
.vdevi { color: #cc33ff}
.vdeiv { color: #cc33ff}
.vdeii { color: #cc33ff}
.bvi  { color: rgba(245, 66, 12, 0.733) }
.bvii  { color: rgba(245, 66, 12, 0.733) }
.biii  { color: rgba(245, 66, 12, 0.733) }
.vmin  { color: rgba(245, 66, 12, 0.733) }
.ivmin  { color: rgba(245, 66, 12, 0.733) }

</style>

</head>

<body>

<div class="container">

  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  
<pre>

<code id="code">

<?php
  include 'db.php';
  $sql = "select * from tabla1 WHERE id=(SELECT MAX(id) FROM `tabla1`);";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  echo  $row['texto'];

?>

</code>

</pre>

<a href="/highlightphp">convertir otro texto</a>

</div>




</body>
<script src="https://unpkg.com/custom-syntax-highlighter@latest/bin/index.js"></script>
<script>
var highlight = window.csHighlight;
</script>


<script>

let opcion = "F";

if (opcion ===  "A") {

  highlight({
  patterns: [
    {
      name: 'vmin',
      match: /^(Em\s)/
    }, 

    {
      name: 'vimin',
      match: /^(Dm\s)/
    },

    {
      name: 'vdeiv',
      match: /^(A7)/
    }, 

    {
      name: 'vdev',
      match: /^(B7)/
    },

    {
      name: 'vdev',
      match: /^(B\s)/
    },

    {
      name: 'vdeii',
      match: /^(F#7)/
    },

    {
      name: 'vdeii',
      match: /^(Gb7)/
    },

    {
      name: 'vdeii',
      match: /^(F#\s)/
    },

    {
      name: 'vdeii',
      match: /^(Gb)/
    },

    {
      name: 'vdevi',
      match: /^(C#7)/
    },

    {
      name: 'vdevi',
      match: /^(Db7)/
    },

    {
      name: 'vdevi',
      match: /^(C#\s)/
    },

    {
      name: 'vdevi',
      match: /^(Db)/
    },

    {
      name: 'bvii',
      match: /^(G\s)/
    },

    {
      name: 'bvi',
      match: /^(F\s)/
    },

    {
      name: 'biii',
      match: /^(C\s)/
    }
  ]
})}

else if (opcion ===  "B") {

highlight({

patterns: [
   {
      name: 'vmin',
      match: /^(F#m\s)/
    }, 

    {
      name: 'vmin',
      match: /^(Gbm\s)/
    }, 

    {
      name: 'vimin',
      match: /^(Em\s)/
    },

  {
    name: 'vdeiv',
    match: /^(B7)/
  }, 

  {
    name: 'vdev',
    match: /^(C#7)/
  },

  {
    name: 'vdev',
    match: /^(Db7)/
  },

  {
    name: 'vdev',
    match: /^(C#\s)/
  },

  {
    name: 'vdev',
    match: /^(Db)/
  },

  {
    name: 'vdeii',
    match: /^(G#7\s)/
  },

  {
    name: 'vdeii',
    match: /^(Ab7\s)/
  },

  {
    name: 'vdeii',
    match: /^(G#\s)/
  },

  {
    name: 'vdeii',
    match: /^(Ab\s)/
  },

  {
    name: 'vdevi',
    match: /^(D#7\s)/
  },

  {
    name: 'vdevi',
    match: /^(Eb7\s)/
  },

  {
    name: 'vdevi',
    match: /^(D#\s)/
  },

  {
    name: 'vdevi',
    match: /^(Eb\s)/
  },

  {
      name: 'bvii',
      match: /^(A\s)/
  },

    {
      name: 'bvi',
      match: /^(G\s)/
    },

    {
      name: 'biii',
      match: /^(D\s)/
    }
]
})}

else if (opcion ===  "C") {

highlight({

patterns: [
    {
      name: 'vmin',
      match: /^(Gm\s)/
    }, 

    {
      name: 'vimin',
      match: /^(Fm\s)/
    },
  {
    name: 'vdeiv',
    match: /^(C7)/
  }, 

  {
    name: 'vdev',
    match: /^(D7)/
  },

  {
    name: 'vdev',
    match: /^(D\s)/
  },

  {
    name: 'vdeii',
    match: /^(A7\s)/
  },

  {
    name: 'vdeii',
    match: /^(A\s)/
  },

  {
    name: 'vdevi',
    match: /^(E7\s)/
  },

  {
    name: 'vdevi',
    match: /^(E\s)/
  },

  {
      name: 'bvii',
      match: /^(Bb\s)/
  },

  {
      name: 'bvii',
      match: /^(A#\s)/
  },

    {
      name: 'bvi',
      match: /^(G#\s)/
    },

    {
      name: 'bvi',
      match: /^(Ab\s)/
    },

    {
      name: 'biii',
      match: /^(D#\s)/
    }
]
})}

else if (opcion ===  "D") {

highlight({

patterns: [
  {
      name: 'vmin',
      match: /^(Am\s)/
    }, 

    {
      name: 'vimin',
      match: /^(Gm\s)/
    },
  {
    name: 'vdeiv',
    match: /^(D7)/
  }, 

  {
    name: 'vdev',
    match: /^(E7)/
  },

  {
    name: 'vdev',
    match: /^(E\s)/
  },

  {
    name: 'vdeii',
    match: /^(B7\s)/
  },

  {
    name: 'vdeii',
    match: /^(B\s)/
  },

  {
    name: 'vdevi',
    match: /^(F#7\s)/
  },

  {
    name: 'vdevi',
    match: /^(F#\s)/
  },

  {
      name: 'bvii',
      match: /^(C\s)/
  },

    {
      name: 'bvi',
      match: /^(Bb\s)/
    },

    {
      name: 'biii',
      match: /^(F\s)/
    }
]
})}


else if (opcion ===  "E") {

highlight({

patterns: [
    {
      name: 'vmin',
      match: /^(Bm\s)/
    }, 

    {
      name: 'vimin',
      match: /^(Am\s)/
    },
  {
    name: 'vdeiv',
    match: /^(E7)/
  }, 

  {
    name: 'vdev',
    match: /^(F#7)/
  },

  {
    name: 'vdev',
    match: /^(F#\s)/
  },

  {
    name: 'vdeii',
    match: /^(C#7\s)/
  },

  {
    name: 'vdeii',
    match: /^(C#\s)/
  },

  {
    name: 'vdevi',
    match: /^(G#7\s)/
  },

  {
    name: 'vdevi',
    match: /^(G#\s)/
  },

  {
      name: 'bvii',
      match: /^(D\s)/
  },

    {
      name: 'bvi',
      match: /^(C\s)/
    },

    {
      name: 'biii',
      match: /^(G\s)/
    }
]
})}

else if (opcion ===  "F") {

highlight({

patterns: [
  {
      name: 'vmin',
      match: /^(Cm\s)/
    }, 

    {
      name: 'vimin',
      match: /^(Bbm\s)/
    },
  {
    name: 'vdeiv',
    match: /^(F7)/
  }, 

  {
    name: 'vdev',
    match: /^(G7)/
  },

  {
    name: 'vdev',
    match: /^(G\s)/
  },

  {
    name: 'vdeii',
    match: /^(D7\s)/
  },

  {
    name: 'vdeii',
    match: /^(D\s)/
  },

  {
    name: 'vdevi',
    match: /^(A7\s)/
  },

  {
    name: 'vdevi',
    match: /^(A\s)/
  },

  {
      name: 'bvii',
      match: /^(Eb\s)/
  },

    {
      name: 'bvi',
      match: /^(C#\s)/
    },

    {
      name: 'biii',
      match: /^(G#\s)/
    }
]
})}

else if (opcion ===  "G") {

highlight({

patterns: [
  {
    name: 'vdeiv',
    match: /^(G7)/
  }, 

  {
    name: 'vdev',
    match: /^(A7)/
  },

  {
    name: 'vdev',
    match: /^(A\s)/
  },

  {
    name: 'vdeii',
    match: /^(E7\s)/
  },

  {
    name: 'vdeii',
    match: /^(E\s)/
  },

  {
    name: 'vdevi',
    match: /^(B7\s)/
  },

  {
    name: 'vdevi',
    match: /^(B\s)/
  },

  {
      name: 'bvii',
      match: /^(F\s)/
  },

    {
      name: 'bvi',
      match: /^(F\s)/
    },

    {
      name: 'biii',
      match: /^(Bb\s)/
    }
]
})}




  function llenar() {
              var texto = document.getElementById("textarea").value;
              document.getElementById("code").innerHTML = texto;
              }
  </script>


</html>