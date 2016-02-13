<?php
/* Smarty version 3.1.29, created on 2016-02-11 07:43:31
  from "/var/www/htdocs/estoque-php-oop/view/departamento/gridpadrao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bc57c388f519_22130217',
  'file_dependency' => 
  array (
    'f339b25baed2aaefe6cdcff4b32287020cdd2381' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/gridpadrao.tpl',
      1 => 1455183811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bc57c388f519_22130217 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '28271900056bc57c38862c4_50512028';
?>
<table>
<?php
$_from = $_smarty_tpl->tpl_vars['mylist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td></tr>
<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_0_saved_key;
}
?>
</table>


<?php }
}
