<div class="row"> 
    <ul class="pagination pagination-lg">
        
    {if $link_pri eq ""}
            <li class="disabled"> <a href="#"> << </a> </li>
    {else}
            <li> <a href='?pagina={$link_pri}'> << </a> </li>
    {/if}     
    
    

    
    {if $link_ant eq ""}
            <li class="disabled"><a href="#"> < </a></li>
    {else}
           <li><a href='?pagina={$link_ant}'> < </a></li>
    {/if}      
    
 
    
    {if $link_pos eq ""}
            <li class="disabled"><a href="#">></a></li>
    {else}
          <li><a href='?pagina={$link_pos}'> > </a></li>
    {/if}     
    
    
    
    {if $link_ult eq ""}
           <li class="disabled"><a href="#"> >></a></li>
    {else}
          <li> <a href='?pagina={$link_ult}'> >> </a></li>
    {/if}    
    
    <li class="disabled"><a href="#">  Total de Registros: {$totaln} </a></li>
    </ul>

    
    
</div>

        
 