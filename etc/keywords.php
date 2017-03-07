<?

$_SERVER["HTTP_GDAPPKEY"] = "app_WWiPnda8123nshd810271sjspa887s";

include '/var/www/html/gradoapp/api/v1/lib/auth.php';
include '/var/www/html/gradoapp/api/v1/lib/slack.php';
include '/var/www/html/gradoapp/api/v1/lib/keywords.php';

$passed_method = $_SERVER['REQUEST_METHOD'];
$passed_data = json_decode(file_get_contents('php://input'), true);
$passed_text = $passed_data['text'];
$passed_exclude = explode("," ,$passed_data['exclude']);
$passed_limit = (int)$passed_data['limit'];

if ($passed_limit == 0) $passed_limit = 10;

if (empty($passed_text)) {
	header('HTTP/ 422 MISSING DATA', true, 422);
		
	$json_status = 'input not passed';
    $json_output[] = array('status' => $json_status, 'error_code' => 422);
	echo json_encode($json_output);
	exit;
	
}
else {	
	header('HTTP/ 200 OKAY', true, 200);

	$tags_exclude = array_push($passed_exclude, "material", "colours");
	$tags_data = tags_produce($passed_text);
	$tags_relavant = $tags_data['relevant_tags'];
	foreach ($tags_relavant as $key => $value) {
		foreach ($value as $key => $tags) {
			if ($key == "tag" && !in_array($tags, $passed_exclude) && count($tags_output) <= $passed_limit) $tags_output[] = $tags;
						
		}
		
	}
	
	if (count($tags_output) == 0) $tags_output = array();
		
	$json_status = count($tags_output) . ' tags found';
    $json_output[] = array('status' => $json_status, 'error_code' => 200, 'tags' => $tags_output, 'data' => $tags_data);
	echo json_encode($json_output);
	exit;

}

?>