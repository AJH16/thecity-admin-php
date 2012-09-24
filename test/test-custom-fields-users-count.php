<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Test Custom Fields Users Count</title>
</head>

<body>
<?php
require_once('test-util.php'); 
require_once(dirname(__FILE__) . '/../lib/ca-main.php'); 

echo '<div class="apitest">';
echo '<h1>custom_fields_users_count</h1>';

$ca = new CityApi();
$ca->debug = true;
$ca->json = true;

// either id or label will work?
//$custom_fieldid = 'gk_allergies_medical';
$custom_fieldid = 3;
$args = null;
$results = $ca->custom_fields_users_count($custom_fieldid, $args); 

echo '<h2>Formatted JSON results: </h2>';
echo '<pre>';
echo format_json($results);
echo '</pre>';

$args = array('search' => 'nuts');
$results = $ca->custom_fields_users_count($custom_fieldid, $args); 

echo '<h2>Formatted JSON results: </h2>';
echo '<pre>';
echo format_json($results);
echo '</pre>';

echo '</div>';
?>

</body>
</html>
