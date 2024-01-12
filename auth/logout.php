<?php

session_start();
session_unset();
session_destroy();

header("location: http://localhost/SurgeAds_Media/index.php");

?>