<?php
namespace Clive\Core\Mantle\Mail;

use Clive\Core\Mantle\Logger; 

class Mail{

    public string $from = "admin@clive.com";
    public string $to;
    public string $subject;
    public string $message;
    public function __construct($message){
       $this->message = $message;
    }
    
    public function send(){ 

        $headers = 'From: Admin <'.$this->from.'>' . PHP_EOL .'Reply-To: Admin <'.$this->from.'>'. PHP_EOL;
        $headers .= "MIME-Version: 1.0". PHP_EOL ."Content-Type: text/html; charset=ISO-8859-1".PHP_EOL;

        if(mail($this->to, $this->subject, $this->message,  $headers)) {
         Logger::log("INFO: Mail about ".$this->subject ." was  sent to ".$this->to);
            echo "The email message was sent.";
        } else {
          Logger::log("ERROR: Could not send the email");
            echo "The email message was not sent.";
        }
    }
}

// Mail::$subject = "A test";
// Mail::$to = "newuser@clive.com";
// Mail::send("Welcome to Clive");

