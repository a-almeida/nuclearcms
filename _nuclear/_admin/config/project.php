<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 * CleanIgniter v1.0#
 * Configuration;
 * */
$config['FolderTemplate'] = "default";
$config['language'] = "portuguese";
$config['language_abbr'] = "pt";
$config['lang_uri_abbr'] = array("pt" => "portuguese", "en" => "english", "es" => "español","fr" => "french","ge" => "germany");
$config['encryption_key'] = 'privateencryptkey';
$config['useradmin'] = 'demo@demo.com';
$config['sess_cookie_name'] = md5('restrict_admin_key');
$config['sess_expiration'] = 14400;
$config['sess_save_path'] = '_sessions';
$config['application_dir'] = APPPATH;

