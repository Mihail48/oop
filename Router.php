<?php



class router{

	public $routes; //здесь прописываюся пути к файлам страницы на которые есть доступ
	public $route; //здесь передаются наши запросы в поисковую строку

	public function setting_routes($routes){
		$this->routes = $routes;
	}
	public function check_route(){
		$this->route = $_SERVER['REQUEST_URI'];
		if (array_key_exists($this->route,$this->routes)){
			include __DIR__. $this->routes[$this->route];exit;
		} else {echo "страница не найдена";exit;}
	}


};

  //array|| string $routes - запись соответствия значения вводимых поисковых запросов и файлов , которые эти записи будут обрабатывать.
  //string || int $route - значения вводимые в поисковую строку.
  // setting_routes($routes) - метод настройки соответствия значений вводимых поисковых запросов и файлов , которые эти записи будут обрабатывать.
  // check_route() - метод  проверки введеных данных на присутствие совпадений и если найдено, то подключение этой страницы.


























?>