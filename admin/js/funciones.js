function registrar_imagen(){
   var parametros=new FormData($("#formulario-envia")[0])
    $.ajax({
        data: parametros,
        url:"insertar_img.php",
        type:"POST",
        contentType: false,
        precessData:false,
        beforesend:function(){

        },
        success: function(response){
            alert(response);
        }
    });
}