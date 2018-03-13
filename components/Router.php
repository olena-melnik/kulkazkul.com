<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 15.01.2018
 * Time: 10:45
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     */
    public function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }
    public function run()
    {
        //Получить строку запроса
        $uri = $this->getURI();
        //Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path){
            //Сравниваем $uriPattern и $uri
            if(preg_match("~$uriPattern~", $uri)){
                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                // определить какой контроллер
                // и action обрабатывает запрос
                $segments = explode('/',$internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;
                //Подключить файл класса - констроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                //Создать объект, вызвать метод (в т.ч. action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if($result != null){
                    break;
                }
            }
        }




    }
}