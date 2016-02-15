<?php
/* Smarty version 3.1.29, created on 2016-02-15 11:13:27
  from "/var/www/htdocs/estoque-php-oop/view/comum/paginador.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c1cef75522e5_55328609',
  'file_dependency' => 
  array (
    '09acdaf88932e5aaa41b3f29eba45c69f7563f75' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/comum/paginador.tpl',
      1 => 1455541985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c1cef75522e5_55328609 ($_smarty_tpl) {
?>
<div class="row"> 
    
    <?php if ($_smarty_tpl->tpl_vars['link_pri']->value == '') {?>
            <<
    <?php } else { ?>
           <a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_pri']->value;?>
'><<</a>
    <?php }?>    
    
    
    |
    
    <?php if ($_smarty_tpl->tpl_vars['link_ant']->value == '') {?>
            <
    <?php } else { ?>
           <a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_ant']->value;?>
'> < </a>
    <?php }?>      
    
   
    
    
    | 

    
    <?php if ($_smarty_tpl->tpl_vars['link_pos']->value == '') {?>
            >
    <?php } else { ?>
           <a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_pos']->value;?>
'> > </a>
    <?php }?>     
    
    | 
    
    <?php if ($_smarty_tpl->tpl_vars['link_ult']->value == '') {?>
            >>
    <?php } else { ?>
           <a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_ult']->value;?>
'> >> </a>
    <?php }?>       
    
    
    Total de Registros: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

    
    
</div>
        <hr>
        <?php }
}
