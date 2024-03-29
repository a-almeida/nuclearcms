<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 * CleanIgniter v1.0#
 * Configuration;
 * */

// Smarty caching enabled by default unless explicitly set to FALSE
$config['smarty.cache_status'] = FALSE;

// The path to the themes
// Default is implied root directory/themes/
$config['smarty.theme_path'] = APPPATH.'../../'.NUCLEARCORE.'/themes/';

// The default name of the theme to use (this can be overridden)
$config['smarty.theme_name'] = "default";

// Cache lifetime. Default value is 3600 seconds (1 hour) Smarty's default value
$config['smarty.cache_lifetime'] = 3600;

// Where templates are compiled
$config['smarty.compile_directory'] = APPPATH."cache/smarty/compiled/";

// Where templates are cached
$config['smarty.cache_directory'] = APPPATH."cache/smarty/cached/";

// Where Smarty configs are located
$config['smarty.config_directory'] = APPPATH."third_party/Smarty/configs/";

// Default extension of templates if one isn't supplied
$config['smarty.template_ext'] = 'tpl';

// Error reporting level to use while processing templates
$config['smarty.template_error_reporting'] = E_ALL & ~E_NOTICE;

// Debug mode turned on or off (TRUE / FALSE)
$config['smarty.smarty_debug'] = FALSE;