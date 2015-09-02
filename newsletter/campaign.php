<?php 

include ('MailChimp.php');
use DrewM\MailChimp;

$json_file = $argv[1];
$api_key = $argv[2];
$newsletter = $argv[3];
$date  = date('d-M-Y');
$html = file_get_contents($newsletter);

$atoz = json_decode(file_get_contents($json_file));

$args['type'] = 'regular';

$args['options'] = 
  array ( 	'list_id' => '5fa71cd7de',
		'subject' => $atoz->subject_line,
		'from_email' => 'mail@guyroutledge.co.uk',
		'from_name' => 'AtoZ CSS',
		'tracking' => array('opens'=>true, 'html_clicks'=>true, 'text_clicks'=>false),
		'authenticate' => false,
		'analytics' => array('google'=>'atphga'),
		'title' => 'AtoZ CSS News - '.$date,
		'auto_footer' => false,
		'generate_text' => true);

$args['content'] = array('html' => $html);

$MailChimp = new MailChimp($api_key);

$campaign_id = $MailChimp->call( 'campaigns/create', $args);

if( isset($result->status) && $result->status == 'error' ) {
    echo "Error creating new campaign.";
} else {
    echo "Successfully created new campaign!";
}


?>
