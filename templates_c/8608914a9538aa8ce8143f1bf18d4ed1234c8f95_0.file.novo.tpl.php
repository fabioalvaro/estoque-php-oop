<?php
/* Smarty version 3.1.29, created on 2016-02-12 22:07:35
  from "/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56be73c76a7fb7_73460327',
  'file_dependency' => 
  array (
    '8608914a9538aa8ce8143f1bf18d4ed1234c8f95' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl',
      1 => 1455322055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56be73c76a7fb7_73460327 ($_smarty_tpl) {
?>
<form action="cad_dep.php?acao=salvar" 
      method="post" 
      style="background-color: grey">
    <h2>Novo Departamento</h2>
    Descricao:<input type="text" name="descricao" id="descricao">
    <input type="submit" value="Inserir">
    <br>
    <br>
</form><?php }
}
