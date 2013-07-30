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
    function index()
    {
     
//echo "hii"; 
        $data['blogList'] = $this->Cms->get_blog_list();
//        echo "<pre>";
//        print_r( $data['blogList']);
//        echo "</pre>" ;
        $this->load->view('header.php',$data);
        $this->load->view('blog_veiw.php',$data);
        $this->load->view('footer.php',$data);
    }
    function comment($blogID)
    {
       $data['commnetList'] = $this->Cms->get_comment_list($blogID);
        

        $this->load->view('header.php',$data);
        $this->load->view('comment_veiw.php',$data);
        $this->load->view('footer.php',$data);
    }

}
?>
