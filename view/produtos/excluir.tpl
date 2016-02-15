{include file='comum/topo.tpl' }
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de produtos </h1>                

                <div class="row">

                    <form action="cad_prod.php?acao=excluirdefinitivo" 
                          method="post" 
                          style="background-color: yellow">
                        <h2>Excluir</h2>
                        Tem certeza que deseja excluir o registro {$dados.id} ?
                        
                        <input type="hidden" name="id" id="id" value="{$dados.id}">    
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
{include file='comum/base.tpl' }