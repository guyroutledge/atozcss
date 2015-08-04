<?php 

include ('MailChimp.php');
use DrewM\MailChimp;

$newsletter = $argv[1];
$date  = date('d-M-Y');
$html = file_get_contents($newsletter);

$api_key = "3b071b9ad360b38ca7e89ca5be8cb8b9-us3";

$args['type'] = 'regular';

$args['options'] = 
  array ( 	'list_id' => 'bd49279454',
		'subject' => 'AtoZ CSS News',
		'from_email' => 'mail@guyroutledge.co.uk',
		'from_name' => 'AtoZ CSS',
		'tracking' => array('opens'=>true, 'html_clicks'=>true, 'text_clicks'=>false),
		'authenticate' => false,
		'analytics' => array('google'=>'atphga'),
		'title' => 'AtoZ CSS News - '.$date,
		'auto_footer' => false,
		'generate_text' => true);

//$args['content'] = array('archive' => './test.zip', 'archive_type'=>'zip');
$args['content'] = array('html' => $html);

$MailChimp = new MailChimp($api_key);

$campaign_id = $MailChimp->call( 'campaigns/create', $args);

if( isset($result->status) && $result->status == 'error' ) {
    echo "Error creating new campaign.";
    //echo $MailChimp->errorCode;
    //echo $MailChimp->errorMessage;
} else {
    echo "Successfully created new campaign!";
}


?>
