<?php
/* Smarty version 3.1.29, created on 2016-02-12 22:00:26
  from "/var/www/htdocs/estoque-php-oop/view/comum/base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56be721a9d2cf9_46134835',
  'file_dependency' => 
  array (
    'b2d70018406111c86b15a99dcd912353cf9981d7' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/comum/base.tpl',
      1 => 1455321626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56be721a9d2cf9_46134835 ($_smarty_tpl) {
?>
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="files/js/jquery.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap Core JavaScript -->
        <?php echo '<script'; ?>
 src="files/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- Menu Toggle Script -->
        <?php echo '<script'; ?>
>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
