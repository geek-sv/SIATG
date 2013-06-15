<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Usuario_model extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this ->load->database();
	}



	function agregar_usuario($nombre,$apellido,$dir,$email,$nick,$pass,$status,$carrera,$tipo,$nivel,$tel){
		
		$sql= "SELECT prc_ins_usuario(?,?,?,?,?,?,?,?,?,?,?);";

		/*if($tipo==1){
			$nivel=1;
		}else{
			$nivel=2;
		}*/
		
		$query = $this->db->query($sql,array($nombre,$apellido,$dir,$email,$nick,$pass,$status,$nivel,$carrera,$tipo,$tel));

		if($query->num_rows()>0){
			foreach ($query->result() as $fila){
				$data[]=$fila;
			}
			return $data;
		}
		else{
			$data[]="la consulta no pudo ser ejecutada";
			return $data;
		}
			
	}

	//para llenar el dropdown de carrera
	
	function obtener_carrera(){
	$query= $this->db->query("SELECT * FROM carrera;");
		$item=array();
		foreach ($query->result_array() as $campo){
			$item[$campo['id_carrera']]=$campo['nombre_carrera'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item;
	}
	
	function obtener_nivel(){
		$query=$this->db->query("SELECT * FROM nivel;");
		$niveles=array();
		foreach($query->result_array() as $campo){
			$niveles[$campo['id_nivel']]=$campo['tipo'];
		}
		return $niveles;
	}
	



}
?>