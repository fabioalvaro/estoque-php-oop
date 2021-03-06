<?php

/**
 * Description of departamento
 *
 * @author fabio
 */
class departamento extends controllerBasico {

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
        } elseif ($acao == 'atualizar') {
            $this->atualizar($_REQUEST);
        } elseif ($acao == 'salvar') {
            $this->salvar($_POST);
        } elseif ($acao == null || $acao == 'msg') {
            
            // verifico se veio por get o numero da pagina
            $_SESSION['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : null;
            $pagina = $_SESSION['pagina'];

            //Grid Paginado
            $html_grid_paginado = $this->geraGridpaginado();
            $this->smarty->assign("grid", $html_grid_paginado);
            
            //Paginador
            $model = new modelDepartamento();
            $total_registros_da_tabela = $model->total();
            $html_paginador = $this->paginador($pagina, $total_registros_da_tabela, $this->paginacao_max);
            $this->smarty->assign("paginador", $html_paginador);            
            
            //Form Novo
            $html_frm_novo = $this->geraFormNovo();
            $this->smarty->assign("frm_novo", $html_frm_novo);
            
            //Sistema de Mensagens
            if ($acao == null) { unset($_SESSION['msg']);}
            $msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
            $this->smarty->assign("mensagem", $msg);           
            
            //Chama o Template depois de ter passado as variaveis
            $this->smarty->display('departamento/index.tpl');
        }
    }

    /**
     * Funcao de Adicionar Departamentos
     */
    public function geraFormNovo() {
        return $this->smarty->fetch('departamento/novo.tpl');
    }

    /**
     * Funcao de Adicionar Departamentos
     */
    public function geraFormAlterar($request) {

        $model = new modelDepartamento();
        $registro = $model->getDepartamentoById($request['id']);

        $this->smarty->assign("dados", $registro);
        $this->smarty->display('departamento/alterar.tpl');
    }

    /**
     * Funcao de Adicionar Departamentos
     */
    public function geraFormExcluir($request) {
        //var_dump($request);

        $model = new modelDepartamento();
        $registro = $model->getDepartamentoById($request['id']);

        $this->smarty->assign("dados", $registro);
        $this->smarty->display('departamento/excluir.tpl');
    }

    /**
     * Funcao de Adicionar Departamentos
     */
    public function salvar($postlocal) {
        //valida registro
        $okvalidacao = $this->validaRegistro($postlocal);

        if ($okvalidacao) {
            $model = new modelDepartamento();
            $model->setDepartamento($postlocal);
            header('Location: cad_dep.php');
        }
    }

    public function atualizar($postlocal) {
        $model = new modelDepartamento();
        $model->updateDepartamento($postlocal);
        $this->ShowMessage("Registro Alterado com sucesso");
        header('Location: cad_dep.php?acao=msg');
    }

    public function remover($postlocal) {
        $model = new modelDepartamento();
        $model->deleteDepartamento($postlocal);
        header('Location: cad_dep.php');
    }

    /**
     * 
     * @param type $dados
     * @return type
     */
    public function geraGrid() {

        $myModel = new modelDepartamento();

        $dados = $myModel->listaCompleta();
        $this->smarty->assign('data', $dados);        
        return $this->smarty->fetch('departamento/gridpadrao.tpl');
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
     * 
     * @param type $dados
     * @return type
     */
    public function validaRegistro($registro) {
        $ok = true;
        $msg_erro = "";

        if ($registro['descricao'] === "") {
            $msg_erro.="O Campo Descrição é obrigatorio! ";
        }

        if ($msg_erro != "") {
            $ok = false;
            $_SESSION['msg'] = $msg_erro . " Verifique os dados.";
            header('Location: cad_dep.php?acao=msg');
        }
        return $ok;
    }

}
