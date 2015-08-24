<?php 

include ('MailChimp.php');
use DrewM\MailChimp;

$api_key = $argv[1];
$newsletter = $argv[2];
$date  = date('d-M-Y');
$html = file_get_contents($newsletter);

$args['type'] = 'regular';

$args['options'] = 
  array ( 	'list_id' => '5fa71cd7de',
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
