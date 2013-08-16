<?php
class Blog extends CI_Controller {
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
		//$this->load->library('email');
		//$config['protocol'] = 'sendmail';
		//$config['charset'] = 'utf-8';
		//$config['wordwrap'] = TRUE;
		//$config['mailtype'] = 'html';
		//$this->email->initialize($this->config);
       $this->load->helper('url');
       $this->load->helper('form');
       $this->load->model('Cms');
               
 
    }
 public function _renderView($page,$data) {
                
                $data['allCategoryData'] = $this->Cms->get_product_cat();
                $data['cmsData'] = $this->Cms->get_page_content_all();
                $data['allServicesData'] = $this->Cms->get_service_list();
                $data['siteConfig'] = $this->Cms->site_config_all();
                $data['rightPanelData'] = $this->Cms->get_right_panel_content();
                $data['allSliderData'] = $this->Cms->get_slider();
                
                $this->load->view('header_other.php',$data);
                $this->load->view($page.'.php',$data);
                $this->load->view('footer.php',$data);
    }    
    function index($offset = 0)
    {
        
        
        $data['newsList'] = $this->Cms->get_news_list();
        $data['blogList'] = $this->Cms->get_blog_list($offset);
        $data['pagination_link_blog'] = $this->pagination_link_maker_blog();
//        foreach ($data['blogList']as $value)
//        {
//            $data['recentcommentList'] = $this->Cms->get_recent_comment_list($value->id,3);
//            
//        }
         $this->_renderView('blog_veiw',$data);
        // $data['recentcommentList'] = $this->Cms->get_recent_comment_list($id,$limit);
        
//        echo "<pre>";
//        print_r( $data['blogList']);
//        echo "</pre>" ;
   }
   
    function blogdetail($blogID)
    {
        $data['newsList'] = $this->Cms->get_news_list();
        $data['blogDetail'] = $this->Cms->get_blogDetail($blogID);
        $data['allcommentList'] = $this->Cms->get_all_comment_list($data['blogDetail']->blog_id);
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>" ;

       $this->_renderView('blog_detail',$data);
    }
    
    function submitComment()
    {
//        echo $this->input->post("comment");
//        echo $this->input->post("blog_id");
//        die();
        
        unset($_POST['action']);
        $posted=array();
        $posted["blog_id"]  	= trim($this->input->post("blog_id"));
        $posted["comment"]  	= trim($this->input->post("comment"));
        $posted["author"]  	= "adminBunty";
        
        $i_newid=$this->Cms->insert_comment($posted);
        if($i_newid!=0)
        {
            echo "Your Comment is awaiting for Admin Approval , Thank you .";
        }
        else
        {
            echo "Comment sending failed !! ";
        }
    }
   
    function comment($blogID)
    {
       $data['commnetList'] = $this->Cms->get_comment_list($blogID);
       $this->_renderView('comment_veiw',$data);
    }
    public function pagination_link_maker_blog() {
        
        $config['base_url'] = 'http://local.ceda.com/blog/index';
        $config['total_rows'] = $this->Cms->count_table('blog');
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

}
?>
