<?php
/* Smarty version 3.1.29, created on 2016-02-13 23:10:50
  from "/var/www/htdocs/estoque-php-oop/view/estoques/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bfd41a355ea0_07519509',
  'file_dependency' => 
  array (
    '1ceca32b1a7de05666debadb4f5d51b0e441930d' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/estoques/index.tpl',
      1 => 1455411999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/topo.tpl' => 1,
    'file:comum/base.tpl' => 1,
  ),
),false)) {
function content_56bfd41a355ea0_07519509 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de Estoques</h1>                  
                <?php if ($_smarty_tpl->tpl_vars['erro']->value != '') {?>
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Aviso:</span>
                  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['erro']->value)===null||$tmp==='' ? '' : $tmp);?>

                </div>
                <?php }?>
                <div class="row">
                    
                  <?php echo $_smarty_tpl->tpl_vars['frm_novo']->value;?>

                
                </div>
                <div class="row"><?php echo $_smarty_tpl->tpl_vars['grid']->value;?>
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
