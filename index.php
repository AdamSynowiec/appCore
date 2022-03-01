<?php

include 'core/settings.php';
include 'core/database/database.php';

$url_routing = htmlspecialchars($_GET['view']);

if( isset($url_routing) && $url_routing != "") {

    include 'templates/pages/' . $url_routing . '.php';

}else{

    $url_routing = "app";
    include 'templates/pages/' . $url_routing . '.php';
}

?>