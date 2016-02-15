<?php
/**
 * Description of modelProdutos
 *
 * @author fabio
 */

class modelProdutos extends modelBasico {
 
    protected $tabela = 'produtos';
    protected $id = 'id';

    public function listaCompleta() {
        // Busca os registros para o Grid

        $busca = 'SELECT * from '.$this->tabela;
        $qry_limitada = mysql_query($busca);
        $linha = mysql_fetch_assoc($qry_limitada);

        do {
            $registros[] = $linha;                         
        } while ($linha = mysql_fetch_assoc($qry_limitada));

       
        return $registros;
    }

    
    
    public function total() {
        // Total de Registros na tabela    
        $qry_total = mysql_query('SELECT count(*)as total from '.$this->tabela);
        $linha_total = mysql_fetch_assoc($qry_total); //recupera a linha
        $total_registros = $linha_total['total']; //pega o valor  
        return $total_registros;
    }

    public function setProdutos($dados) {
       

        $query_insert = "INSERT INTO ".$this->tabela."(descricao)" .
                " VALUES('" . $dados['descricao'] . "')";

        $ret = mysql_query($query_insert) or die(mysql_error());
        return $ret;
    }
    
    
    public function updateProdutos($dados) {       
        $query_update =  'update '.$this->tabela.' set descricao="'.$dados['descricao'].'" '.
                ' where id="'.$dados['id'].'"';
        $ret = mysql_query($query_update) or die(mysql_error());
        return $ret;
    }    
    
    public function deleteProdutos($dados) {       
        $query_update =  'delete from '.$this->tabela.
                ' where id="'.$dados['id'].'"';
        $ret = mysql_query($query_update) or die(mysql_error());
        return $ret;
    }       
    
    public function getProdutosById($id) {


        $query_get = "select * from " .$this->tabela.
                " where ".$this->id."=".$id;
        
        $result1 = mysql_query($query_get) or die(mysql_error());
        $result_dados = mysql_fetch_assoc($result1); //recupera a linha
        return $result_dados;
    }    

}
