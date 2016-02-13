<?php
/* Smarty version 3.1.29, created on 2016-02-12 22:00:48
  from "/var/www/htdocs/estoque-php-oop/view/comum/topo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56be7230dbf478_23440713',
  'file_dependency' => 
  array (
    '314f71e07edd209cfc79dac5d301a537b0284ea1' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/comum/topo.tpl',
      1 => 1455321648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56be7230dbf478_23440713 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>OOP Inventory Control </title>
        <!-- Bootstrap Core CSS -->
        <link href="files/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="files/css/simple-sidebar.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="home.php">
                            OOP Inventory Control 
                        </a>
                    </li>
                    <li><a href="cad_estoque.php">Cadastro de Estoques</a></li>
                    <li><a href="cad_dep.php">Cadastro de Departamentos</a></li>
                    <li><a href="cad_prod.php">Cadastro de produtos</a></li>
                    <li><a href="cad_kardex.php">Cadastro de Movimentação</a></li>
                    <li><a href="central_relatorios.php">Central de Relatorios</a></li>
                    <li><a href="index.php">Sair</a></li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper --><?php }
}
