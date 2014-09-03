<?php /* Smarty version Smarty-3.1.15, created on 2013-12-10 15:51:40
         compiled from "/home/jwitte/public/bison.jimwitte.net/public/gmc/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80089267852a78a05511592-27381688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77499bac8d72af2d3f23b792f574acea85f8a183' => 
    array (
      0 => '/home/jwitte/public/bison.jimwitte.net/public/gmc/smarty/templates/header.tpl',
      1 => 1386712274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80089267852a78a05511592-27381688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a78a0551eb71_81672544',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a78a0551eb71_81672544')) {function content_52a78a0551eb71_81672544($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GMC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Start</a></li>
            <li><a href="cognates.php">Find Cognates</a></li>
            <li><a href="#">Classification</a></li>
            <li><a href="#">Historical Derivations</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
<?php }} ?>
