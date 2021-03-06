<?php

namespace Clive\Core\Mantle\Mail;

class Template {

    public static $templatesDir = __DIR__. "/../../../Views/mail-templates";

    private static function getAvailableTemplates() {

        $scanned_directory = array_diff(scandir(self::$templatesDir), array('..', '.'));

        return array_map(function ($v) {
            return substr($v, 0, -9);
        }, $scanned_directory);
        
    }
    private static function replaceTxt($template, $values) {
 
        if (!in_array($template, self::getAvailableTemplates())) {
            throw new \Exception("The template provided does not exist", 410);
        }

        ob_start();

        if ($values !== null) {
            extract($values);
        }

        include self::$templatesDir ."/{$template}.view.php";

        $content = ob_get_contents();

        ob_end_clean();

        return $content;  
    }
    public static function use($template, $values) {

        try {
         return self::replaceTxt($template, $values);
        } catch (\Exception $e) {
           abort($e->getMessage(), $e->getCode());
        }
    }
}
