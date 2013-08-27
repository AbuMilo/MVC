<?php /* Smarty version Smarty-3.1.12, created on 2013-08-27 13:47:29
         compiled from "C:\wamp\www\smarty\tpl\pages\voir_clients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17391521cab0c28b695-15833648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feaa6cb792081274f7d3768c6fb3fc16fe6a0ccd' => 
    array (
      0 => 'C:\\wamp\\www\\smarty\\tpl\\pages\\voir_clients.tpl',
      1 => 1377611247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17391521cab0c28b695-15833648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_521cab0c2e7b18_19163358',
  'variables' => 
  array (
    'allclients' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cab0c2e7b18_19163358')) {function content_521cab0c2e7b18_19163358($_smarty_tpl) {?><div>
    <h2>Le contenu de client.tpl</h2>
	
	
	<?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allclients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['client']->value['NomClient'];?>
 /
		<?php echo $_smarty_tpl->tpl_vars['client']->value['RaisonSociale'];?>
 |
    <?php } ?>
	
</div><?php }} ?>