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
    $message_body=$message;
      if ($finish!= "" && $spend!= "" ){
      $subject="Datos del cliente para cotización";
     $message_body .= "<br> <b>Nombre:</b> ".$name."<br> <b>Apellido:</b> ". $apellido ; }
    if ($opening != ""){
    $subject = "Job Offer";
    $message_body .=  "<br><b>Opening:</b>" . $opening; }
    
     $message_body .="<br><br> -".$name."<br> <b>Email </b> : ".$email;
    
 
   require 'PHPMailerAutoload.php';
   $mail = new PHPMailer;
   $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($to_email, "Axented");
    $mail->Subject = "Rejoice! New lead from axented.com - ".$subject;
    
    //attach file if exist
 if (array_key_exists('userfile', $_FILES)) {  
 	$uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name']));
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $mail->addAttachment($uploadfile, 'cvc.pdf');
    }
    
    }
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
