<?php
// Ваш API-ключ
$apiKey = '1fb2abdf7ea3b8cff99fb2e740c3200f';

$cityID = $_GET["city_id"];


// Формируем URL для запроса к API OpenWeatherMap
$url = "http://api.openweathermap.org/data/2.5/weather?id={$cityID}&units=metric&lang=ru&appid={$apiKey}";

// Выполняем запрос к API
$response = file_get_contents($url);

// Выводим полученные данные
echo $response;
