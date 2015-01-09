<?php

$config = array();
$config['name'] = "Tecdoc";
$config['author'] = "Stoicho";
$config['no_cache'] = true;
$config['ui'] = true;
$config['ui_admin'] = true;
$config['position'] = 9000;
$config['version'] = 0.2;


$config['tables'] = array();


$fields_to_add = array();
$fields_to_add['art_id'] = 'integer';
$fields_to_add['user_id'] = 'integer';
$fields_to_add['price'] = 'float';
//$fields_to_add['view_count'] = ['type' => 'integer', 'default' => 1];
//$fields_to_add['user_ip'] = 'string';
//$fields_to_add['visit_date'] = 'date';
//$fields_to_add['visit_time'] = 'time';
//$fields_to_add['last_page'] = 'string';
//$fields_to_add['session_id'] = 'string';

$config['tables']['tecdoc_pricing'] = $fields_to_add;


