<?php



class Cms extends CI_Model {

	public $_table = 'cmspage';
	public $_meduiatable = 'media_gallery';
	public $_topmenu = 'topmenu';
	public $_product = 'product';
        public $_newstable = 'news';
        public $_service= 'service';
	public $_resource_center = 'resource_center';
	public $_categories = 'product_category';
	public $_config = 'siteconfig';
        public $_user = 'users';
        public $_blogtable = 'blog';
        public $_commenttable = 'comments'; 
        public $_contactus = 'contactus'; 
        public $_rightpanel = 'rightpanel';
        public $_upperslider = 'upperslider';
	public $result = null;

	function __construct()
	{
		//parent::Model();
		parent::__construct();
	}
        function get_topmenu()
        {
                $query = $this->db->get_where($this->_topmenu,array ('status' => '1'));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
        }
        function get_product_cat()
        {
                $query = $this->db->get_where($this->_categories,array ('status' => '1'));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
        }
        function get_category_name($catID)
        {
                $query = $this->db->get_where($this->_categories,array ('cat_id' => $catID));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result[0];
        }

        //function for getting cms page content
	function get_login($username)
	{

            	$query = $this->db->get_where($this->_user, array('username' => $username));
                $this->result = $query->result();
                if($this->result != NULL){
                    return $this->result[0];
                }else{
                    return FALSE;
                }
                
                

	}

	//function for getting cms page content
	function get_page_content($id)
	{

		$query = $this->db->get_where($this->_table,array('cid =' => $id));
		$this->result = $query->result();
		/*echo "<pre>";
		print_r($this->result);
		echo "</pre>";*/
		return $this->result[0];

	}
	
	//function for getting gallery page content
	function get_page_content_all()
	{
		$query = $this->db->get($this->_table);
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
	}	
     
        //function for getting gallery page content
	function get_news_list($limit=2)
	{
                $query = $this->db->get($this->_newstable, $limit);
		
		$this->result = $query->result();
	
		return $this->result;
	}
        function get_news_list_all($offset)
	{
                $query = $this->db->get($this->_newstable,2,$offset);
		
		$this->result = $query->result();
	
		return $this->result;
	}
	
	//function for getting cms page content
	function get_news_content($id)
	{
		$query = $this->db->get_where($this->_newstable,array('id =' => $id));
		
		$this->result = $query->result();
		
		return $this->result[0];
	}
      
        function get_blog_list($offset)
	{
                $query = $this->db->order_by('timestamp', 'DESC')->get($this->_blogtable,2,$offset);
		
		$this->result = $query->result();
	
		return $this->result;
	}
     
        function get_blogDetail($blogID) 
        {
                $query = $this->db->get_where($this->_blogtable,array('blog_id' => $blogID));
		
		$this->result = $query->result();

		return $this->result[0];
        }        
        
        function get_all_comment_list($blogID)
	{
               
                $query = $this->db->order_by('timestamp', 'DESC')->get_where($this->_commenttable,array('blog_id' => $blogID,'status'=>'1'));
		//echo $this->db->last_query();
		$this->result = $query->result();
	
		return $this->result;
	}
        
        function get_recent_comment_list($id,$limit=3)
	{
                $query = $this->db->order_by('timestamp', 'DESC')->get_where($this->_commenttable,array('blog_id =' => $id,'status'=>'1'),$limit);
		//echo $this->db->last_query();
		$this->result = $query->result();
	
		return $this->result;
	}
	
        function insert_comment($posted)
	{
            $i_ret_=0; ////Returns false
            if(!empty($posted))
            {
                                $s_qry="Insert Into ".$this->_commenttable." Set ";
                                $s_qry.=" blog_id=? ";
                                $s_qry.=", comment_text=? ";
                                $s_qry.=", author=? ";
                                $s_qry.=", status=? ";
                                $this->db->query($s_qry,array(
                                $posted["blog_id"],
                                $posted["comment"],
                                $posted["author"],
                                '0',
             ));
                //echo $this->db->last_query();
                //die();
                $i_ret_=$this->db->insert_id();     
                
            }
            unset($s_qry, $info );
            return $i_ret_;
	}
    
        function insert_contact($posted)
	{
            $i_ret_=0; ////Returns false
            if(!empty($posted))
            {
                                $s_qry="Insert Into ".$this->_contactus." Set ";
                                $s_qry.=" name=? ";
                                $s_qry.=",email=? ";
                                $s_qry.=",state=? ";
                                $s_qry.=",province=? ";
                                $s_qry.=",country=? ";
                                $s_qry.=",message=? ";
                                $this->db->query($s_qry,array(
                                $posted["name"],
                                $posted["email"],
                                $posted["state"],
                                $posted["stateprovince"],
                                $posted["country"],
                                $posted["message"],
             ));
                //echo $this->db->last_query();
                //die();
                $i_ret_=$this->db->insert_id();     
                
            }
            unset($s_qry, $info );
            return $i_ret_;
	}

