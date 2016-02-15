<table border='1' class="table table-hover">
    <th>id</th>
    <th>descrição</th>
    <th>ação</th>
{foreach $data as $num => $rowinfo}
    <tr>
        <td>
            {$rowinfo.id}
        </td>
        <td>
            {$rowinfo.descricao}
        </td>
        <td>
           <a href="cad_dep.php?acao=alterar&id={$rowinfo.id}">Alterar</a> |
           <a href="cad_dep.php?acao=excluir&id={$rowinfo.id}">Excluir</a>
        </td>        
    </tr>
{/foreach}
</table>