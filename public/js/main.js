//  Surftware (colaboradores): 

//  -José Armando Moreno Tolentino.
//  -Juan Miguel Días Teran.

function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
        return true;
    }
    return false;        
  }
  
  function validarArchivo(obj){
  var uploadFile = obj.files[0];
  var inputImage;
  
    if (!window.FileReader) {
        Swal.fire(
                'Archivo Incorrecto!',
                'El navegador no soporta la lectura de archivos',
                'warning'
        ); 
        inputImage.value = '';
        return;
        inputImage = document.getElementById("adjunto");
    }
    if (!(/\.(jpg|jpeg|png|pdf|docx|doc|xlsx|xls)$/i).test(uploadFile.name)) {
        var alertMensaje='El archivo a adjuntar no es una imagen o archivo <br>'+
        'Los formatos apropiados son:<br/>'+
        '-jpg\n'+
        '-jpeg\n'+
        '-png\n'+
        '-pdf\n'+
        '-docx\n'+
        '-doc\n'+
        '-xlsx\n'+
        '-xls'
        ;
        Swal.fire(
                'Archivo Incorrecto!',
                alertMensaje,
                'warning'
        );  
        inputImage = document.getElementById("adjunto");
        inputImage.value = '';
    }
    else 
    {
        var img = new Image();
        img.onload = function () {
            
            if (uploadFile.size > 1536000)
            {   
                Swal.fire(
                'Archivo Incorrecto!',
                'El peso del archivo no puede exceder los 15360kb o 15mb',
                'warning'
                );  
                inputImage = document.getElementById("adjunto");
                inputImage.value = '';
            }
            else {
                Swal.fire(
                'Archivo Correcto!',
                'El archivo es valido para enviarse',
                'success'
                );             
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }                 
  }