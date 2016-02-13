<?php
/* Smarty version 3.1.29, created on 2016-02-10 22:54:38
  from "/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bbdbce18c271_11595229',
  'file_dependency' => 
  array (
    '8608914a9538aa8ce8143f1bf18d4ed1234c8f95' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl',
      1 => 1455152077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/topo.tpl' => 1,
    'file:comum/base.tpl' => 1,
  ),
),false)) {
function content_56bbdbce18c271_11595229 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '121586950656bbdbce163843_28090301';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   

<h1>Novo Departamento</h1>

<form action="cad_dep.php?acao=salvar" 
      method="post" 
      style="background-color: grey">
    Descricao:<input type="text" name="descricao" id="descricao">
    <input type="submit" value="Inserir">
</form>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
