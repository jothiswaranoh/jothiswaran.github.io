<?php
$page = "home";
$title = "Park College Conference & Paper Publication";
$company_name = "Park College of Engineering and Technology";

error_reporting(E_ALL);
ini_set('display_errors', 1); //showing errors in browser
include 'libs/load.php';
include '_partials/_head.php';
include '_partials/_header.php';
include '_partials/_conference_topics.php';
include '_partials/_organising_committee.php';
include '_partials/_publication_info.php';
include '_partials/_imp_date.php';
include '_partials/_guidelines.php';
include '_partials/_contact.php';
include '_partials/_footer.php';
