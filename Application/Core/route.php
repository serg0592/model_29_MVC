<?php
class Route
{
	public static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
        $action_name = 'index';
	    
		$routes = $_GET['url'];;
		// получаем имя контроллера
		if ( !empty($routes) )
		{	
			$controller_name = $routes;
		}

		/*$routes = explode ('/myProjects/module_29_MVC/', $_SERVER['REQUEST_URI']);
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}

		if ( !empty($routes[2]) )
		{	
			$action_name = $routes[2];
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

	public static function ErrorPage404() {
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 not found');
		header('Location'.$host.'404');
	}
}
?>