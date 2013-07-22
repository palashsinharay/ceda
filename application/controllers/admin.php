<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
    function __construct()
    {
        
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
        $this->load->library('grocery_CRUD');
        $this->load->model('Cms');
       
       
    }
    
    function login() {
        
        
        $username = trim($this->input->post("username"));;
        $password = trim($this->input->post("password"));
        $data = $this->Cms->get_login($username);
        if($data != FALSE && $data->password == md5($password)){
            //return TRUE;
            $loginData = array(
                   'username'  => $data->username,
                   'email'     => $data->email,
                   'logged_in' => TRUE
               );

            $this->session->set_userdata($loginData);
            $this->index();
        }else{
            //return FALSE;
            $datalogin['message'] = "login failed";
            $this->load->view('login.php',$datalogin);
        }
        
        //print_r($data);
    }
    
    public function logout(){
        $loginData = array(
                   'username'  => '',
                   'email'     => '',
                   'logged_in' => FALSE
               );

        $this->session->unset_userdata($loginData);
        redirect('admin/index');
    }
    
    public function check_login() {
            return $this->session->userdata('logged_in');
            
    }


    public function index() {
        
        if($this->check_login()){
            redirect('admin/cms_page');
        } else {
            $datalogin['message'] = NULL;
            $this->load->view('login.php',$datalogin);
        }
        
    }
    
    function _example_output($output = null) {
        
                    $this->load->view('example.php',$output);
                
                  
    }
 
    public function employees() {

        //$this->grocery_crud->set_table('employees');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);
        //        echo "<pre>";
        //        print_r($output);
        //        echo "</pre>";
        //        die();
    }
    
    function short() {
        $crud = new grocery_CRUD();
        $crud->set_table('employees');
        $crud->columns('lastName','firstName','email','jobTitle');

        $output = $crud->render();

        $this->_example_output($output);
    }
    
    function full() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('employees')
            ->set_subject('employees_bal')
            ->columns('lastName','firstName','email','jobTitle','file_url')
            ->display_as('lastName','LName')
            ->display_as('firstName','FName');
        
        
        //below code is for edit and add
        $crud->fields('lastName','firstName','email','file_url');
        //$crud->required_fields('lastName','firstName');
        
        
        
        //below is validation
        $crud->set_rules('lastName','last name nnn','numeric|required')
             ->set_rules('firstName','first name nnn','integer|required')
             ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        $crud->set_field_upload('file_url','assets/uploads/files');
        
        $output = $crud->render();

        $this->_example_output($output);
    }
    
    function cms_page() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('cmspage')
            ->set_subject('CMS PAGE')

          //  ->columns('menutitle','content','type','metatitle','metadesc','metakey','status','date','pid','filename')
              ->columns('menutitle','content','metatitle','metadesc','metakey','status','date','filename')                
            
            
            ->display_as('menutitle','Title')
            ->display_as('content','Content')
          //  ->display_as('pid','Parent id')
            ->display_as('filename','Image')
            ->display_as('metatitle','Metatitle')
	    ->display_as('metadesc','Metadesc')
	    ->display_as('metakey','Metakey');
        //below code is for edit and add
        //$crud->add_fields('menutitle','content','type','metatitle','metadesc','metakey','status','pid','date','filename','cid');
        //$crud->edit_fields('menutitle','content','type','metatitle','metadesc','metakey','status','pid','date','filename','cid');

        $crud->add_fields('menutitle','content','metatitle','metadesc','metakey','status','date','filename');
        $crud->edit_fields('menutitle','content','metatitle','metadesc','metakey','status','date','filename');
        $crud->required_fields('menutitle','content','type','status','date');	
       // $crud->callback_add_field('pid',array($this,'add_field_callback_1'));
       // $crud->callback_edit_field('pid', array($this, 'add_field_callback_1'));

        //below is validation
        //$crud->set_rules('lastName','last name nnn','numeric|required')
        //     ->set_rules('firstName','first name nnn','integer|required')
        //     ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        
        // $crud->required_fields('menutitle','content','filename');
        $crud->set_field_upload('filename','assets/uploads/files');
        $crud->set_relation('cid','cmspage','pid');
	$output = $crud->render();
        $this->_example_output($output);
    }
