<?php

// Подключаем классы и библиотеки
require_once '../vendor/libs/myFunctions.php';
require_once '../vendor/core/Router.php';

// Получаем строку запроса от пользователя из суперглобального массива $_SERVER
$query = $_SERVER['QUERY_STRING'];
echo '<b>Строка запроса от пользователя</b></br>';
echo $query . '<br><br>';

// Добавляем маршруты в таблицу маршрутов
Router::addRoute('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::addRoute('posts/', ['controller' => 'Posts', 'action' => 'index']);
Router::addRoute('', ['controller' => 'Main', 'action' => 'index']);

// Проверяем запрос на совпадение с таблицей маршрутов
Router::matchRoute($query);

// Отображаем таблицу маршрутов
echo '<b>Таблица маршрутов</b><br>';
printPre(Router::getRoutes());

// Отображаем текущий маршрут
echo '<b>Текущий маршрут</b><br>';
printPre(Router::getRoute());

// Отображаем результат проверки запроса на совпадение на экран
if (Router::matchRoute($query))
{
    echo 'Найдено совпадение с таблицей маршрутов<br>';
}
else
{
    echo 'Совпадение не найдено. Ошибка 404<br>';
}