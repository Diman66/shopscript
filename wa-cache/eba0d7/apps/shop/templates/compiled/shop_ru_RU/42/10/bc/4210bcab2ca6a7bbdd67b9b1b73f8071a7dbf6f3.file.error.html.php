<?php /* Smarty version Smarty-3.1.14, created on 2022-08-04 12:44:13
         compiled from "C:\xampp\htdocs\wa\wa-data\public\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:98073080262eba2fdd37b54-69973225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4210bcab2ca6a7bbdd67b9b1b73f8071a7dbf6f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-data\\public\\site\\themes\\default\\error.html',
      1 => 1659601838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98073080262eba2fdd37b54-69973225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62eba2fdd611e7_23717927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62eba2fdd611e7_23717927')) {function content_62eba2fdd611e7_23717927($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>