<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/SMTP.php';

    enviarEmail();

    function enviarEmail(){

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            $mail = new PHPMailer(true);

            try{

                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host = 'smtp.office365.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'PC-alejandro-imknnovar@outlook.es';
                $mail->Password = '_ps!r$-8N3qAEiD';
                $mail->SMTPSecure = 'tls';
                $mail->SMTPOptions = array(  //En caso de usar un servidor SMTP de Microsoft poner estas lineas
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->Port = 587;

                $mail->setFrom('PC-alejandro-imknnovar@outlook.es', 'AleMonterosPC');
                $mail->addAddress('alemonteros14@gmail.com', 'Alejandro Monteros Gmail');
                
                $mail->isHTML(true);
                $mail->Subject = 'Correo de Prueba para CursoPHP';
                $mail->Body = '</br></br>Nombre de Prueba : ' . $name . '</br>Correo de Prueba : ' . $email . '</br>Contenido : ' . $comment . '</br></br> Este es el segundo mensaje para verificar el funcionamiento en aprendizajeEmail.php de CursoPHP. Los Datos de arriba son ficticios';
                $mail->send();
                echo 'El Mensaje se envio Correctamente';

            }catch(Exception $e){
                echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
            }

        }else{

            return;

        }

    }


?>