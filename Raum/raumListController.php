<?php 


$root = '..';
require_once($root . '/config/config.php');
require_once($root . '/core/mysql.php');
require_once($root . '/core/models/rooms.php');



$Rooms = new Model_Rooms();


$db = getMysqlConnection();
$rooms = $Rooms::getAllRooms($db);

$view = array(
  'rooms' => $rooms
);


require_once('raumListView.php');
?>