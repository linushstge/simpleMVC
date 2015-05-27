<?php /* Smarty version 3.1.25-dev/2, created on 2015-05-27 22:50:06
         compiled from "app/templates/default/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210324655255663c0e526c89_09022936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e3b0fafa8e7676572f5c3f1214e0bc9ddb6521b' => 
    array (
      0 => 'app/templates/default/index.tpl',
      1 => 1432763405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210324655255663c0e526c89_09022936',
  'variables' => 
  array (
    'title' => 0,
    'welcome_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/2',
  'unifunc' => 'content_55663c0e57ebb3_61552071',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55663c0e57ebb3_61552071')) {
function content_55663c0e57ebb3_61552071 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210324655255663c0e526c89_09022936';
?>
<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

</head>
<body>

<div class="page-header">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div>

<p><?php echo $_smarty_tpl->tpl_vars['welcome_message']->value;?>
</p>

<a class="btn btn-md btn-success" href="subpage">
    Open Subpage
</a>

</body>
</html><?php }
}
?>