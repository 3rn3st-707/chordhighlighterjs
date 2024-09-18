const radioButtons = document.getElementsByName('clave');

    for(let radioButton of radioButtons) {
        radioButton.addEventListener('click', function(e) {
            sessionStorage.setItem("claveValue", e.target.value);
            var opcion = sessionStorage.getItem("claveValue");
            alert(opcion);          
        });
    }

if (opcion ===  "A") {

  document.getElementById('claveA').classList.remove('hide');
  document.getElementById('claveANon').classList.remove('hide');

} else if (opcion ===  "B") {

  document.getElementById('claveB').classList.remove('hide');
  document.getElementById('claveBNon').classList.remove('hide');

} else if (opcion ===  "C") {

  document.getElementById('claveC').classList.remove('hide');
  document.getElementById('claveCNon').classList.remove('hide');

} else if (opcion ===  "D") {

  document.getElementById('claveD').classList.remove('hide');
  document.getElementById('claveDNon').classList.remove('hide');

} else if (opcion ===  "E") {

  document.getElementById('claveE').classList.remove('hide');
  document.getElementById('claveENon').classList.remove('hide');

} else if (opcion ===  "F") {

  document.getElementById('claveF').classList.remove('hide');
  document.getElementById('claveFNon').classList.remove('hide');

} else if (opcion ===  "G") {

  document.getElementById('claveG').classList.remove('hide');
  document.getElementById('claveGNon').classList.remove('hide');

}

//---------------------------------------

/*

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
    },

    {
      name: 'biii',
      match: /^(Eb\s)/
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
    match: /^(Gb7\s)/
  },

  {
    name: 'vdevi',
    match: /^(F#\s)/
  },

  {
    name: 'vdevi',
    match: /^(Gb\s)/
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
      name: 'bvi',
      match: /^(A#\s)/
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
    match: /^(Gb7)/
  },

  {
    name: 'vdev',
    match: /^(F#\s)/
  },

  {
    name: 'vdev',
    match: /^(Gb)/
  },

  {
    name: 'vdeii',
    match: /^(C#7\s)/
  },

  {
    name: 'vdeii',
    match: /^(Db7\s)/
  },

  {
    name: 'vdeii',
    match: /^(C#\s)/
  },

  {
    name: 'vdeii',
    match: /^(Db\s)/
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
    name: 'vdevi',
    match: /^(Ab7\s)/
  },

  {
    name: 'vdevi',
    match: /^(Ab\s)/
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
      name: 'vimin',
      match: /^(A#m\s)/
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
      name: 'bvii',
      match: /^(D#\s)/
  },

    {
      name: 'bvi',
      match: /^(C#\s)/
    },

    {
      name: 'bvi',
      match: /^(Db\s)/
    },

    {
      name: 'biii',
      match: /^(G#\s)/
    },

    {
      name: 'biii',
      match: /^(Ab\s)/
    }
]
})}

else if (opcion ===  "G") {

highlight({

patterns: [

  {
    name: 'vmin',
    match: /^(Dm\s)/
  }, 

  {
    name: 'vimin',
    match: /^(Cm\s)/
  },

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
      match: /^(Eb\s)/
    },

    {
      name: 'biii',
      match: /^(Bb\s)/
    },

    {
      name: 'biii',
      match: /^(A#\s)/
    }
]
})}










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
    }, if (opcion ===  "A") {


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
    },

    {
      name: 'biii',
      match: /^(Eb\s)/
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
    name: 'vdeii',if (opcion ===  "A") {


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
    },

    {
      name: 'biii',
      match: /^(Eb\s)/
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
    },

    {
      name: 'biii',
      match: /^(Eb\s)/
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
    match: /^(Gb7\s)/
  },

  {
    name: 'vdevi',
    match: /^(F#\s)/
  },

  {
    name: 'vdevi',
    match: /^(Gb\s)/
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
      name: 'bvi',
      match: /^(A#\s)/
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
    match: /^(Gb7)/
  },

  {
    name: 'vdev',
    match: /^(F#\s)/
  },

  {
    name: 'vdev',
    match: /^(Gb)/
  },

  {
    name: 'vdeii',
    match: /^(C#7\s)/
  },

  {
    name: 'vdeii',
    match: /^(Db7\s)/
  },

  {
    name: 'vdeii',
    match: /^(C#\s)/
  },

  {
    name: 'vdeii',
    match: /^(Db\s)/
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
    name: 'vdevi',
    match: /^(Ab7\s)/
  },

  {
    name: 'vdevi',
    match: /^(Ab\s)/
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
      name: 'vimin',
      match: /^(A#m\s)/
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
      name: 'bvii',
      match: /^(D#\s)/
  },

    {
      name: 'bvi',
      match: /^(C#\s)/
    },

    {
      name: 'bvi',
      match: /^(Db\s)/
    },

    {
      name: 'biii',
      match: /^(G#\s)/
    },

    {
      name: 'biii',
      match: /^(Ab\s)/
    }
]
})}

else if (opcion ===  "G") {

highlight({

patterns: [

  {
    name: 'vmin',
    match: /^(Dm\s)/
  }, 

  {
    name: 'vimin',
    match: /^(Cm\s)/
  },

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
      match: /^(Eb\s)/
    },

    {
      name: 'biii',
      match: /^(Bb\s)/
    },

    {
      name: 'biii',
      match: /^(A#\s)/
    }
]
})}


*/







