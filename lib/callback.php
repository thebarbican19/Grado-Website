<?

function api_callback($url, $method, $data, $redirect) {
	$ch_headers[] = 'Accept-language: en';
	$ch_headers[] = 'gdappkey: app_WWiPnda8123nshd810271sjspa887s';
		
 	if (!empty($_COOKIE['gd_bearer'])) $ch_headers[] = 'gdbearer: ' . $_COOKIE['gd_bearer'];
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ch_headers);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	if ($method == "POST") curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$api_output = curl_exec($ch);
	$api_code = (int)$api_output[0]->error_code;
	if(curl_errno($ch)) $api_output = 'Curl error: ' . curl_error($ch);
	curl_close($ch);
	
	if ($api_code != 200 && !empty($redirect)) {
		$api_redirect = "Location: " . $redirect;
		header($api_redirect);
		
	}
	else return json_decode($api_output);
		
}

?>