<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterForm
 *
 * @author Administrador
 */
class RegisterForm extends CFormModel
{
	public $email;
        public $dni;
        public $nombre;
        public $apellidos;
        public $genero;
        public $fecha_nacimiento;
        public $centro_trabajo;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// Required fields
			array('$email, $dni, $nombre, $apellidos, $genero, $fecha_nacimiento, $centro_trabajo', 'required'),
                        // email needs to be authenticated
			array('$email', 'authenticate'),
		);
	}

	
	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
		//Anyparser to validate email
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function register()
	{
		if($this->$email===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
?>