<?php


class Template {

    public static $templatesDir = "../../../Views/mail-templates";

    private static function getAvailableTemplates() {

        $scanned_directory = array_diff(scandir(self::$templatesDir), array('..', '.'));

        return array_map(function ($v) {
            return substr($v, 0, -10);
        }, $scanned_directory);
    }
    private static function replaceTxt($template, $values) {

        if (!in_array($template, self::getAvailableTemplates())) {
            throw new \Exception("The template provided does not exist", 505);
        }

        $file = file_get_contents(self::$templatesDir."/{$template}.view.html");

        foreach ($values as $key => $value) {
            
            $template = str_replace('{{' . $key . '}}', $value,  $file);
        }

        return $template;
    }
    public static function use($template, $values) {

        echo self::replaceTxt($template, $values);
    }
}

Template::use('client-invoice', ['uname'=>'peter', 'pass'=>'password','age'=>21]);