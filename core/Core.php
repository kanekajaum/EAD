<?php   

class Core{

	public function run(){

		// 1 = controller
		// 2 = action 
		// 3 = parametros

		$url = '/';
		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}
		$params = array();
					// controller
		if (!empty($url) && $url != '/') {
			
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);
					 // Action
			if (isset($url[0]) && !empty($url[0])) {
				$currentAction  = $url[0];
				array_shift($url);

			}else{
				$currentAction  = 'index';
			}
					// parametros
			if (count($url)) {
				$params = $url;
			}



		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);




			// echo "Controller: ".$currentController."<br>";
			// echo "Action: ".$currentAction."<br>";
			// echo "Parametros: ".print_r($params, true)."<br>";
	}
}