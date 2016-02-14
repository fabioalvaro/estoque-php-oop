


{include file='comum/topo.tpl' }

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de Estoques </h1>                

                <div class="row">

                    <form action="cad_estoque.php?acao=atualizar" 
                          method="post" 
                          style="background-color: green">
                        <h2>Alterar Departamento</h2>
                        ID: {$dados.id} <input type="hidden" name="id" id="id" value="{$dados.id}">
                        Descricao:<input type="text" name="descricao" id="descricao" value="{$dados.descricao}">
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

{include file='comum/base.tpl' }