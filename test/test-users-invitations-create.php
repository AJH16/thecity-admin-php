<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Test Users Invitations Create</title>
</head>

<body>
<?php
require_once('test-util.php'); 
require_once(dirname(__FILE__) . '/../lib/ca-main.php'); 

echo '<div class="apitest">';
echo '<h1>users_invitations_create</h1>';

$ca = new CityApi();
$ca->debug = true;
$ca->json = true;

$userid = 238801;
//$groupid = 43681;
//$args = array('custom_message' => 'Join');
//$results = $ca->users_invitations_create($userid, $groupid, $args); 

$args = array('group_id' => 43681, 'custom_message' => 'Join');
$results = $ca->users_invitations_create($userid, $args); 

echo "<h2>results:</h2>$results";

echo '<h2>var_dump results:</h2>';
var_dump($results);

echo '<h2>Formatted JSON results: </h2>';
echo '<pre>';
echo format_json($results);

echo '</pre>';
echo '</div>';
?>

</body>
</html>
