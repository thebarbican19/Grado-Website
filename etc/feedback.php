<?

$_SERVER["HTTP_GDAPPKEY"] = "app_WWiPnda8123nshd810271sjspa887s";

include '/var/www/html/gradoapp/api/v1/lib/auth.php';
include '/var/www/html/gradoapp/api/v1/lib/slack.php';

header('Content-Type: application/json');

$passed_method = $_SERVER['REQUEST_METHOD'];
$passed_data = json_decode(file_get_contents('php://input'), true);
$passed_type = $passed_data['type'];
$passed_message = $passed_data['message'];
$passed_email = $passed_data['email'];
$passed_name = $passed_data['name'];

if ($passed_method == 'POST') {
	if (empty($passed_type)) {
		header('HTTP/ 422 MISSING DATA', true, 422);
			
		$json_status = 'type key parameter missing';
    	$json_output[] = array('status' => $json_status, 'error_code' => 422);
		echo json_encode($json_output);
		exit;
		
	}
	else if (empty($passed_email)) {
		header('HTTP/ 422 MISSING DATA', true, 422);
				
		$json_status = 'email parameter missing';
    	$json_output[] = array('status' => $json_status, 'error_code' => 422);
		echo json_encode($json_output);
		exit;
		
	}
	else if (empty($passed_name)) {
		header('HTTP/ 422 MISSING DATA', true, 422);
				
		$json_status = 'name parameter missing';
    	$json_output[] = array('status' => $json_status, 'error_code' => 422);
		echo json_encode($json_output);
		exit;
		
	}
	else if (empty($passed_message)) {
		header('HTTP/ 422 MISSING DATA', true, 422);
				
		$json_status = 'message parameter missing';
    	$json_output[] = array('status' => $json_status, 'error_code' => 422);
		echo json_encode($json_output);
		exit;
		
	}
	else {	
		header('HTTP/ 200 OKAY', true, 200);
			
		$slack_fallback = $passed_name . " (" . $passed_email . ") posted a *" . ucfirst($passed_type) . "* message";
		$slack_attachment[] = array("title" => "", "text" => $passed_message, "color" => "#36D38F");
		$slack_post = post_slack($slack_fallback, 'general', $authuser_avatar, $slack_attachment);
		
		$json_status = 'message sent';
		$json_output[] = array('status' => $json_status, 'error_code' => '200');
		echo json_encode($json_output);
		exit;
			
	}
	
}
else {
	$json_status = $passed_method . ' methods are not supported in the api';
	$json_output[] = array('status' => $json_status, 'error_code' => 405);
	echo json_encode($json_output);
	exit;
	
}