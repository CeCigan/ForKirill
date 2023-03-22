<?php
use Illuminate\Support\Facades\Route;

// !!! 
// Наличие GET-параметра не изменяет маршрут 

// регистрируем маршрут http://host/
// набираем в адресной строке: http://host?user=master&role=admin
Route::get('/', function (){
	echo "<h1>Главная страница сайта</h1>";
	echo "<h1>Пользователь: {$_GET['user']}</h1>";
	echo "<h1>Роль пользователя {$_GET['user']} - {$_GET['role']}</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/about
// набираем в адресной строке: http://host/about?group=pechora-proger&services=education, web-programming, web-design
Route::get ('/about', function (){
	echo "<h1>Страница: О нас</h1>";
	echo "<h1>Мы образовательная группа: {$_GET['group']}</h1>";
	echo "<h1>Оказываем услуги: {$_GET['services']}";	
});
// -------------------------------------

// регистрируем маршрут http://host/contacts
// набираем в адресной строке: http://host/contacts/?site=pechora-proger.ru&email=pechora_proger@mail.ru&vk=pechora_proger
Route::get ('/contacts', function (){
	echo "<h1>Страница: Контакты</h1>";
	echo "<h1>Наш сайт: {$_GET['site']}</h1>";
	echo "<h1>Наша почта: {$_GET['email']}";
	echo "<h1>Наша группа VK: {$_GET['vk']}";		
});
// -------------------------------------