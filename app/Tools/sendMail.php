
<?php
    const SPECIALITY = [
        "demande-devis" => "Demande de devis",
    ];

function buildMail(string $type):string
   {
       logEvent('Build mail');
       logEvent('mail action : '.$type);
       switch($type)
       {
           case 'to-client':
               $retour = mailContact();
               break;
           case 'to-pro':
           default:
               $retour = mailPro();
               break;
       }
       return $retour;
   }

    /**
     * Short - 
     * 
     * Detailed - 
     * 
    */
    function mailContact():string
    {
        $message = '';
        $message .= '<html>';
        $message .= '<body>';
        $message .= '<table cellspacing="0" cellpadding="10" border="0">';
        $message .= '<tr>';
        $message .= '<td>Contact : '.$_POST['name'].'</td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Numéro de contact : '.$_POST['tel'].'</td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Votre message :<br>'.$_POST['message'].'</td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Votre message à bien était envoyé, nous reviendrons vers vous rapidement.</td>';
        $message .= '</tr>';
        $message .= '</table>';
        $message .= '</body>';
        $message .= '</html>';
        return $message;
    }

    /**
     * Short - 
     * 
     * Detailed - 
     * 
    */
   function mailPro():string
    {
        $message = '';
        $message .= '<html>';
        $message .= '<body>';
        $message .= '<table cellspacing="0" cellpadding="10" border="0">';
        $message .= '<tr>';
        $message .= '<td>Contact : '.$_POST['name'].'</td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Numéro de contact : '.$_POST['tel'].'</td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Demande :<br>'.$_POST['message'].'</td>';
        $message .= '</tr>';
        $message .= '</table>';
        $message .= '</body>';
        $message .= '</html>';
        return $message;
    }

    /**
     * Short - 
     * 
     * Detailed - 
     * 
     */
    function tryMail(string $mail, string $type, string $subject = ''):bool
    {
        try {
            if(sendMail($mail, $subject, buildMail($type)))
            {
                $_SESSION['sendedMail'] = 'Votre message a bien été envoyé.';
            }
            else
            {
                $_SESSION['sendedMail'] = 'Un problème est survenu à l\'envoit de votre message, veuillez réessayer';
            }
            return true;
        }
        catch(\Exception $e) {
            logError('Error during sending mail');
            logError(json_encode($e));
            $_SESSION['sendedMail'] = 'Un problème est survenu à l\'envoit de votre mail, veuillez réessayer';
            return false;
        }
    }
    
    /**
     * Short - 
     * 
     * Detailed - 
     * 
     */
    function sendMail(string $to, string $subject, string $content):bool {
        try
        {
            
            logEvent('To : '.$to);
            // logEvent('Subject : '.SPECIALITY[$subject]);
            logEvent('Subject : Formulaire de contact');
            logEvent('Init mail headers');
            
            $headers = "From: SARL MICHEL Stéphane : contact <bonjour@maconnerie-michel-stephane.fr>" . "\r\n";
            $headers .= "MIME-version: 1.0\r\n".'Date: '.date('r')."\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n".'X-Mailer: PHP/' . phpversion();
            
            logEvent('Headers : '.PHP_EOL.$headers);
            
            logEvent('Try to send mail');
            
            // if(mail($to, SPECIALITY[$subject], $content, $headers))
            if(mail($to, 'Formulaire de contact', $content, $headers))
            {
                logEvent('Mail sended');
                return true;
            }
            else
            {
                logEvent('Mail not sended');
                return false;
            }
        }
        catch(\Exception $e)
        {
            logEvent('Error during mail send procedure');
            logError(json_encode($e));
            echo json_encode($e);
            return false;
        }
    }