<?php

namespace Clive\Core\Mantle;

class Logger {
    public static function log($msg){
  
        $log = date("D, d M Y H:i:s") . ' - ' . $_SERVER['SERVER_NAME'] . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - ' . "$msg" . PHP_EOL;
  
        $logFile =  "Logs/logs.log";
        if(file_exists($logFile)){
            echo "The log file does not exist!! Please create it to continue";
            exit;
        }
  
        $file = fopen($logFile, 'a+', 1);
        fwrite($file, $log);
        fclose($file);
  
    }
  }