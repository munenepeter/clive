<?php


class Template {

    public static $templatesDir = "../../../Views/mail-templates";

    private static function getAvailableTemplates() {

        $scanned_directory = array_diff(scandir(self::$templatesDir), array('..', '.'));

        return array_map(function ($v) {
            return substr($v, 0, -9);
        }, $scanned_directory);
        
    }
    private static function replaceTxt($template, $values) {
//var_dump(self::getAvailableTemplates());
        if (!in_array($template, self::getAvailableTemplates())) {
            throw new \Exception("The template provided does not exist", 505);
        }

        ob_start();

        if ($values !== null) {
            extract($values);
        }

        include self::$templatesDir ."/{$template}.view.php";

        $content = ob_get_contents();

        ob_end_clean();

        return $content;


        // $file = file_get_contents(self::$templatesDir . "/{$template}.view.html");

        //     foreach ($values as $key => $value) {

        //         $template = str_replace('{{' . $key . '}}', $value,  $file);


        // }


        // return $template;
    }
    public static function use($template, $values) {

        try {
            echo self::replaceTxt($template, $values);
        } catch (\Exception $e) {
            echo  $e->getMessage().PHP_EOL;
        }
    }
}

Template::use('client-invoice', ['uname' => 'peter', 'pass' => 'password', 'age' => 21]);
