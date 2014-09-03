<?php

/**
 * TB media application functions & classes
 *
 * PHP Version 5.3.6
 *
 * @author Jim Witte <jim@thunderingbison.com>
 * @date November 12, 2013
 *
 */

/**
 * get file system path of application
 *
 * @return string : the path as a string
 *
 */
function getProjectPath()
{
    return realpath(dirname(__FILE__));
}

/**
 * get relative web root
 *
 * @return string : the relative root
 */
function getRelativeRoot()
{
    $dr = $_SERVER['DOCUMENT_ROOT'];
    $cwd = getcwd();
    $returnvalue =  str_replace($dr, '', $cwd);
    if ($returnvalue = '') {
       return "/";
    } else {
       return $returnvalue . "/";
    }
}

define("APPLICATION_PATH", getProjectPath());
define("SMARTYLIB_PATH", realpath(APPLICATION_PATH . "/smarty-lib/libs/Smarty.class.php"));
define("WEBROOT", getRelativeRoot());

require SMARTYLIB_PATH;
$smarty = new Smarty();

$smarty->setTemplateDir(APPLICATION_PATH . "/smarty/templates");
$smarty->setCompileDir(APPLICATION_PATH . "/smarty/templates_c");
$smarty->setCacheDir(APPLICATION_PATH . "/smarty/cache");
$smarty->setConfigDir(APPLICATION_PATH . "/smarty/configs");

?>