<?php
/**
 * Description of modelDepartamento
 *
 * @author fabio
 */

class modelDepartamento extends modelBasico {
 
    protected $tabela = 'departamentos';
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

    public function setDepartamento($dados) {
        //var_dump($dados);        die('opa');

        $query_insert = "INSERT INTO ".$this->tabela."(descricao)" .
                " VALUES('" . $dados['descricao'] . "')";

        $ret = mysql_query($query_insert) or die(mysql_error());
        return $ret;
    }
    
    
    public function updateDepartamento($dados) {       
        $query_update =  'update '.$this->tabela.' set descricao="'.$dados['descricao'].'" '.
                ' where id="'.$dados['id'].'"';
        $ret = mysql_query($query_update) or die(mysql_error());
        return $ret;
    }    
    
    public function deleteDepartamento($dados) {       
        $query_update =  'delete from '.$this->tabela.
                ' where id="'.$dados['id'].'"';
        $ret = mysql_query($query_update) or die(mysql_error());
        return $ret;
    }       
    
    public function getDepartamentoById($id) {


        $query_get = "select * from " .$this->tabela.
                " where ".$this->id."=".$id;
        
        //echo $query_get;
        //die();

        $result1 = mysql_query($query_get) or die(mysql_error());
        $result_dados = mysql_fetch_assoc($result1); //recupera a linha
        return $result_dados;
    }    

}