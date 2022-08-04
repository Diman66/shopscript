<?php /* Smarty version Smarty-3.1.14, created on 2022-08-04 12:35:01
         compiled from "C:\xampp\htdocs\wa\wa-system\webasyst\templates\actions-legacy\settings\sidebar\Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:93161860662eba0d58faa48-77069005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be1321751952ebe095100ea54442b863b32e466e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\sidebar\\Sidebar.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93161860662eba0d58faa48-77069005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    '_id' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62eba0d5900bf2_81366935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62eba0d5900bf2_81366935')) {function content_62eba0d5900bf2_81366935($_smarty_tpl) {?><div class="s-sidebar-block" id="s-sidebar-block">
    <ul class="menu-v with-icons">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <i class="icon16 ws <?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>