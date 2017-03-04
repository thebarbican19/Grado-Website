<?

$database_connect = mysql_connect('localhost', 'root', 'root'); 
if (!$database_connect) { 
	header('HTTP/ 400 HOST ERROR', true, 400);
		
	$json_status = 'host not connected';
    $json_output[] = array('status' => $json_status, 'error_code' => '302');
	echo json_encode($json_output);
	exit;
	
} 

$database_table = mysql_select_db("grado_tags");
if (!$database_table) { 
	header('HTTP/ 400 DATABASE ERROR', true, 400);
			
	$json_status = 'database table not found';
    $json_output[] = array('status' => $json_status, 'error_code' => '302');
	echo json_encode($json_output);
	exit;
	
}

?>
	
	