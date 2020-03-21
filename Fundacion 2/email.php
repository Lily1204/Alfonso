<?php
    
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && empty($_POST['email']) && empty($_POST['celular']) && empty($_POST['mensaje'])){
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $mensaje = $_POST['mensaje'];

            $header ="from: orizaba400@gmail.com" . "\r\n";
            $header.= "Reply-To: orizaba400@gmail.com" . "\r\n"; 
            $header.= "X-Mailer: PHP/". phpversion();
            $mail = mail($email, $nombre, $mensaje, $header);
            if($mail){
                echo '<h4>Mail Enviado exitosamente</h4>';
                header("Location: index.php");
            }
            header("Location: index.php");
        }
    }

?>