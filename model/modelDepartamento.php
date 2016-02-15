<?php
/**
 * Classe de Persistencia e busca de registros no 
 * banco de dados referente a Entidade Departamento
 *
 * @author fabio
 */

class modelDepartamento extends modelBasico {
 
    protected $tabela = 'departamentos';
    protected $id = 'id';
    
    /**
     * Retorna Todos os registros da Entidade 
     * 
     * @return type $array
     */
    public function listaCompleta() {
        // Busca os registros para o Grid

        $busca = 'SELECT * FROM '.$this->tabela;
        $qry_limitada = mysql_query($busca);
        $linha = mysql_fetch_assoc($qry_limitada);

        do {
            $registros[] = $linha;                         
        } while ($linha = mysql_fetch_assoc($qry_limitada));

       
        return $registros;
    }
    
    /**
     * Retorna um conjunto limitado de dados (Dataset)
     * @param integer $inicio registro inicial
     * @param integer $total_reg total de registros a serem exibidos padrao =10
     * @return array dataset limitado
     */
    public function listaCompletaPaginada($inicio,$total_reg=10) {

        $busca = 'SELECT * FROM '.$this->tabela. ' LIMIT '.$inicio.','.$total_reg;
      
        $qry_limitada = mysql_query($busca);
        $linha = mysql_fetch_assoc($qry_limitada);

        do {
            $registros[] = $linha;                         
        } while ($linha = mysql_fetch_assoc($qry_limitada));

       
        return $registros;
    }    
    
    /**
     * Retorna o Total de Registro da Entidade
     * @return integer Total de Registro validos na entidade
     */
    public function total() {
        // Total de Registros na tabela    
        $qry_total = mysql_query('SELECT count(*)as total FROM '.$this->tabela);
        $linha_total = mysql_fetch_assoc($qry_total); //recupera a linha
        $total_registros = $linha_total['total']; //pega o valor  
        return $total_registros;
    }

    /**
     * Persiste uma entidade no banco dados
     * @param array $dados dados a serem persistidos
     * @return boolean em caso de sucesso ou nao
     */
    public function setDepartamento($dados) {        

        $query_insert = "INSERT INTO ".$this->tabela."(descricao)" .
                " VALUES('" . $dados['descricao'] . "')";

        $ret = mysql_query($query_insert) or die(mysql_error());
        return $ret;
    }
    
    /**
     * Atualiza os campos baseados no id informado no $dados
     * @param array $dados os campos a serem persistidos
     * @return boolean  em caso de sucesso ou nao
     */
    public function updateDepartamento($dados) {       
        $query_update =  'update '.$this->tabela.' set descricao="'.$dados['descricao'].'" '.
                ' where id="'.$dados['id'].'"';
        $ret = mysql_query($query_update) or die(mysql_error());
        return $ret;
    }    
    
    /**
     * Remove um registro do banco de dados pelo id informado no $dados
     * @param ARRAY $dados
     * @return BOOLEAN VERDADEIRO EM CASO DE SUCESSO
     */
    public function deleteDepartamento($dados) {       
        $query_update =  'delete from '.$this->tabela.
                ' where id="'.$dados['id'].'"';
        $ret = mysql_query($query_update) or die(mysql_error());
        return $ret;
    }       
    
    /**
     * Retorna um array com os dados de uma Entidade especifica
     * @param integer $id a chave do registro
     * @return array com os dados da Entidade
     */
    public function getDepartamentoById($id) {
        $query_get = "select * from " .$this->tabela.
                " where ".$this->id."=".$id;                
        $result1 = mysql_query($query_get) or die(mysql_error());
        $result_dados = mysql_fetch_assoc($result1); //recupera a linha
        return $result_dados;
    }    

}
