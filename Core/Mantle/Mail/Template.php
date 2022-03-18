<?php

namespace Clive\Core\Mantle\Mail;

class Template {

    public static $templatesDir = "Views/mail-templates";
    private function getAvailableTemplates() {

        $scanned_directory = array_diff(scandir(self::$templatesDir), array('..', '.'));

        function removeEnd($v) {
            return substr($v, 0, -10);;
        }

        return array_map("removeEnd", $scanned_directory));
    }
    public static function use($template, $values) {
        //TODO
    }
}
