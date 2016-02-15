<?php
/* Smarty version 3.1.29, created on 2016-02-15 07:29:48
  from "/var/www/htdocs/estoque-php-oop/view/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c19a8ca899b1_31500613',
  'file_dependency' => 
  array (
    'e4ead109cb719397467eaaba4225992a112c7246' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/home/index.tpl',
      1 => 1455528588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/topo.tpl' => 1,
    'file:comum/base.tpl' => 1,
  ),
),false)) {
function content_56c19a8ca899b1_31500613 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Home</h1>                  
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['mensagem']->value)===null||$tmp==='' ? '' : $tmp) != '') {?>
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Aviso:</span>
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mensagem']->value)===null||$tmp==='' ? '' : $tmp);?>

                    </div>
                <?php }?>
                <div class="row">
                    <ol type="1">
                        <li><a href="cad_estoque.php">Cadastro de Estoques</a></li>
                        <li><a href="cad_dep.php">Cadastro de Departamentos</a></li>
                        <li><a href="cad_prod.php">Cadastro de Produtos</a></li>
                        <li><a href="cad_kardex.php">Cadastro de Movimentação / Kardex</a></li>
                        <li><a href="central_relatorios.php">Central de Relatorios</a></li>
                        <li><a href="index.php">Sair</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
