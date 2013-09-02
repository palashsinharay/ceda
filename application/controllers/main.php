<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
        $config['upload_path'] = './assets/uploads/cv';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt';
        $this->load->library('upload', $config);
        $this->load->library('grocery_CRUD');
        $this->load->config('paypal_config');
		//$this->load->library('email');
		//$config['protocol'] = 'sendmail';
		//$config['charset'] = 'utf-8';
		//$config['wordwrap'] = TRUE;
		//$config['mailtype'] = 'html';
		//$this->email->initialize($this->config);

	$this->load->model('Cms');
 
    }
    public function _renderView($page,$data) {
                
                 $data['allCategoryData'] = $this->Cms->get_product_cat();
                 $data['allServicesData'] = $this->Cms->get_service_list();
                 $data['cmsData'] = $this->Cms->get_page_content_all();
                 $data['siteConfig'] = $this->Cms->site_config_all();
                 $data['rightPanelData'] = $this->Cms->get_right_panel_content();
                 $data['allSliderData'] = $this->Cms->get_slider();
                 
                 //$data['top_menu']=$this->Cms->get_topmenu(); 
                //$data['product_cat']=$this->Cms->get_product_cat();
//                echo "<pre>";
//                print_r($data['allSliderData']);
//		echo "</pre>";
//		die();
                
                $this->load->view('header.php',$data);
                $this->load->view($page.'.php',$data);
                $this->load->view('footer.php',$data);
    }

    public function _renderViewOther($page,$data) {
                
                 $data['allCategoryData'] = $this->Cms->get_product_cat();
                 $data['allServicesData'] = $this->Cms->get_service_list();
                 $data['cmsData'] = $this->Cms->get_page_content_all();
                 $data['siteConfig'] = $this->Cms->site_config_all();
                 $data['rightPanelData'] = $this->Cms->get_right_panel_content();
                 $data['allSliderData'] = $this->Cms->get_slider();
                 
                 //$data['top_menu']=$this->Cms->get_topmenu(); 
                //$data['product_cat']=$this->Cms->get_product_cat();
//                echo "<pre>";
//                print_r($data['allSliderData']);
//		echo "</pre>";
//		die();
                
                $this->load->view('header_other.php',$data);
                $this->load->view($page.'.php',$data);
                $this->load->view('footer.php',$data);
    }

    public function index()
    {
//echo 'hii';               

                $data['feturedProduct'] = $this->Cms->get_fetured_product();
                $data['newsList'] = $this->Cms->get_news_list();
//                echo "<pre>";
//                print_r($data['newsList']);
//		echo "</pre>";
//		die();
	           
                $this->_renderView('index',$data);
        
        

    }

    
    public function productList($catId)
    {
                $data['categoryList'] = $this->Cms->get_category_name($catId);
                $data['productList'] = $this->Cms->get_productList($catId);
                $data['newsList'] = $this->Cms->get_news_list();
               // $data['pagination_link_pro'] = $this->pagination_link_maker_pro($catId);
//                echo "<pre>";
//                print_r($data['pagination_link']);
//		echo "</pre>";
//		die();
                
                $this->_renderViewOther('product_list',$data);
        
        

    }
    public function productListpagei($catId,$offset = 0)
    {           
                $data['categoryList'] = $this->Cms->get_category_name($catId);
                $data['productList'] = $this->Cms->get_productListpagei($catId,$offset);
                $data['newsList'] = $this->Cms->get_news_list();
                $data['pagination_link_pro'] = $this->pagination_link_maker_pro($catId);
//                echo "<pre>";
//                print_r($data['pagination_link_pro']);
//		echo "</pre>";
//		die();
                $this->_renderViewOther('product_list',$data);
	          

    }
   
    public function newsList($offset=0)
    {
                 $data['newsListAll'] = $this->Cms->get_news_list_all($offset);
                 $data['newsList'] = $this->Cms->get_news_list();
//                echo "<pre>";
//                print_r($data['newsList']);
//		echo "</pre>";
//		die();
                $data['pagination_link'] = $this->pagination_link_maker_news();
	           
                $this->_renderViewOther('news_list',$data);
        
        

    }
    
    function newsdetail($newsID)
    {
       $data['newsList'] = $this->Cms->get_news_list();
        $data['newsDetail'] = $this->Cms->get_news_content($newsID);
       
//        echo "<pre>";
//        print_r($data['blogDetail']);
//        echo "</pre>" ;
//        die();

       $this->_renderViewOther('news_detail',$data);
    }
    
    function servicedetail($serviceID)
    {
        $data['newsList'] = $this->Cms->get_news_list();
         $data['serviceDetail'] = $this->Cms->get_service_content($serviceID);
       
//        echo "<pre>";
//        print_r($data['serviceDetail']);
//        echo "</pre>" ;
//        die();

       $this->_renderViewOther('service',$data);
    }
    
    function productdetail($productID)
    {
        $data['newsList'] = $this->Cms->get_news_list();
        $data['productDetail'] = $this->Cms->get_productDetail($productID);
        $data['paypal_url']= $this->config->item('paypal_url');
        $data['paypal_email']= $this->config->item('paypal_email');
        $data['paypal_currency_code']= $this->config->item('paypal_currency_code');
        $data['paypal_live']= $this->config->item('paypal_live');
        $data['shipping']= $this->config->item('shipping');
        
//        echo "<pre>";
//        print_r($data['productDetail']);
//        echo "</pre>" ;
//        die();

//         $this->load->library( 'Paypal' );
//        $this->paypal->initialize();
// 
//        $this->paypal->add_field( 'return', site_url( 'shop/success' ) );
//        $this->paypal->add_field( 'cancel_return', site_url( 'shop/cancel' ) );
//        $this->paypal->add_field( 'notify_url', site_url( 'shop/ipn' ) );
// 
//        $this->paypal->add_field( 'item_name', "test");
//        $this->paypal->add_field( 'amount', '19.99' );
//        $this->paypal->add_field( 'quantity', '1');
// 
//        $data['paypal_form']=$this->paypal->paypal_auto_form();
        
        
        
        $this->_renderViewOther('product_details',$data);
    }
    
    public function page($id)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);
                $data['newsList'] = $this->Cms->get_news_list();
