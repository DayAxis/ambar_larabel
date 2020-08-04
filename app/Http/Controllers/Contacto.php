<?php

namespace App\Http\Controllers;
/*
use Illuminate\Http\Request;
use App\Mail\MailContact;
use Mail;
*/

class Contacto extends Controller
{
    public function inicio(Request $request)
    {
        
        $contacto = $request->all();
        $acceso = "";   
        $mensaje ="";
        $tipoAlerta="";
        if (!empty($_POST)) {
            $nombre             = $contacto["nombre"];
            $telefono           = $contacto["telefono"];
            $direccion          = $contacto["direccion"];
            $texto              = $contacto["mensaje"];
            $correo             = $contacto["correo"];
            $archivo;
            //$archivo            = $contacto['adjunto'];    
                
            $recaptchaPrueba    = '22222222';// se comenta solo en caso de pruebas
                //if (!empty($_POST['captcha'])) {
                if (!empty($recaptchaPrueba)) { // se comenta solo en caso de pruebas
                // importan aqui se hacen pruebas "no se quitara" 
                    if ($nombre == "" || $telefono== "" || $correo == "" || $texto == "" || strlen($telefono) != 10 || $this->is_valid_email($correo) != true ) 
                    {
                        $acceso= "Error!";
                        $mensaje = "<b>Faltan o llene correctamente los datos indicados</b></br>";
                        $mensaje .= "<b>Estas son las causas que impiden el correcto llenado del formulario:</b></br>";
                        if ($nombre == "") 
                        {
                            $mensaje .="-Falta llenar <b>Nombre</b>.</br>";
                        }
                        if ($telefono == "" || strlen($telefono) != 10) 
                        {
                            if ($telefono == "") 
                            {
                                $mensaje .="-Falta llenar <b>Tel&eacute;fono</b>.</br>";
                            }
                            if (strlen($telefono) != 10) 
                            {
                                $mensaje .="-Ponga 10 d&iacute;gitos como m&iacute;nimo en <b>Tel&eacute;fono</b>.</br>";
                            }
                        }
                        if ($correo == "" || $this->is_valid_email($correo) != true) 
                        {
                            if ($correo == "") 
                            {
                                $mensaje .="-Falta llenar <b>Correo</b>.</br>";
                            }
                            if ($this->is_valid_email($correo) != true) 
                            {
                                $mensaje .="-Ingreso un <b>Correo</b> v&aacute;lido!.</br>";
                            }
                        }
                        if ($texto == "") 
                        {
                            $mensaje .="-Falta llenar <b>Mensaje</b>.</br>";
                            $tipoAlerta="warning";            
                        }
                    }
                    else
                    {
                        $this->enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto);    
                        $acceso= "&Eacute;xito!";
                        $mensaje = "Mensaje enviado exitosamente";
                        $tipoAlerta="success";
                    }      
                }
                else
                {
                    $acceso= "Error!";
                    $mensaje = "Llene el recaptcha";
                    $tipoAlerta="warning";
                }
        }
        else
        {
            $acceso= "Error!";
            $mensaje = "Llene los datos";
            $tipoAlerta="warning";
        }
        //print_r($contacto['nombre']);
        //dd($contacto);
        return $return_arr = array("acceso" => $acceso,
                    "mensaje" => $mensaje,
                    "tipoAlerta" => $tipoAlerta);
        //echo json_encode($return_arr);
       
    }
    public function enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto){
        require("Libreries/class.phpmailer.php");
        $mail = new PHPMailer();
    
        $mail->From     = $correo;
        $mail->FromName = $nombre; 
        $mail->AddAddress("mtjamx95@gmail.com"); // Dirección a la que llegaran los mensajes.
                            
        $mail->WordWrap = 50; 
        $mail->IsHTML(true);     
        $mail->Subject  =  "Contacto Sexydiversión";
        $mail->Body     =  
            "Nombre: $nombre \n<br />".   
            "Email: $correo \n<br />".  
            "Tel&eacute;fono: $telefono \n<br />".   
            "Direcci&oacute;n: $direccion \n<br />". 
            "Mensaje: $texto";
        if ($archivo['name'] == null || $archivo['name'] == "") {
            // pasa sin archivo
        }else{
            $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
        }
        $mail->IsSMTP(); 
        $mail->Host = "ssl://mx98.hostgator.mx:465";  // Servidor de Salida.
        $mail->SMTPAuth = true; 
        $mail->Username = "mtjamx95@gmail.com";  // Correo Electrónico
        $mail->Password = "ITGAM_capcom12"; // Contraseña
        $mail->Send();                
    }
    public function is_valid_email($str)
    {
      return (false !== strpos($str, "@") && false !== strpos($str, "."));
    }
}