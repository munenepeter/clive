<?php

namespace Clive\Models;

use Clive\Core\Mantle\App;

class Model {
    public static $model_name;

    public static function getInstance() {
        static::$model_name = new static;
    }
    private static function tableName() {

        //get table name form the model
        $tableName  = get_class(static::$model_name);
        //convert to lowercase and pluralize it
        $tableName  = plural(strtolower($tableName), 2);

        return $tableName;
        //users
    }

    public static function create(array $data) {

        App::get('database')->insert(self::tableName(), $data);
        //User::create(['name'=>'peter']);
    }
    public static function update(array $data) {

        App::get('database')->update(self::tableName(), $data);
        //User::update(['name'=>'peter', 'id' => 23]);
    }
    public static function all() {

        App::get('database')->selectAll(self::tableName());
        //User::all();
    }
}
