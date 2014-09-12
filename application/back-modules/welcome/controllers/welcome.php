<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
         * 
	 */
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('cookie');
        
    }
	public function index()
	{
           if($this->input->post('save'))
               {
                 $template=$this->input->post('template');
                 $theme=$this->input->post('theme');
                 
                $cookies = array(
                    'name'   => 'template',
                    'value'  => $template,
                    'expire' =>  86500,
                    'secure' => false
                );
               
                $this->input->set_cookie($cookies); 
                $cookies = array(
                    'name'   => 'theme',
                    'value'  => $theme,
                    'expire' =>  86500,
                    'secure' => false
                );
               
                $this->input->set_cookie($cookies); 
                
          // echo $this->input->cookie('template', false);
           //echo $this->input->cookie('theme', false);
            
            $this->template->build('welcome_message');
           } 
            
            
           $this->template->build('welcome_message');
           
           
	}
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */