<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$config['paypal_email'] = "sahani.bunty_buss@gmail.com"; //your paypal email
//$config['paypal_email'] = "rajandroproshaddas@yahoo.com"; //your paypal email
 
$config['paypal_currency_code'] = 'USD'; //currency: nok, usd, gbp... https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes
 
$config['paypal_live'] = FALSE;     //bool: paypal live? or sandbox
$config['ipn_log'] = TRUE;      //bool: log active? requires database
$config['paypal_url']="https://www.sandbox.paypal.com/in/cgi-bin/webscr";
//$config['paypal_url']="https://www.paypal.com/in/cgi-bin/webscr";

$config['shipping']="1";

?>