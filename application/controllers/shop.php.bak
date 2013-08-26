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
 
        $this->paypal->add_field( 'return', site_url( 'shop/success' ) );
        $this->paypal->add_field( 'cancel_return', site_url( 'shop/cancel' ) );
        $this->paypal->add_field( 'notify_url', site_url( 'shop/ipn' ) );
 
        $this->paypal->add_field( 'item_name', "test");
        $this->paypal->add_field( 'amount', '19.99' );
        $this->paypal->add_field( 'quantity', '1');
 
        $data['paypal_form']=$this->paypal->paypal_auto_form();
        //$this->load->view('product_details.php',$data);
        
    }
 
    public function ipn() {


        if ( $this->paypal->validate_ipn() ) {
            $pdata = $this->paypal->ipn_data;
            if ($pdata['txn_type'] == "web_accept") {
                //if($pdata['payment_status'] == "Completed"){ // for PayPal live
                if($pdata['payment_status'] == "Pending"){ // f0r sandbox                    
                    
                    if($pdata['business'] == $this->config->item( 'paypal_email' )) {
                        //handle payment...
                        //you call a model from here to update the status of this order.
                        //$this->orders->update($pdata['custom'], "yes");
                        
                      // $data['userDetail'] = $this->Cms->get_userDetail($pdata['custom']);
                        
                     //  $i_updateid=$this->Cms->update_payment_status($pdata['custom']);
                        $i_updateid=$this->Cms->update_payment_status($pdata);
                        $data['userDetail'] = $this->Cms->get_userDetail($pdata['custom']);
                      if($i_updateid!=0)
                       {
                       $id =  "<pre>" . print_r( $pdata, true ). "</pre>";
                         $message='
                            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
                            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                            <html xmlns="http://www.w3.org/1999/xhtml">
                            <head></head>
                            <body>
                            <table>
                            <tr><td colspan="2"><a href='.base_url().'><img src='.base_url("img/ceda.jpg").' width="171" height="27" /></a></td></tr>
                            <tr><td colspan="2"><h2> Product Purchase Invoice -</h2>'.base_url().' </td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td><h3><u>Customer Detail</u></h3></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>Customer Name:</td><td>' . $data['userDetail']->name.'</td></tr>
                            <tr><td>Customer Email (Payer Email):</td><td>' . $data['userDetail']->payer_email.'</td></tr>
                            <tr><td>Customer Address :</td><td>' . $data['userDetail']->address_street.' ,'.$data['userDetail']->address_city.' '.$data['userDetail']->address_state.' - '.$data['userDetail']->address_zip.' '.$data['userDetail']->address_country.'</td></tr>
                            <tr><td colspan="2"> <hr> </td></tr>  
                            <tr><td><h3><u>Purchase Detail</u></h3></td></tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td>Purchased Product:</td><td>' . $data['userDetail']->item_name . '</td></tr>
                            <tr><td>Product Price :</td><td>' . $data['userDetail']->amount .' '.$data['userDetail']->currency_code. '</td></tr>
                            <tr><td>Shipping Price :</td><td>' . $data['userDetail']->shipping .' USD </td></tr>
                            <tr><td colspan="2"> <hr> </td></tr>    
                            <tr><td>Total Price :</td><td>' . $data['userDetail']->payment_gross .' USD </td></tr>    
                            <tr><td>Paypal Transaction ID :</td><td>' . $data['userDetail']->txn_id .'</td></tr>
                            <tr><td  colspan="2">&nbsp;</td></tr>
                            
                            </table>
                            </body>
                            </html>
                            ';
 
                           
                        $this->load->library('email');
                        $email_setting  = array('mailtype'=>'html');
                        $this->email->initialize($email_setting);
                        // Give Probir da's email id here 
                        $this->email->from('sahani.bunty10@gmail.com', 'Ceda');
                        //$this->email->to($data['userDetail']->email);
                        $this->email->to('sahani.bunty9@gmail.com');
                        //Give Probir da's email id here 
                        $this->email->bcc('palash.sinharay2000@gmail.com');
                        $this->email->subject('Ceda :');
                        $this->email->message($message);
                        $this->email->send();
                           
                       }
                        
                   
                        
                    }
                }
            }
        }
    }
   public function success() {
        //$i_newid=$this->Cms->update_payment_status();
      
       echo "success";
       //redirect('main');
      }
 
    public function cancel() {
       echo "canceled / failed";
       // redirect('main');
    }
}
?>