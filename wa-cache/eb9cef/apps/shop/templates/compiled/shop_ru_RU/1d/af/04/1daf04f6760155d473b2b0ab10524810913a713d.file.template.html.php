<?php /* Smarty version Smarty-3.1.14, created on 2022-08-04 12:18:35
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\lib\config\hints\template.html" */ ?>
<?php /*%%SmartyHeaderCode:119572652462eb9cfbc1b160-98057466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1daf04f6760155d473b2b0ab10524810913a713d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\lib\\config\\hints\\template.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119572652462eb9cfbc1b160-98057466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62eb9cfbc1fb96_83746391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62eb9cfbc1fb96_83746391')) {function content_62eb9cfbc1fb96_83746391($_smarty_tpl) {?><span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>
<br/><?php if ($_smarty_tpl->tpl_vars['hint']->value['link']){?><object type="lol/wut"><a href="<?php echo $_smarty_tpl->tpl_vars['hint']->value['link'];?>
" target="_blank" class="s-hint-link">Подробнее</a></object><?php }?></span></span>
<?php }} ?>