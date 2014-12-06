<?php



class UsuarioController extends BaseController{
	

	public function crearusuario()
	{
		
		$usuario= new User;
		$usuario->nombres = 'Yeison';
		$usuario->apellidos = 'Vargas Flórez';
		$usuario->dni = '1090477344';
		$usuario->password = '123456';
		$usuario->save();		

	}

	public function actualizarusuario($id_usuario)
	{
		$usuario = User::find($id_usuario);
		$usuario->nombres = 'usuario actualizado';
		$usuario->apellidos = 'apellido actualizado';
		$usuario->save();
	}

	public function detalleusuario($id_usuario)	
	{
		$usuario = User::find($id_usuario);
		return 'Mis nombres y apellidos son: '.$usuario->nombres. ' ' .$usuario->apellidos;
	}


}