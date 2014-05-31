<?php

/*
	
*/
header("Content-Type: text/html;charset=utf-8");

if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["code"])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

        $code = $_POST['code'];
        
        //Yo me llamo ralph
        if($code=="bd5e6b731c8bdf0b911bea5d5279f058"){
            
            require_once 'db_functions.php';
	
            $db = new DB_Functions();


            try{
                $result[] = $db->fetch_all($email, $password);
            }
            catch (Exception $e) {
                $result[] = array("code"=>"-1", "message"=>"Unknown problem.");
            }

            $db->close();
            $encode =  json_encode($result,JSON_UNESCAPED_UNICODE);
            echo $encode;
            
        }
        else{
            
            $result[] = array("code"=>"-1", "message"=>"Not valid request");
            $encode =  json_encode($result,JSON_UNESCAPED_UNICODE);
            echo $encode;
        }
	
		
}
else{

	$result[] = array("code"=>"102", "message"=>"101 usuario o contraseña inválida");
	echo json_encode($result);
}

?>



