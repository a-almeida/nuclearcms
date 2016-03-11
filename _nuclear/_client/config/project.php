<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 * CleanIgniter v1.0#
 * Configuration;
 * */
$config['FolderTemplate'] = "";
$config['language'] = "portuguese";
$config['language_abbr'] = "pt";
$config['lang_uri_abbr'] = array("pt" => "portuguese", "en" => "english", "es" => "español","fr" => "french","ge" => "germany");
$config['encryption_key'] = 'clientencryptkey';
$config['useradmin'] = 'demo@demo.com';
$config['sess_cookie_name'] = md5('restrict_client_key');
$config['sess_expiration'] = 14400;
$config['sess_save_path'] = '_sessions';