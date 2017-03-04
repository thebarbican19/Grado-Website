<?

$_SERVER["HTTP_GDAPPKEY"] = "app_WWiPnda8123nshd810271sjspa887s";

include '/home/gradoapp/public_html/api/v1/lib/auth.php';
include '/home/gradoapp/public_html/api/v1/lib/slack.php';
include '/home/gradoapp/public_html/api/v1/lib/keywords.php';

$passed_data = json_decode(file_get_contents('php://input'), true);
$passed_text = $passed_data['input'];

if (empty($passed_text)) {
	header('HTTP/ 422 MISSING DATA', true, 422);
		
	$json_status = 'input not passed';
    $json_output[] = array('status' => $json_status, 'error_code' => 422);
	echo json_encode($json_output);
	exit;
}
else {
	header('HTTP/ 200 OKAY', true, 200);
		
	$text_output = html_entity_decode($passed_text, ENT_QUOTES);
	$text_output = strip_tags($text_output);
	$text_output = trim($text_output);
	$text_output = preg_replace("/\r|\n/", "", $text_output);
	//$text_output = tags_produce($text_output);
	
	$json_status = 'tags found';
    $json_output[] = array('status' => $json_status, 'error_code' => 200, 'output' => $text_output);
	echo json_encode($json_output);
	exit;

}

?>