<?php
/* Smarty version 3.1.29, created on 2016-02-13 22:36:19
  from "/var/www/htdocs/estoque-php-oop/view/departamento/excluir.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bfcc0342c362_83644647',
  'file_dependency' => 
  array (
    'e9b1a36017202e69c9508f1b73acb29557716a3e' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/excluir.tpl',
      1 => 1455410174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/topo.tpl' => 1,
    'file:comum/base.tpl' => 1,
  ),
),false)) {
function content_56bfcc0342c362_83644647 ($_smarty_tpl) {
?>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de Departamentos </h1>                

                <div class="row">

                    <form action="cad_dep.php?acao=excluirdefinitivo" 
                          method="post" 
                          style="background-color: yellow">
                        <h2>Excluir</h2>
                        Tem certeza que deseja excluir o registro <?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
 ?
                        
                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
">    
                        <button type="submit" class="btn btn-primary">SIM</button>
                        
                        <a href="cad_dep.php" class="btn btn-primary active" role="button">NAO</a>
                        <br>
                        <br>
                    </form>

                </div>



            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
