<?php
/* Smarty version 3.1.29, created on 2016-02-10 22:37:52
  from "/var/www/htdocs/estoque-php-oop/view/departamento.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bbd7e05a7058_38673144',
  'file_dependency' => 
  array (
    '1b0c29464deb9a58e87c6765cd33a2845ae0bfae' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento.tpl',
      1 => 1455151047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bbd7e05a7058_38673144 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '129647188356bbd7e0598ed6_00053230';
?>

<h1>Cadastro de Departamentos</h1>
<form action="cad_estoque.php" 
      method="post" 
      style="background-color: grey">
    Descricao:<input type="text" name="descricao" id="descricao">
    <input type="submit" value="Inserir">
</form><?php }
}
