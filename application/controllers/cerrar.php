<?php

class Cerrar extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        
        
    }
    
    function usuario(){
        $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el  tag title
            $data['main_content']='form_cerrar';
             $data['title']='Cerrar sesion';
             
             $data['item2']=0;
             $data['item']=0;
             
            $this->load->view('includes/template',$data);
    }
    
   
    
}
?>

