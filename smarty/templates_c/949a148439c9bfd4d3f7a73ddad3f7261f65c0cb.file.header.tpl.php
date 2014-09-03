<?php /* Smarty version Smarty-3.1.15, created on 2014-01-22 00:03:13
         compiled from "/Applications/MAMP/htdocs/gmc/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114372620452b33bd9306af4-80405886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '949a148439c9bfd4d3f7a73ddad3f7261f65c0cb' => 
    array (
      0 => '/Applications/MAMP/htdocs/gmc/smarty/templates/header.tpl',
      1 => 1390345390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114372620452b33bd9306af4-80405886',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b33bd9310667_85585459',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b33bd9310667_85585459')) {function content_52b33bd9310667_85585459($_smarty_tpl) {?><!DOCTYPE html>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
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
          <a class="navbar-brand" href="index.php">GMC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='Start') {?>active<?php }?>"><a href="index.php">Start</a></li>
            <li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='Find Cognates') {?>active<?php }?>"><a href="cognates.php">1. Find Cognates</a></li>
            <li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='Classification') {?>active<?php }?>"><a href="organize.php">2. Classification</a></li>
            <li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='Historical Derivations') {?>active<?php }?>"><a href="historical.php">3. Historical Derivations</a></li>
            <li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='About') {?>active<?php }?>"><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
<?php }} ?>