//		echo "<pre>";
//              print_r($data['pageDetail']);
//		echo "</pre>";
//		die();
                switch ($data['pageDetail']->type) {
                    case 'content':$this->_renderViewOther('inner',$data);
                        break;
                    case 'contact':$this->_renderViewOther('contact_us',$data);
                        break;
                    default:
                      $this->_renderViewOther('inner_page',$data);
                        break;
                }
 	    
    }
    
        public function videoPage($offset=0)
    {
		//echo "hii";
                $data['videoPageList'] = $this->Cms->get_video_page_content($offset);
                $data['newsList'] = $this->Cms->get_news_list();
                $data['pagination_link_video'] = $this->pagination_link_maker_videos();
//		echo "<pre>";
//              print_r($data['videoPageList']);
//		echo "</pre>";
//		die();
                $this->_renderViewOther('videos',$data);
                
                
 	    
    }


    public function contact_us()
    {
				
                        //$data['contact_us_data']=$this->Cms->get_page_content(19);
		       
                        $data['newsList'] = $this->Cms->get_news_list();
                        $this->_renderViewOther('contact',$data);
    }
 	
    public function contactus_email()
    {
                    try
                    {
                            unset($_POST['action']);
                            $posted=array();
                            $posted["name"]  	= trim($this->input->post("name"));
                            $posted["email"]  	= trim($this->input->post("email"));
                            $posted["state"]  	= trim($this->input->post("state"));
                            $posted["stateprovince"]  = trim($this->input->post("stateprovince"));
                            $posted["country"]  = trim($this->input->post("country"));
                            $posted["message"]  = trim($this->input->post("message"));
//                            echo "hello";
//                            echo "<pre>";
//                            print_r($posted);
//                            echo "</pre>";
//                            die();
                                                           
                            // Call model and insert data
                            //$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
                            //$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('state', 'state', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('stateprovince', 'stateprovince', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('country', 'country', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
                            $this->form_validation->set_message('required', 'Please fill in the fields');
                            if($this->form_validation->run() == FALSE)/////invalid
                            {
                            ////////Display the add form with posted values within it////
                            $this->data["posted"]=$posted;
                            }
                            else
                            {
                            // ------------------ email send code start ------------------ //
                            $i_newid=$this->Cms->insert_contact($posted);
                            $message='
                            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
                            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                            <html xmlns="http://www.w3.org/1999/xhtml">
                            <head></head>
                            <body>
                            <table>
                            <tr><td>Name:</td><td>' .  $posted['name'].'</td></tr>
                            <tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
                            <tr><td>State:</td><td>' . $posted["state"] . '</td></tr>
                            <tr><td>Province:</td><td>' . $posted["stateprovince"] . '</td></tr>
                            <tr><td>Country:</td><td>' . $posted["country"] . '</td></tr>    
                            <tr><td>Message:</td><td>' . nl2br($posted["message"]) . '</td></tr>
                            </table>
                            </body>
                            </html>
                            ';


                           // $status = $this->email_send($message,'sahani.bunty9@gmail.com',$posted["email"]);
                            $status = $this->email_send($message,'probir.debnath@gmail.com',$posted["email"]);

                            if($status == 'success'){
                               echo "Thank you for contacting us"; 
                            } else {
                               echo "Message sending failed !"; 
                            }

                            }								
                    }
                    catch(Exception $err_obj)
                    {
                                    show_error($err_obj->getMessage());
                    }
            }
            
            
    public function enquiry_email()
    {
                    try
                    {
                            unset($_POST['action']);
                            $posted=array();
                            $posted["f_name"]  	= trim($this->input->post("f_name"));
                            $posted["l_name"]  	= trim($this->input->post("l_name"));
                            $posted["email"]  	= trim($this->input->post("email"));
                            $posted["phone"]  = trim($this->input->post("phone"));
                            $posted["address"]  = trim($this->input->post("address"));
                            $posted["address2"]  = trim($this->input->post("address2"));
                            $posted["address3"]  = trim($this->input->post("address3"));
                            $posted["city"]  = trim($this->input->post("city"));
                            $posted["country"]  = trim($this->input->post("country"));
                            $posted["postcode"]  = trim($this->input->post("postcode"));
                            $posted["message"]  = trim($this->input->post("message"));
//                            echo "hello";
//                            echo "<pre>";
//                            print_r($posted);
//                            echo "</pre>";
//                            die();
                                                           
                            // Call model and insert data
                            //$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
                            //$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('f_name', 'f_name', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('l_name', 'l_name', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('phone', 'phone', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
                            $this->form_validation->set_message('required', 'Please fill in the fields');
                            if($this->form_validation->run() == FALSE)/////invalid
                            {
                            ////////Display the add form with posted values within it////
                            $this->data["posted"]=$posted;
                            }
                            else
                            {
                            // ------------------ email send code start ------------------ //

                            $message='
                            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
                            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                            <html xmlns="http://www.w3.org/1999/xhtml">
                            <head></head>
                            <body>
                            <table>
                            <tr><td>First Name:</td><td>' .  $posted['f_name'].'</td></tr>
                            <tr><td>Last Name:</td><td>' . $posted["l_name"] . '</td></tr>
                            <tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
                            <tr><td>Phone:</td><td>' . $posted["phone"] . '</td></tr>
                            <tr><td>Address:</td><td>' . $posted["address"] . '</td></tr>
                            <tr><td>Address2:</td><td>' .  $posted['address2'].'</td></tr>
                            <tr><td>Address3:</td><td>' . $posted["address3"] . '</td></tr>
                            <tr><td>City:</td><td>' . $posted["city"] . '</td></tr>
                            <tr><td>Country:</td><td>' . $posted["country"] . '</td></tr>
                            <tr><td>Postcode:</td><td>' . $posted["postcode"] . '</td></tr> 
                            <tr><td>Message:</td><td>' . nl2br($posted["message"]) . '</td></tr>   
                            </table>
                            </body>
                            </html>
                            ';


                            //$status = $this->email_send($message,'sahani.bunty9@gmail.com',$posted["email"]);
                            $status = $this->email_send($message,'info@skgroups.org',$posted["email"]);

                            if($status == 'success'){
                               echo "Thank you for your enquiry"; 
                            } else {
                               echo "Message sending failed !"; 
                            }

                            }								
                    }
                    catch(Exception $err_obj)
                    {
                                    show_error($err_obj->getMessage());
                    }
            }            
        
	
    public function email_send($message,$email_to,$email_from,$filepath = null)
    {
    try
    {

                                    $this->load->library('email');
                                    $email_setting  = array('mailtype'=>'html');
                                    $this->email->initialize($email_setting);
                                    //$email_to    = 'siddharth@satyajittech.com';
                                    //$email_from  =  $posted["email"];
                                    $this->email->from($email_from, 'Ceda');
                                    $this->email->to($email_to);
                                    $this->email->bcc('sahani.bunty9@gmail.com');
                                    $this->email->subject('Ceda :');
                                    $this->email->message($message);
                                    if($filepath != NULL){
                                       $this->email->attach($filepath); 
                                      // echo $message;
                                      // echo "test";
                                      // die;
                                    }

                                    if($this->email->send())
                                    {
                                                 return 'success';

                                    }					

                 // ------------------ email send code end ------------------//




    }
    catch(Exception $err_obj)
    {
                    show_error($err_obj->getMessage());
    }

    }
    //pagination for products
    public function pagination_link_maker_pro($cat_id) {
        
        $config['base_url'] = base_url().'/main/productListpagei/'.$cat_id;
        $config['total_rows'] = $this->Cms->count_table('productList',$cat_id);
        $config['uri_segment'] = 4;
        //print_r($config['total_rows']);die();
        $config['per_page'] = 4;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }
    
    public function pagination_link_maker_news() {
        
        $config['base_url'] = base_url().'/main/newsList';
        $config['total_rows'] = $this->Cms->count_table('newsList');
        $config['per_page'] = 2;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //$config['display_pages'] = FALSE; 
        $this->pagination->initialize($config);
        //echo $this->Cms->rowcount('newsList');
        return $this->pagination->create_links();
    }
    
        public function pagination_link_maker_videos() {
        
        $config['base_url'] = base_url().'/main/videoPage';
        $config['total_rows'] = $this->Cms->count_table('videolist');
        $config['per_page'] = 2;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //$config['display_pages'] = FALSE; 
        $this->pagination->initialize($config);
        //echo $this->Cms->rowcount('newsList');
        return $this->pagination->create_links();
    }
    
    

    public function callback() {
        echo "Purchase successfull ";
        
    }
    
    public function searchAll() {
        $data['newsList'] = $this->Cms->get_news_list();
        
        $search_keyword  	= trim($this->input->post("search_keyword"));
        $data['searchList'] = $this->Cms->get_search_list($search_keyword);
       
//        echo "<pre>";
//        print_r($data['searchBlogList']);
//        echo "</pre>" ;
//        die();
        
         $this->_renderViewOther('search_result',$data);
    
    }
public function payment()
    {
                    try
                    {
                            
                            $posted                         = array();
                            $posted["name"]                 = trim($this->input->post("name"));
                            $posted["email"]                = trim($this->input->post("email"));
                            $posted["phone"]                = trim($this->input->post("phone"));
                            $posted["shipping_address"]     = 'static address abc';
                            $posted["business"]             = trim($this->input->post("business"));
                            $posted["currency_code"]        = trim($this->input->post("currency_code"));
                            $posted["item_name"]            = trim($this->input->post("item_name"));
                            $posted["amount"]               = trim($this->input->post("amount"));
                            $posted["name"]                 = trim($this->input->post("name"));
                            $posted["email"]                = trim($this->input->post("email"));
                            
//            echo "<pre>";
//            print_r($posted);
//            echo "</pre>";
//            die();
                            $i_newid=$this->Cms->insert_payment_data($posted);
                            echo $i_newid;
//                            if($i_newid != 0)
//                            {
//                               echo $i_newid; 
//                            } 
//                            else 
//                            {
//                               echo '0'; 
//                            }

                           		
                        //echo '1';
                    }
                    catch(Exception $err_obj)
                    {
                                    show_error($err_obj->getMessage());
                    }
            }    
    


}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */