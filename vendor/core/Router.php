<?php

class Router {
 
    // $routes - полный список всех маршрутов
    private static $routes = [];
    // $route - имя текущего маршрута
    private static $route = [];
    
    /*
     * Добавляет маршрут в список маршрутов
     * return boolean true
     */
    public static function addRoute($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
        return true;
    }
    
    /*
     * Возвращает полный список маршрутов
     * return array
     */
    public static function getRoutes()
    {
        return self::$routes;
    }
    
    /*
     * Возвращает текущий маршрут
     * return array
     */
    public static function getRoute()
    {
        return self::$route;
    }
    
    /*
     * Проверяет, совпадает ли введенный пользователем маршрут какому
     * либо в таблице маршрутов
     * return boolean
     */
    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route)
        {
            if ($url === $pattern)
            {
                self::$route = $route;
                return true;
            } 
        }
        return false;
    }
    
}
