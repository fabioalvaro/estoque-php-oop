<?php
/* Smarty version 3.1.29, created on 2016-02-15 09:16:13
  from "/var/www/htdocs/estoque-php-oop/view/produtos/novo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c1b37dd69314_34675853',
  'file_dependency' => 
  array (
    '7bc3ca1415b57e83ce499f0587858445d01913a8' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/produtos/novo.tpl',
      1 => 1455534747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c1b37dd69314_34675853 ($_smarty_tpl) {
?>
<form class="form-horizontal" role="form" action="cad_prod.php?acao=salvar" 
      method="post" 
      style="background-color: grey">
     <h2>Novo produtos</h2>
    
  <div class="form-group">
    <label class="control-label col-sm-2" for="descricao">Descrição:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descricao" name="descricao"
             placeholder="Enter the description">
    </div>
  </div>
   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Inserir</button>
    </div>
  </div>
</form><?php }
}
