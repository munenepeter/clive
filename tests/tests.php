<?php



class Router {
    public $routes = [

        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {

        $router = new static;
        require $file;
        return $router;
    }

    
    public function get($uri, $controller) {

        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {

        $this->routes['POST'][$uri] = $controller;
    }
    public static function group($directive, $callback){
        // echo "it is NOT callable".PHP_EOL; 
        // if(!is_callable($callback)){
           
        // }
        // echo "it is callable".PHP_EOL; 
        // $callback();
        //var_dump($callback);
        
    }
    public function direct($uri, $requestType) {

        echo "We called the router".PHP_EOL;
        var_dump($this->routes[$requestType][$uri]);
        exit;
        //check if the passed argument is callable
        // if (!array_key_exists($uri, $this->routes[$requestType]))
        //     throw new \Exception("Oops, Seems you're lost, There is no such page! <b>/{$uri}</b>", 404);
        // exit;

        if (!is_callable($this->routes[$requestType][$uri])) {

            if (array_key_exists($uri, $this->routes[$requestType])) {
                //check if the route exists
                return $this->callAction(
                    ...explode('@', $this->routes[$requestType][$uri])
                );
            }

            throw new \Exception("Oops, Seems you're lost, There is no such page! <b>/{$uri}</b>", 404);
            exit;
        }

        $this->routes[$requestType][$uri]();
    }
    protected function callAction($controller, $action) {

        $controller = "Clive\\Controllers\\{$controller}";

        $controller = new $controller;

        $name = get_class($controller);

        if (!method_exists($controller, $action)) {

            throw new \Exception("{$name} doesn't not respond to {$action} Method!", 500);
        }

        return $controller->$action();
    }
}



Router::load('routes.php')->direct("", "GET");

Router::group('auth', function () use ($router) {

    $router->get('', 'TestsController@index');
});


//$router->get('', 'PagesController@index');





























// class Template {

//     public static $templatesDir = __DIR__."/Views/mail-templates";

//     public static function getAvailableTemplates() {

//         $scanned_directory = array_diff(scandir(self::$templatesDir), array('..', '.'));

//         function removeEnd($v) {
//             return substr($v, 0, -10);
//         }

//         return array_map("removeEnd", $scanned_directory);
//     }
//     public static function use($template, $values) {
//         //TODO
//     }
// }
// print_r(Template::getAvailableTemplates());

// echo __DIR__;


// class Paginator {
//     private static $per_page;
//     public static $pg = 1;

//     public static $start;
//     public static $end;

//     public static function paginate(array $data, int $per_page = 2) {

//         self::$per_page = $per_page;

//         $paginated_data =  array_slice($data, $per_page * intval(self::$pg) - $per_page, $per_page, 1);
//         self::$start = reset($paginated_data);
//         self::$end =  (int)(implode('',array_keys($paginated_data,end($paginated_data))))+1; 
//         return $paginated_data;
//     }

//     public static function showLinks($data) {

//         $max_pages = ceil(count($data) / self::$per_page);

//         if (self::$pg > 1)
//             echo  '<a href="/rr?page=' . (self::$pg - 1) . '"> Previous</a>' . PHP_EOL;
//         if (self::$pg < $max_pages)
//             echo  '<a href="/rr?page=' . (self::$pg + 1) . '"> Next </a>';
//     }
// }

// $users = array("1", "2", "3", "4", "5", "6", "7", "8");
// //var_dump($users);

// var_dump(Paginator::paginate($users, 5));
// Paginator::showLinks($users);
// echo PHP_EOL;
// echo Paginator::$start;
// echo PHP_EOL;
// echo Paginator::$end;