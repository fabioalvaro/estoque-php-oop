{include file='comum/topo.tpl' }

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Home</h1>                  
                {if $mensagem|default:"" neq "" }
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Aviso:</span>
                        {$mensagem|default:""}
                    </div>
                {/if}
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

{include file='comum/base.tpl' }
