<?php
defined('INDEXMODULE') OR exit('No direct script access allowed');
if (!defined('ADMINFOLDER')) {define('ADMINFOLDER', 'admin-nuclear');}
if (!defined('ADMINLINK')) {define('ADMINLINK', 'admin');}
$application= array_reverse(explode(DIRECTORY_SEPARATOR,$_SERVER['SCRIPT_FILENAME']));
if(count($application)==1){$application= array_reverse(explode('/',$_SERVER['SCRIPT_FILENAME']));}
unset($application[0]);
$request= explode('/',$_SERVER['REQUEST_URI']);
$uri =array();
$public_request =array();
$public=array();
$www='';
foreach($request as $key=>$val){
	if($val!=$application[1]){
		$public_request[$key]=$val;unset($request[$key]); 
	}
	else{
		$www=$val;unset($request[$key]);$uri=array_reverse(array_reverse($request));
		$public = array_reverse(array_reverse($public_request));
	}
}


if($uri[0]==ADMINLINK){header('Location: '.implode('/',$public).'/'.$www.'/'.ADMINFOLDER.'/user/login');exit();}
if($www==ADMINFOLDER){define('PUBLICPATH', implode('/',$public).'/');}

else{define('PUBLICPATH', implode('/',$public).'/'.$www.'/');}

define('MODULECALL', $www);
define('ROOTPATH',  implode('/',$public).'/'.$www.'/');
/****************************************************/
$application_folder = PRIVATEPATH.'_nuclear/'.NUCLEARCORE.'/';
$system_path = PRIVATEPATH.'_nuclear/_system/ci_system/';
$nuclear_path = PRIVATEPATH.'_nuclear/_system/';
$view_folder =  'views/';
define('SYSTEM', str_replace('\\', DIRECTORY_SEPARATOR, $system_path));
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : VERSION);
/****************************************************/




switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

/*
 *---------------------------------------------------------------
 * CONFIG APPLICATION
 *---------------------------------------------------------------
 *
 */
	
	// $routing['directory'] = '';
	// $routing['controller'] = '';
	// $routing['function']	= '';
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// VERIFY SYSTEM AND APPLICATION FOLDERS
// --------------------------------------------------------------------
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($nuclear_path)) !== FALSE)
	{
		$nuclear_path = $_temp.'/';
	}
	else
	{
		$nuclear_path = rtrim($nuclear_path, '/').'/';
	}
	
	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.'/';
	}
	else
	{
		$system_path = rtrim($system_path, '/').'/';
	}

	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 * DEFINE PATHS
 * -------------------------------------------------------------------
 */
 

	define('NUCLEARPATH', str_replace('\\', '/', $nuclear_path));
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
	define('BASEPATH', str_replace('\\', '/', $system_path));
	define('FCPATH', dirname(__FILE__).'/');
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
		{
			header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
			echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
			exit(3); // EXIT_CONFIG
		}
		define('APPPATH', BASEPATH.$application_folder.DIRECTORY_SEPARATOR);
	}
	if ( ! is_dir($view_folder))
	{
		if ( ! empty($view_folder) && is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
		{
			$view_folder = APPPATH.$view_folder;
		}
		elseif ( ! is_dir(APPPATH.'template'.DIRECTORY_SEPARATOR))
		{
			header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
			echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
			exit(3); // EXIT_CONFIG
		}
		else
		{
			$view_folder = APPPATH.'template';
		}
	}
	if (($_temp = realpath($view_folder)) !== FALSE)
	{
		$view_folder = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		$view_folder = rtrim($view_folder, '/\\').DIRECTORY_SEPARATOR;
	}
	define('MODULESPATH',str_replace('themes','modules',$view_folder));
	define('VIEWPATH', $view_folder);

/*
 * --------------------------------------------------------------------
 * START APPLICATION
 * --------------------------------------------------------------------
 */
require_once BASEPATH.'core/CodeIgniter.php';
