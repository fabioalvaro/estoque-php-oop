<?php

/**
 * Description of estroques
 *
 * @author fabio
 */
class estoques extends controllerBasico {
    private $paginacao_max = 3; // Registro as serem exibidos por página

    // index do Controller
    public function index() {
        $acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : null;
        if ($acao == 'alterar') {
            $this->geraFormAlterar($_REQUEST);
        } elseif ($acao == 'excluir') {
            $this->geraFormExcluir($_REQUEST);
        } elseif ($acao == 'excluirdefinitivo') {
            $this->remover($_REQUEST);
        }elseif ($acao == 'atualizar') {
            $this->atualizar($_REQUEST);
        } elseif ($acao == 'salvar') {
            $this->salvar($_POST);
        } elseif ($acao == null || $acao == 'msg') {
           
             // verifico se veio por get o numero da pagina
            $_SESSION['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : null;
            $pagina = $_SESSION['pagina'];

            $html_grid = $this->geraGrid();
            $html_frm_novo = $this->geraFormNovo();
            //Sistema de Mensagens
            if ($acao==null){ unset($_SESSION['msg']);}
            
            $msg= isset($_SESSION['msg'])?$_SESSION['msg']:"";
            
            $this->smarty->assign("mensagem", $msg);     
            
            //Grid Paginado
            $html_grid_paginado = $this->geraGridpaginado();
            $this->smarty->assign("grid", $html_grid_paginado);
            
            //Paginador
            $model = new modelEstoques();
            $total_registros_da_tabela = $model->total();
            $html_paginador = $this->paginador($pagina, $total_registros_da_tabela, $this->paginacao_max);
            $this->smarty->assign("paginador", $html_paginador);             
          
           
            
            $this->smarty->assign("frm_novo", $html_frm_novo);

            $this->smarty->display('estoques/index.tpl');
        }
    }

    /**
     * Funcao de Adicionar Estoques
     */
    public function geraFormNovo() {
        return $this->smarty->fetch('estoques/novo.tpl');
    }

    /**
     * Funcao de Adicionar Estoques
     */
    public function geraFormAlterar($request) {
        

        $model = new modelEstoques();
        $registro = $model->getEstoquesById($request['id']);

        // var_dump($registro);

        $this->smarty->assign("dados", $registro);
        $this->smarty->display('estoques/alterar.tpl');
    }

    /**
     * Funcao de Adicionar Estoques
     */
    public function geraFormExcluir($request) {
        
        $model = new modelEstoques();
        $registro = $model->getEstoquesById($request['id']);



        $this->smarty->assign("dados", $registro);
        $this->smarty->display('estoques/excluir.tpl');
    }

    /**
     * Funcao de Adicionar Estoques
     */
    public function salvar($postlocal) {
        //valida registro vindo pelo post
        $okvalidacao = $this->validaRegistro($postlocal);

        if ($okvalidacao) {
            //Persistir o registro no banco
            $model = new modelEstoques();
            $model->setEstoques($postlocal);
            header('Location: cad_estoque.php');
        }
    }
    
    /**
     * Recebe o post e atualiza o registro no banco de dados
     * @param type $postlocal POST do HTTP
     */
    public function atualizar($postlocal) {
        $model = new modelEstoques();
        $model->updateEstoques($postlocal);
        $this->ShowMessage("Registro Alterado com sucesso");      
        header('Location: cad_estoque.php?acao=msg');
    }

    /**
     * Remove o registro de banco de dados
     * @param type $postlocal $_POST
     */
    public function remover($postlocal) {
        $model = new modelEstoques();
        $model->deleteEstoques($postlocal);
        header('Location: cad_estoque.php');
    }



    /**
     * Retorna um html de uma tabela baseada em um conjunto de dataset
     * da entidade principal
     * @return type HTML
     */
    public function geraGrid() {

        $myModel = new modelEstoques();

        $dados = $myModel->listaCompleta();
        $this->smarty->assign('data', $dados);        
        return $this->smarty->fetch('estoques/gridpadrao.tpl');
    }
    
    /**
     * 
     * @param type $dados
     * @return type
     */
    public function geraGridpaginado() {
        $total_reg = $this->paginacao_max; // número de registros por página
        $pagina = $_SESSION['pagina'];
        //Current Page / Pagina Atual
        if (!$pagina) {
            $pc = "1";
        } else {
            $pc = $pagina;
        }
        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        //Busca os registros para o Grid
        $myModel = new modelDepartamento();
        $dados_paginados = $myModel->listaCompletaPaginada($inicio, $total_reg);
        // Total de Registros na tabela 
        $this->smarty->assign('data', $dados_paginados);
        return $this->smarty->fetch('departamento/gridpadrao.tpl');
    }    

    /**
     * Funcao que valida os campos enviados pelo metodo de post
     * 
     * @param type $registro variavel $_POST ou $_REQUEST
     * @return boolean verdadeiro tudo ok
     */
    public function validaRegistro($registro) {
        $ok = true;
        $msg_erro="";
        //valida a descricao
        if ($registro['descricao']==="") {$msg_erro.="O Campo Descrição é obrigatorio! ";} 
        
        if($msg_erro!="") {
            $ok = false;
            $_SESSION['msg'] = $msg_erro. " Verifique os dados.";
            header('Location: cad_estoque.php?acao=msg');
        }
        return $ok;
    }

}
