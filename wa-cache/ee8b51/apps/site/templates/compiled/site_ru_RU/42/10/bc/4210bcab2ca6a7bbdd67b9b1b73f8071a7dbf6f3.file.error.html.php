<?php /* Smarty version Smarty-3.1.14, created on 2022-08-06 17:50:03
         compiled from "C:\xampp\htdocs\wa\wa-data\public\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:169870834562ee8dabc47ff6-03619842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '169870834562ee8dabc47ff6-03619842',
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
  'unifunc' => 'content_62ee8dabc8b458_22078117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ee8dabc8b458_22078117')) {function content_62ee8dabc8b458_22078117($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>