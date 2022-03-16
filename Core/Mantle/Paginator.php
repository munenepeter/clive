<?php
namespace Clive\Core\Mantle;

use Clive\Core\Mantle\Request;

class Paginator{
    private static $per_page;
    public static function paginate(array $data, int $per_page = 10){
        self::$per_page = $per_page;
        return array_slice($data, $per_page * intval($_GET['page']) - 1, $per_page);
    }

    public static function showLinks($data){

        $max_pages = ceil(count($data) / self::$per_page);

        if($_GET['page'] > 1)
        echo  '<a href="/'.Request::uri().'?page='.($_GET['page']-1).'"> Previous </a>';
        if($_GET['page'] < $max_pages)
        echo  '<a href="/'.Request::uri().'?page='.($_GET['page']+1).'"> Next </a>';  
    }

}
// Paginator::paginate($users, 10);
// Paginator::showLinks($users);


/* 
class Paginator{
    private static $per_page;
    public static $pg = 1;
    public static function paginate(array $data, int $per_page = 2){
        self::$per_page = $per_page;
        return array_slice($data, $per_page * intval(self::$pg) - 1, $per_page);
    }

    public static function showLinks($data){

        $max_pages = ceil(count($data) / self::$per_page);
        
        if(self::$pg > 1)
        echo  '<a href="/rr?page='.(self::$pg-1).'"> Previous </a>';
        if(self::$pg < $max_pages)
        echo  '<a href="/rr?page='.(self::$pg+1).'"> Next </a>';  
    }

}

$users = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43", "Joy"=>"93");
//var_dump($users);
var_dump(Paginator::paginate($users,3));
Paginator::showLinks($users);

*/     