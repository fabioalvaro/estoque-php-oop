<?php
/* Smarty version 3.1.29, created on 2016-02-13 23:12:21
  from "/var/www/htdocs/estoque-php-oop/view/estoques/novo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bfd475cd8649_23175711',
  'file_dependency' => 
  array (
    'a0e0f2147ec167ae168558aca458a248171301d3' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/estoques/novo.tpl',
      1 => 1455412339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bfd475cd8649_23175711 ($_smarty_tpl) {
?>
<form class="form-horizontal" role="form" action="cad_estoque.php?acao=salvar" 
      method="post" 
      style="background-color: grey">
     <h2>Novo Estoques</h2>
    
  <div class="form-group">
    <label class="control-label col-sm-2" for="descricao">Descrição:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Enter the description">
    </div>
  </div>
   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Inserir</button>
    </div>
  </div>
</form><?php }
}
