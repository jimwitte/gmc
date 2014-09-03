<?php /* Smarty version Smarty-3.1.15, created on 2013-12-19 20:10:14
         compiled from "/Applications/MAMP/htdocs/gmc/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18487943652b33bd92bda05-98731444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd0080894726b52b38bbf5469875f40330a593b5' => 
    array (
      0 => '/Applications/MAMP/htdocs/gmc/smarty/templates/index.tpl',
      1 => 1387480139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18487943652b33bd92bda05-98731444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b33bd9302008_96988655',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b33bd9302008_96988655')) {function content_52b33bd9302008_96988655($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
