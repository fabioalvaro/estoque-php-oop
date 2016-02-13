<?php

/**
 * Description of departamento
 *
 * @author fabio
 */


class departamento extends controllerBasico{

    // index do Controller
    public function index() {
        // var_dump($_REQUEST);
        $acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : null;
        if ($acao == 'novo') {
            $this->novo();
        }  elseif ($acao == 'alterar') {
            $this->geraFormAlterar($_REQUEST);
        }
        elseif ($acao == 'salvar') {
            $this->salvar($_POST);
        }else {
            $pagina=1;   
            
            $html_grid = $this->geraGrid();
            $html_frm_novo = $this->geraFormNovo();
            //die('opa');
            
            $this->smarty->assign("grid", $html_grid);
            $this->smarty->assign("frm_novo", $html_frm_novo);
            $this->smarty->assign("paginador", $this->paginador($pagina,100));
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
        //var_dump($request);
        
        $model = new modelDepartamento();
        $registro = $model->getDepartamentoById($request['id']);
        
       // var_dump($registro);
        
         $this->smarty->assign("dados", $registro);
         $this->smarty->display('departamento/alterar.tpl');
    }    
    
    /**
     * Funcao de Adicionar Departamentos
     */
    
    public function salvar($postlocal) {
        $model = new modelDepartamento();
        $model->setDepartamento($postlocal);
       // var_dump($postlocal);
        //header('Location: cad_dep.php');
        
    }
    
    /**
     * Funcao de Adicionar Departamentos
     */
    
    public function editar() {
        
        //var_dump($_POST);
        

        $this->smarty->assign("msg", "editado com sucesso");

        $this->smarty->display('departamento/index.tpl');
    }    
    
    
    /**
     * 
     * @param type $dados
     * @return type
     */
    public function geraGrid() {        
        
        $myModel = new modelDepartamento();
        
        $dados = $myModel->listaCompleta();
        $this->smarty->assign('data',$dados);      
        $this->smarty->assign('tr',array('bgcolor="#eeeeee"','bgcolor="#dddddd"'));
        return $this->smarty->fetch('departamento/gridpadrao.tpl');
        
    }        

}