	 //function for rowcont
        function count_table($param,$where = 0) {
            
            switch ($param) {
                case 'productList' :
                    $this->db->where(array('cat_id' => $where,'status' => '1'));                  
                    $this->db->from($this->_product);
                    return $this->db->count_all_results();
                    break;
                
                case 'newsList' :
                    return $this->db->count_all($this->_newstable);
                    break;
                
                case 'blog' :
                    return $this->db->count_all($this->_blogtable);
                    break;

                default:
                    echo "dieeeee"; die();
                    break;
            }
            
            
        }
        //function for getting gallery page content
	
        function get_productList($catId)
	{
		// limit 4 for header link
               $query = $this->db->get_where($this->_product,array('cat_id' => $catId,'status' => '1'),4);
               
            	$this->result = $query->result();

		return $this->result;
	}
         function get_productListpagei($catId,$offest = 0)
	{
		
               $query = $this->db->get_where($this->_product,array('cat_id' => $catId,'status' => '1'),2,$offest);
//               		echo $this->db->last_query();
//                die();
            	$this->result = $query->result();

		return $this->result;
	}
        
	function get_fetured_product()
	{
		$query = $this->db->get_where($this->_product,array('featured' => '1'),3);
//		echo $this->db->last_query();
//                die();
                
		$this->result = $query->result();

		return $this->result;
	}        
        
        
        function get_productDetail($product_id) {
                $query = $this->db->get_where($this->_product,array('pid' => $product_id));
		
		$this->result = $query->result();

		return $this->result[0];
        }
        
        function get_service_list()
        {
            
            $query = $this->db->get_where($this->_service,array());
	
            $this->result = $query->result();

            return $this->result;
        }
        
        
	function get_service_content($id)
	{
		$query = $this->db->get_where($this->_service,array('s_id =' => $id));
		
		$this->result = $query->result();
		
                return $this->result[0];

	}
       
	
        //function for getting gallery page content
		
        function get_category_image()
        {
                //$query = $this->db->get_where($this->_categories,array ('categories_id' => $catID));
		//echo $this->db->last_query();
		//die();
		//$this->result = $query->result();
            
            
            $query = $this->db->query("SELECT cat_image FROM ".$this->_categories." WHERE cat_id = (SELECT MAX(cat_id) FROM ".$this->_categories.")");
            if ($query->num_rows()== 1)
            {
                $row = $query->row();
                $row->cat_image;
                return $row->cat_image;
            }

		
        } 
        
        function site_config_all()
	{
                $query = $this->db->get($this->_config);
		
		$this->result = $query->result();
	
		return $this->result[0];
	}
        
        function get_unapproved_comment_total()
        {
                    $this->db->where(array('status' => '0'));                  
                    $this->db->from($this->_commenttable);
                   
                    return $this->db->count_all_results();
        }
        
       function get_search_list($search_keyword)
	{
               
        $sql = "SELECT * FROM blog WHERE MATCH (`desc`) AGAINST (? IN BOOLEAN MODE )";  
        $query = $this->db->query($sql, array($search_keyword) );
        $result['blog'] = $query->result();
        
        $sql1 = "SELECT * FROM cmspage WHERE MATCH (`content`) AGAINST (? IN BOOLEAN MODE )";  
        $query = $this->db->query($sql1, array($search_keyword) );
        $result['cms'] = $query->result();
        
        $sql2 = "SELECT * FROM product WHERE MATCH (`desc`) AGAINST (? IN BOOLEAN MODE )";  
        $query = $this->db->query($sql2, array($search_keyword) );
        $result['product'] = $query->result();

        $sql3 = "SELECT * FROM service WHERE MATCH (`s_desc`) AGAINST (? IN BOOLEAN MODE )";  
        $query = $this->db->query($sql3, array($search_keyword) );
        //echo $this->db->last_query();
        $result['service'] = $query->result();

        $sql3 = "SELECT * FROM news WHERE MATCH (`description`) AGAINST (? IN BOOLEAN MODE )";  
        $query = $this->db->query($sql3, array($search_keyword) );
        //echo $this->db->last_query();
        $result['news'] = $query->result();
        
        return $result;
	}
        
        function get_right_panel_content() 
        {
                $query = $this->db->get_where($this->_rightpanel);
		
		$this->result = $query->result();

		return $this->result[0];
        }
        
         function get_slider()
	{
	       $query = $this->db->get_where($this->_upperslider,array('status' => '1'));
               $this->result = $query->result();
               return $this->result;
	}

}	


		

	


