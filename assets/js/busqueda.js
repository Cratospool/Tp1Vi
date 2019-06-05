<script type="text/javascript">
    $(document).ready(function(){

    $(".busca").keyup(function(){ //se crea la funcioin keyup
    var texto = $(this).val();//se recupera el valor de la caja de texto y se guarda en la variable texto
    var dataString = 'palabra='+ texto;//se guarda en una variable nueva para posteriormente pasarla a busqueda.php

    if(texto==''){//si no tiene ningun valor la caja de texto no realiza ninguna accion
        //ninguna acción
    }else{
    //pero si tiene valor entonces
    $.ajax({//metodo ajax
    type: "POST",//aqui puede  ser get o post
    url: "busqueda.php",//la url adonde se va a mandar la cadena a buscar
    data: dataString,
    cache: false,
    success: function(html){//funcion que se activa al recibir un dato
    $("#display").html(html).show();// funcion jquery que muestra el div con identificador display, como formato html, tambien puede ser .text
    }
    });

    }
    return false;
    });
    });
</script>
