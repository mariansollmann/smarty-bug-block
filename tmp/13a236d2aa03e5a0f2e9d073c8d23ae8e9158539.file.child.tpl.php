<?php /* Smarty version Smarty-3.1-DEV, created on 2013-08-12 07:27:06
         compiled from "templates/child.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14374715125208d49a733bd9-16001507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a236d2aa03e5a0f2e9d073c8d23ae8e9158539' => 
    array (
      0 => 'templates/child.tpl',
      1 => 1376309708,
      2 => 'file',
    ),
    'bdcd7856b7b4df5349b5c93e563332c43708bd5a' => 
    array (
      0 => 'templates/parent.tpl',
      1 => 1376309708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14374715125208d49a733bd9-16001507',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5208d49a7a8e10_00304373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5208d49a7a8e10_00304373')) {function content_5208d49a7a8e10_00304373($_smarty_tpl) {?><?php ob_start();?><?php echo htmlspecialchars('12', ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('foo', array('bar'=>$_tmp1)); $_block_repeat=true; echo foo(array('bar'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	<?php ob_start();?><?php echo htmlspecialchars('Hello from child', ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'UTF-8', true);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo foo(array('bar'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>