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
        //$this->load->library('image_lib');
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
        ->columns('name','desc','cat_id','price','application','specs','cataloge','image','image2','image3','product_meta','product_meta_key','status','featured','review','stock')
        ->display_as('name','Product Name')
        ->display_as('desc','Product Description')
        ->display_as('cat_id','Product Category')
        ->display_as('price','Product Price')
        ->display_as('application','Application')
        ->display_as('specs','Specs')
        ->display_as('cataloge','Cataloge')    
        ->display_as('image','Product Front Image')
        ->display_as('image2','Product Rear image')
        ->display_as('image3','Product Side image')
        ->display_as('product_meta','Product Meta Description')
        ->display_as('product_meta_key','Product Meta Key')
        ->display_as('status','status')
        ->display_as('featured','Featured')
        ->display_as('review','Review')
        ->display_as('stock','Stock');


    //below code is for edit and add
    $crud->fields('name','desc','cat_id','price','application','specs','cataloge','image','image2','image3','product_meta','product_meta_key','status','featured','review','stock');
    //$crud->required_fields('title','email',);



    //below is validation
     $crud->required_fields('name','desc','cat_id','price','application','specs','cataloge','image','product_meta','product_meta_key','status','featured','stock');
    //below code is for file upload
    $crud->set_field_upload('cataloge','assets/uploads/files');
    $crud->set_field_upload('image','assets/uploads/files');
    $crud->set_field_upload('image2','assets/uploads/files');
    $crud->set_field_upload('image3','assets/uploads/files');
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
        ->columns('cat_name','status','cat_image')
        ->display_as('cat_name','Categories Name')
        ->display_as('status','Status')
        ->display_as('cat_image','Categories Image');
        


    //below code is for edit and add
    $crud->fields('cat_name','status','cat_image');
    //below is validation
         $crud->set_rules('cat_name','Categories Name ','required')
               ->set_rules('status','Status','required')
               ->set_rules('cat_image','Image','required');
    //below code is for file upload
    
    $crud->set_field_upload('cat_image','assets/uploads/files/category');
    $output = $crud->render();
    $cat_image = $this->Cms->get_category_image();
  // echo "Apppath : ".FCPATH."</br>";
   //$slash="\'";
    
$config['image_library'] = 'gd';
$config['source_image'] = FCPATH.'assets\uploads\files\category\\'.$cat_image;
$config['new_image'] = FCPATH.'assets\uploads\files\category\thumb\\';
$config['create_thumb'] = FALSE;
$config['maintain_ratio'] = FALSE;
$config['width'] = 160;
$config['height'] = 100;

//print_r($config);

$this->load->library('image_lib');
$this->image_lib->initialize($config);  

if ( ! $this->image_lib->resize())
{
     $this->image_lib->display_errors();
}
   
    
    
    
    $this->_example_output($output);
}

   


    function  contactus() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('contactus')
        ->set_subject('Contact Us')
        ->columns('name','email','state','province','country','message')
        ->display_as('name','Name')
        ->display_as('email','Email')
        ->display_as('state','State')
        ->display_as('province','Province')
        ->display_as('country','Country')
        ->display_as('message','Message');


    //below code is for edit and add
    $crud->fields('name','email','state','province','country','message');
   // $crud->required_fields('content','image','status');

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
        ->columns('title','description','date','image', 'status','news_meta_desc','news_meta_key')
        ->display_as('title','News Title')
        ->display_as('description','Description')
        ->display_as('image','News Image')       
        ->display_as('status','Status')
        ->display_as('news_meta_desc','Meta Desc')    
        ->display_as('news_meta_key','Meta Key');


    //below code is for edit and add
    $crud->fields('title','description','date','image', 'status','news_meta_desc','news_meta_key');
    $crud->required_fields('title','description','date','image', 'status','news_meta_desc','news_meta_key');

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
        ->columns('sitename','admin_phone','admin_email','admin_address','metadesc','metakey')
        ->display_as('sitename','Site Name')
        ->display_as('admin_phone','Admin Phone')
        ->display_as('admin_email','Admin Email')       
        ->display_as('admin_address','Admin Address')
        ->display_as('metadesc','Meta Description')
        ->display_as('metakey','Meta Key');


    //below code is for edit and add
    $crud->fields('sitename','admin_phone','admin_email','admin_address','metadesc','metakey');
    $crud->required_fields('sitename','admin_phone','admin_email','admin_address');
    $output = $crud->render();
    $this->_example_output($output);
} 

 function  blog() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('blog')
        ->set_subject('Blog')
        ->columns('title','desc','timestamp','author','metadesc','metakey')
        ->display_as('title','Blog Title')
        ->display_as('desc','Blog Content')
        ->display_as('timestamp','Post Time')       
        ->display_as('author','Author')
        ->display_as('metadesc','Meta Desc')    
        ->display_as('metakey','Meta Key');


    //below code is for edit and add
    $crud->fields('title','desc','timestamp','author','metadesc','metakey');
    $crud->required_fields('title','desc','timestamp','author','metadesc','metakey');
    $output = $crud->render();
    $this->_example_output($output);
} 

function  comments() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('comments')
        ->set_subject('Comments')
        ->columns('blog_id','comment_text','author','status','timestamp')
        ->display_as('blog_id','Blog Title')
        ->display_as('comment_text','Comment')
        ->display_as('timestamp','Post Time')       
        ->display_as('author','Author')
        ->display_as('status','Status');


    //below code is for edit and add
    $crud->fields('blog_id','comment_text','author','status');
    $crud->required_fields('blog_id','comment_text','author','status');
    $crud->set_relation('blog_id','blog','title');
    $output = $crud->render();
    $this->_example_output($output);
} 


}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */