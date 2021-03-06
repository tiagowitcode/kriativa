<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Kriativa - Floricultura Caxias do Sul";
		
		$dados['meta'] = "<meta name='description' content='Floricultura em Caxias do Sul - trabalhamos com arranjos, flores do campo, rosas, flores exóticas, plantas entre outros. Entregamos em domicílio.' />";
		
		
		$this->db->order_by("id","desc");
        $this->db->limit("8");
        $dados["produtos"] = $this->db->get("produtos")->result();
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('home',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }


    
	
	
	
	
	

}
?>