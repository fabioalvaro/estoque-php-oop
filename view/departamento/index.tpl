{include file='comum/topo.tpl' }

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de Departamentos</h1>                  
                {if $mensagem|default:"" neq "" }
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Aviso:</span>
                  {$mensagem|default:""}
                </div>
                {/if}
                <div class="row">
                    
                  {$frm_novo}
                
                </div>
                <div class="row">{$grid}</div>
                <div class="row">{$paginador}</div>


            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

{include file='comum/base.tpl' }
