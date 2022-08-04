<?php /* Smarty version Smarty-3.1.14, created on 2022-08-04 12:41:14
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\includes\checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:29157318062eba24a9aeee3-11472849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1abbda141eaa0b7ac578e42170670762df0772f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\includes\\checkoutVersionRouteMoveSetting.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29157318062eba24a9aeee3-11472849',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62eba24a9c74e3_41757301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62eba24a9c74e3_41757301')) {function content_62eba24a9c74e3_41757301($_smarty_tpl) {?>


<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $('input[name="params[checkout_version]"]').parents('.field'),
            $theme_field = $('select[name="params[theme_mobile]"]').parents('.field');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script><?php }} ?>