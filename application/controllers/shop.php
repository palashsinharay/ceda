<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class shop extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        $this->load->library( 'Paypal' );
        $this->paypal->initialize();
        $this->load->model('Cms');
 
    }
    
    
    public function index()
    {
        $this->load->library( 'Paypal' );
        $this->paypal->initialize();
 
//        $this->paypal->add_field( 'return', site_url( 'shop/success' ) );
//        $this->paypal->add_field( 'cancel_return', site_url( 'shop/cancel' ) );
//        $this->paypal->add_field( 'notify_url', site_url( 'shop/ipn' ) );
// 
//        $this->paypal->add_field( 'item_name', "test");
//        $this->paypal->add_field( 'amount', '19.99' );
//        $this->paypal->add_field( 'quantity', '1');
// 
//        $this->paypal->paypal_auto_form();
    }
 
    public function ipn() {

        if ( $this->paypal->validate_ipn() ) {
            $pdata = $this->paypal->ipn_data;
            
            if ($pdata['txn_type'] == "web_accept") {
                if($pdata['payment_status'] == "Completed"){
                    if($pdata['business'] == $this->config->item( 'paypal_email' )) {
                        //handle payment...
                        //you call a model from here to update the status of this order.
                        //$this->orders->update($pdata['custom'], "yes");
                        
                        
                        $this->load->library('email');
                        $email_setting  = array('mailtype'=>'html');
                        $this->email->initialize($email_setting);
                        $this->email->from('sahani.bunty10@gmail.com', 'Ceda');
                        $this->email->to('sahani.bunty9@gmail.com');
                        $this->email->subject('Ceda :');
                        $this->email->message(print_r($pdata));
                        $this->email->send();
                        
                    }
                }
            }
        }
    }
    
    
    
 
    


 
    public function success() {
        //$i_newid=$this->Cms->update_payment_status();
        echo "success";
        //redirect(echo base_url('main/index')); 
      }
 
    public function cancel() {
        echo "canceled / failed";
    }
}
?>