<div class="row"> 
    
    {if $link_pri eq ""}
            <<
    {else}
           <a href='?pagina={$link_pri}'><<</a>
    {/if}    
    
    
    |
    
    {if $link_ant eq ""}
            <
    {else}
           <a href='?pagina={$link_ant}'> < </a>
    {/if}      
    
   
    
    
    | 

    
    {if $link_pos eq ""}
            >
    {else}
           <a href='?pagina={$link_pos}'> > </a>
    {/if}     
    
    | 
    
    {if $link_ult eq ""}
            >>
    {else}
           <a href='?pagina={$link_ult}'> >> </a>
    {/if}       
    
    
    Total de Registros: {$total}
    
    
</div>
        <hr>
        