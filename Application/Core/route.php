<?php
class Route
{
	public static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
        $action_name = 'index';
	    /*$routes = $_SERVER['REQUEST_URI'];
		
		// получаем имя контроллера
		if ( !empty($routes) )
		{	
			$controller_name = $routes;
		}*/
		
		// добавляем префиксы
		$model_name = 'model_'.$controller_name;
		$controller_name = 'controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		// подцепляем файл с классом модели (файла модели может и не быть)
		$model_file = strtolower($model_name).'.php';
		$model_path = "Application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "Application/Models/".$model_file;
		}
		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "Application/Controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "Application/Controllers/".$controller_file;
		}
		else
		{
			
			Route::ErrorPage404();
		}
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
		    Route::ErrorPage404();
		}
	}
	
}
?>