<?php
/* Smarty version 3.1.29, created on 2016-02-15 13:19:05
  from "/var/www/htdocs/estoque-php-oop/view/comum/paginador.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c1ec69f3b421_61249282',
  'file_dependency' => 
  array (
    '09acdaf88932e5aaa41b3f29eba45c69f7563f75' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/comum/paginador.tpl',
      1 => 1455549542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c1ec69f3b421_61249282 ($_smarty_tpl) {
?>
<div class="row"> 
    <ul class="pagination pagination-lg">
        
    <?php if ($_smarty_tpl->tpl_vars['link_pri']->value == '') {?>
            <li class="disabled"> <a href="#"> << </a> </li>
    <?php } else { ?>
            <li> <a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_pri']->value;?>
'> << </a> </li>
    <?php }?>     
    
    

    
    <?php if ($_smarty_tpl->tpl_vars['link_ant']->value == '') {?>
            <li class="disabled"><a href="#"> < </a></li>
    <?php } else { ?>
           <li><a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_ant']->value;?>
'> < </a></li>
    <?php }?>      
    
 
    
    <?php if ($_smarty_tpl->tpl_vars['link_pos']->value == '') {?>
            <li class="disabled"><a href="#">></a></li>
    <?php } else { ?>
          <li><a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_pos']->value;?>
'> > </a></li>
    <?php }?>     
    
    
    
    <?php if ($_smarty_tpl->tpl_vars['link_ult']->value == '') {?>
           <li class="disabled"><a href="#"> >></a></li>
    <?php } else { ?>
          <li> <a href='?pagina=<?php echo $_smarty_tpl->tpl_vars['link_ult']->value;?>
'> >> </a></li>
    <?php }?>    
    
    <li class="disabled"><a href="#">  Total de Registros: <?php echo $_smarty_tpl->tpl_vars['totaln']->value;?>
 </a></li>
    </ul>

    
    
</div>

        
 <?php }
}
