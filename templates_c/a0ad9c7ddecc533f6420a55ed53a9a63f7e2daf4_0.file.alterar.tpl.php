<?php
/* Smarty version 3.1.29, created on 2016-02-12 22:40:08
  from "/var/www/htdocs/estoque-php-oop/view/departamento/alterar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56be7b687629b2_67547774',
  'file_dependency' => 
  array (
    'a0ad9c7ddecc533f6420a55ed53a9a63f7e2daf4' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/alterar.tpl',
      1 => 1455324008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/topo.tpl' => 1,
    'file:comum/base.tpl' => 1,
  ),
),false)) {
function content_56be7b687629b2_67547774 ($_smarty_tpl) {
?>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de Departamentos</h1>                

                <div class="row">

                    <form action="cad_dep.php?acao=atualizar" 
                          method="post" 
                          style="background-color: green">
                        <h2>Alterar Departamento</h2>
                        ID: <?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
 <input type="hidden" name="id" id="id">
                        Descricao:<input type="text" name="descricao" id="descricao" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['descricao'];?>
">
                        <input type="submit" value="Alterar">
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