//function add_field_callback_1()
//{
//    $data['pageDetail'] = $this->Cms->get_page_content_all();
///*	echo"<pre>";
//	print_r($data['pageDetail']);
//	echo"</pre>";*/
//	$str="<select name='my_id' id='' class='chosen-select' data-placeholder='Select ...'>";
//	foreach($data['pageDetail'] as $value)
//	{
//		$str.= "<option value='".$value->cid."'>".$value->menutitle."</option>";
//	}
//	$str.="</select>";
//	return $str;
//}

    function service() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('service')
            ->set_subject('Service PAGE')
          //  ->columns('mid','title','p_mid','cid','status')
           ->columns('s_name','s_desc','s_image','s_status')
            ->display_as('s_name','Service Name')
            ->display_as('s_desc','Service Description')
            ->display_as('s_image','Image')
	    ->display_as('s_status','Status');
        	
        
        //below code is for edit and add
       // $crud->fields('title','p_mid','cid','status');
         $crud->fields('s_name','s_desc','s_image','s_status');
       // $crud->required_fields('title','p_mid','p_mid','status','cid');
          $crud->required_fields('s_name','s_desc','s_image','s_status');
        
        //$crud->set_relation('cid','cmspage','menutitle');
         $crud->set_field_upload('s_image','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }

    function  products() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('product')
        ->set_subject('Product')
        ->columns('name','desc','cat_id','price','application','specs','cataloge','image','product_meta','status')
        ->display_as('name','Product Name')
        ->display_as('desc','Product Description')
        ->display_as('cat_id','Product Category')
        ->display_as('price','Product Price')
        ->display_as('application','Application')
        ->display_as('specs','Specs')
        ->display_as('cataloge','Cataloge')    
        ->display_as('image','Product image')
        ->display_as('product_meta','Product Meta')
        ->display_as('status','status');


    //below code is for edit and add
    $crud->fields('name','desc','cat_id','price','application','specs','cataloge','image','product_meta','status');
    //$crud->required_fields('title','email',);



    //below is validation
     $crud->required_fields('name','desc','cat_id','price','application','specs','cataloge','image','product_meta','status');
    //below code is for file upload
    $crud->set_field_upload('cataloge','assets/uploads/files');
    $crud->set_field_upload('image','assets/uploads/files');
    //$crud->set_relation('cid','cmspage','menutitle');
    $crud->set_relation('cat_id','product_category','cat_name');
    $output = $crud->render();
    $this->_example_output($output);
}

    function  product_categorie() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('product_category')
        ->set_subject('Product Categories')
        ->columns('cat_name','status')
        ->display_as('cat_name','Categories Name')
        ->display_as('status','Status');
        


    //below code is for edit and add
    $crud->fields('cat_name','status');
    //below is validation
         $crud->set_rules('categories_name','Categories Mame ','required')
               ->set_rules('status','Status','required');
    //below code is for file upload
    $output = $crud->render();
    $this->_example_output($output);
}



    function  contactus() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('contactus')
        ->set_subject('Contact Us')
        ->columns('content','image','status')
        ->display_as('content','Content')
        ->display_as('image','Image')
        ->display_as('status','status');


    //below code is for edit and add
    $crud->fields('content','image','status');
    $crud->required_fields('content','image','status');

    //below code is for file upload
    $crud->set_field_upload('image','assets/uploads/files');

    $output = $crud->render();
    $this->_example_output($output);
}

     function  news() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('news')
        ->set_subject('News')
        ->columns('title','description','date','image', 'status')
        ->display_as('title','News Title')
        ->display_as('description','Description')
        ->display_as('image','News Image')       
        ->display_as('status','Status');


    //below code is for edit and add
    $crud->fields('title','description','date','image', 'status');
    $crud->required_fields('title','description','date','image', 'status');

    //below code is for file upload
    $crud->set_field_upload('image','assets/uploads/files');

    $output = $crud->render();
    $this->_example_output($output);
}  
     function  siteconfig() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('siteconfig')
        ->set_subject('Site Config')
        ->columns('sitename','admin_phone','admin_email','admin_address')
        ->display_as('sitename','Site Name')
        ->display_as('admin_phone','Admin Phone')
        ->display_as('admin_email','Admin Email')       
        ->display_as('admin_address','Admin Address');


    //below code is for edit and add
    $crud->fields('sitename','admin_phone','admin_email','admin_address');
    $crud->required_fields('sitename','admin_phone','admin_email','admin_address');
    $output = $crud->render();
    $this->_example_output($output);
} 

}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */