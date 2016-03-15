<?php
// ini Webservys API: menampilkan app list atau menampilkan a specific app by id.
// biasanya data diambil dari database, ini demo saja pakai tanpa database

function get_app_by_id($id)        // nama fungsi servis 1
{
  // build JSON array.
  $app_info = array();

  switch ($id){
    case 1:
      $app_info = array("app_name" => "Web Demo",
	  "app_price" => "Free", "app_version" => "2.0"); 
      break;
    case 2:
      $app_info = array("app_name" => "Audio Countdown", "app_price" 
	  => "Free", "app_version" => "1.1");
      break;
    case 3:
      $app_info = array("app_name" => "The Tab Key", "app_price" 
	  => "Free", "app_version" => "1.2");
      break;
    case 4:
      $app_info = array("app_name" => "Music Sleep Timer", "app_price" 
	  => "Free", "app_version" => "1.9");
      break;
  }

  return $app_info;
}

function get_app_list()
{
  
  //build JSON array
  $app_list = array(array("id" => 1, "name" => "Web Demo"), 
  array("id" => 2, "name" => "Audio Countdown"), array("id" => 3, "name" => "The Tab Key"),
  array("id" => 4, "name" => "Music Sleep Timer")); 

  return $app_list;
}

$possible_url = array("get_app_list", "get_app");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  switch ($_GET["action"])
    {
      case "get_app_list":
        $value = get_app_list();
        break;
      case "get_app":
        if (isset($_GET["id"]))
          $value = get_app_by_id($_GET["id"]);
        else
          $value = "Missing argument";
        break;
    }
}
//return JSON array
exit(json_encode($value));
?>
