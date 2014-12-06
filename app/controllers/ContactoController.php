<?php


class ContactoController extends BaseController{
	

	public funtion crearcontacto($id_usuario)
	{
		$usuario = User::find($id_usuario);
		$contacto= new Contacto;
		$contacto->nombre = 'Yeison';
		$contacto->telefono = 'Vargas Flórez';
		$contacto->email = '1090477344';
		$contacto->direccion = '123456';
		$contacto->usuario()->associate($usuario);
		$contacto->save();

	}

	public funtion actualizarcontacto($id_usuario, $id_contacto)
	{
		$contacto = Contacto::find($id_contacto);
		$contacto->nombre = 'contacto actualizado';
		$contacto->email = 'contacto@actualizado.com';
		$contacto->save();
	}

	public funtion eliminarcontacto($id_usuario, $id_contacto)
	{
		$usuario = User::find($id_usuario);
		$contacto = Contacto::find($id_contacto);
		$contacto->delete();
	}

	public function listarcontacto($id_usuario)	
	{
		$usuario = User::find($id_usuario);
		$contactos = $usuario->contacto;
		return $contactos;
	}


	public function detallecontacto($id_usuario, $id_contacto)	
	{
		$contacto = User::find($id_contacto);
		return 'Nombre contacto: '.$contacto->nombre. ' email:' .$contacto->email;
	}
}