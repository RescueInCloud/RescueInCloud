<?php


class RicardoController extends Controller
{
        //Esta funcion podría tener argumentos que serían recibidos via GET
        //Personalmente no me gustaría trabajar con GET teniendo POST
	public function actionIndex()
	{
		// Se recomienda que cada vista se llame igual que el método
                $parametro = "Prueba de paso por parámetros";
		$this->render('index',array("p"=>$parametro));
	}
        
        public function actionOtravista()
	{
		// Se recomienda que cada vista se llame igual que el método
		$this->render('otravista');
	}
}


?>
