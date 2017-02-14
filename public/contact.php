<?php


    $to_email = "marianazamarripa.mz@gmail.com"; //Recipient email
    
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        
        $output = json_encode(array( //create JSON data
            'type'=>'error', 
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    } 
    
    //Sanitize input data using PHP ).
    $name      = $_POST["name"];
    $apellido    = $_POST["apellido"];
    $email     = $_POST["email"];
    $phone     = $_POST["phone"];
    $ubiciacion = $_POST["ubiciacion"];
    $rango_gasto = $_POST["rango_gasto"];
    $porcentaje_ahorro = $_POST["porcentaje_ahorro"];

  
    //email body
    
    $subject="Datos del cliente para cotización";
     $message_body .= "<br> <b>Nombre:</b> ".$name."<br> <b>Apellido:</b> ". $apellido . "<br> Correo:".$email. "<br> Teléfono:".$phone. "<br> Ubicación:".$ubiciacion. "<br> Gastos que tiene aprox:".$rango_gasto. "<br> Cuanto desea ahorrar:".$porcentaje_ahorro; 

    $mail->Body =$message_body;
    $mail->CharSet = 'UTF-8';
    if(!$mail->send()) {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$name .' Thank you for your email'));
        die($output);
    }
