<table border='1' class="table table-hover">
{foreach $data as $num => $rowinfo}
    <tr>
        <td>
            {$rowinfo.id}
        </td>
        <td>
            {$rowinfo.descricao}
        </td>
        <td>
           <a href="cad_estoque.php?acao=alterar&id={$rowinfo.id}">Alterar</a> |
           <a href="cad_estoque.php?acao=excluir&id={$rowinfo.id}">Excluir</a>
        </td>        
    </tr>
{/foreach}
</table>