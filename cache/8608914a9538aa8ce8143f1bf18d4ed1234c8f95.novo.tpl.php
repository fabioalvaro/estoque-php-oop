<?php
/* Smarty version 3.1.29, created on 2016-02-11 07:21:48
  from "/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bc52ac3c4433_67561635',
  'file_dependency' => 
  array (
    '8608914a9538aa8ce8143f1bf18d4ed1234c8f95' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl',
      1 => 1455152077,
      2 => 'file',
    ),
    '314f71e07edd209cfc79dac5d301a537b0284ea1' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/comum/topo.tpl',
      1 => 1455148305,
      2 => 'file',
    ),
    'b2d70018406111c86b15a99dcd912353cf9981d7' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/comum/base.tpl',
      1 => 1455151980,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56bc52ac3c4433_67561635 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Inventory Control - OOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <body>
            <div><h1><a href="home.php">PHP Inventory Control - OOP</a></h1></div>
            <hr>   

<h1>Novo Departamento</h1>

<form action="cad_dep.php?acao=salvar" 
      method="post" 
      style="background-color: grey">
    Descricao:<input type="text" name="descricao" id="descricao">
    <input type="submit" value="Inserir">
</form>



    </body>
    <br>
    <hr><img src="inventory-control-logo.jpg" width="25px">  Monkey Systems | 2016 <hr>
</html>



    <?php }
}
