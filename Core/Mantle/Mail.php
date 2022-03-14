<?php
namespace Clive\Core\Mantle;

class Mail{
    public static $from = "admin@clive.com";
    public static $to;
    public static $subject;

    public static function send($msg){ 

        $headers = 'From: Admin <'.self::$from.'>' . PHP_EOL .'Reply-To: Admin <'.self::$from.'>'. PHP_EOL;
        $headers .= "MIME-Version: 1.0". PHP_EOL ."Content-Type: text/html; charset=ISO-8859-1".PHP_EOL;
        if(mail(self::$to,self::$subject,$msg, $headers)) {
            echo "The email message was sent.";
        } else {
            echo "The email message was not sent.";
        }
    }
}

// Mail::$subject = "A test";
// Mail::$to = "newuser@clive.com";
// Mail::send("Welcome to Clive");

