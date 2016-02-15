<?php
/* Smarty version 3.1.29, created on 2016-02-15 13:08:00
  from "/var/www/htdocs/estoque-php-oop/view/departamento/gridpadrao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c1e9d087b470_96526432',
  'file_dependency' => 
  array (
    'f339b25baed2aaefe6cdcff4b32287020cdd2381' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/gridpadrao.tpl',
      1 => 1455548875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c1e9d087b470_96526432 ($_smarty_tpl) {
?>
<table border='1' class="table table-hover">
    <th>id</th>
    <th>descrição</th>
    <th>ação</th>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rowinfo_0_saved_item = isset($_smarty_tpl->tpl_vars['rowinfo']) ? $_smarty_tpl->tpl_vars['rowinfo'] : false;
$__foreach_rowinfo_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
$__foreach_rowinfo_0_saved_local_item = $_smarty_tpl->tpl_vars['rowinfo'];
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['rowinfo']->value['id'];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['rowinfo']->value['descricao'];?>

        </td>
        <td>
           <a href="cad_dep.php?acao=alterar&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value['id'];?>
">Alterar</a> |
           <a href="cad_dep.php?acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value['id'];?>
">Excluir</a>
        </td>        
    </tr>
<?php
$_smarty_tpl->tpl_vars['rowinfo'] = $__foreach_rowinfo_0_saved_local_item;
}
if ($__foreach_rowinfo_0_saved_item) {
$_smarty_tpl->tpl_vars['rowinfo'] = $__foreach_rowinfo_0_saved_item;
}
if ($__foreach_rowinfo_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_rowinfo_0_saved_key;
}
?>
</table><?php }
}
