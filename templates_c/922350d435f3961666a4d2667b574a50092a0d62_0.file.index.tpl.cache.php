<?php
/* Smarty version 3.1.29, created on 2016-02-11 07:24:51
  from "/var/www/htdocs/estoque-php-oop/view/departamento/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bc5363c4bb62_96954822',
  'file_dependency' => 
  array (
    '922350d435f3961666a4d2667b574a50092a0d62' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/index.tpl',
      1 => 1455182691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bc5363c4bb62_96954822 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '101633510056bc5363c3f3b2_94096470';
?>
<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value)===null||$tmp==='' ? "no title" : $tmp);?>
</p>
<p><a href="cad_dep.php?acao=novo">Novo</a></p>

<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['grid']->value)===null||$tmp==='' ? "no title" : $tmp);?>
</p>
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginador']->value)===null||$tmp==='' ? "no title" : $tmp);?>
</p>

</body>
</html><?php }
}
