<?

$_SERVER["HTTP_GDAPPKEY"] = "app_WWiPnda8123nshd810271sjspa887s";

include '/home/gradoapp/public_html/api/v1/lib/auth.php';

header("Content-type: text/xml");

$sitemap ='<?xml version=\'1.0\' encoding=\'UTF-8\'?>';
$sitemap .='<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

$sitemap_exclude = array("sitemap.php", "404.php");
$sitemap_base_url = "/home/gradoapp/public_html/website";
$sitemap_base_directory = opendir($sitemap_base_url);
while (($file = readdir($sitemap_base_directory)) !== false){
	if (strpos($file, 'php') !== false && !in_array($file, $sitemap_exclude)) {
		$sitemap .= '<url>';
	    $sitemap .= '<loc>http://www.gradoapp.com/' . str_replace(".php", "", $file) . '</loc>';
	    $sitemap .= '<changefreq>weekly</changefreq>';
		$sitemap .= '</url>';
		
	}
	
}

closedir($sitemap_base_directory);

$sitemap_dynamic_pages = mysql_query("SELECT `channel_id`, `channel_title`, `user_key`, `user_status` FROM `channel` LEFT JOIN users on channel.channel_owner LIKE users.user_key WHERE `channel_hidden` = 0 AND `user_status` LIKE 'active'");
while($row = mysql_fetch_array($sitemap_dynamic_pages)) {		
	$sitemap .= '<url>';
	$sitemap .= '<loc>http://www.gradoapp.com/' . $row['channel_title'] . '</loc>';
	$sitemap .= '<changefreq>daily</changefreq>';
	$sitemap .= '</url>';
	
}

$sitemap .= '</urlset>';
echo $sitemap;

?>