<?php

/**
 * Description of controllerBasico
 *
 * @author fabio
 */
class controllerBasico {

    //put your code here

    public $smarty;

    public function __construct() {
        //Inicia sempre a sessao.
        session_start();
        /* Carregando Smarty */
        $this->smarty = new Smarty;
        $this->smarty->cache_lifetime = 120;
        $this->smarty->caching = false;
        $this->smarty->setTemplateDir('./view/');
    }
    
    public function ShowMessage($mensagem=""){
         $_SESSION['msg'] = $mensagem;
    }

/**
 * 
 * @param type $pagina pagina atual
 * @param type $totalRegistrosNaTabela Count da tabela 
 * @param type $total_reg registros a serem paginados por vez. e.g: 10 default
 * @return type HTML
 */
 
    public function paginador($pagina = 1, $totalRegistrosNaTabela = 0,$total_reg=5) {
        
        $html='';
        //maximo de registros por tela de paginacao
        $total_reg = $total_reg;
        //calcula quantas telas
        $maxpaginas = intval($totalRegistrosNaTabela / $total_reg);

        //adiciona mais uma tela em caso de divisao com quebra
        $temmod = $totalRegistrosNaTabela % $total_reg;

        if ($temmod)
            $maxpaginas = $maxpaginas + 1;

        // decide primeira
        if ($pagina == 1)
            $link_primeiro = "";
        else {
            $link_primeiro = 1;
        }

        //decide anterior 
        if ($pagina == 1)
            $link_anterior = "";
        else {
            $anterior = $pagina - 1;
            $link_anterior =  $anterior;
        }

        // decide proxima
        if ($maxpaginas == $pagina)
            $link_posterior = "";
        else {
            $link_posterior = $pagina + 1;
        }
        //decide ultima
        if ($maxpaginas == $pagina)
            $link_ultimo = "";
        else {
            $link_ultimo = $maxpaginas;
        }

        //$label_total = ' Total de Registros: ' . $totalRegistrosNaTabela;

        // Monta a barra de Navegacao        
        //$html .= $link_primeiro . "  |  " . $link_anterior . " | " . $link_posterior . " | " . $link_ultimo . " " . $label_total;
        
       
        $this->smarty->assign("link_pri", $link_primeiro);
        $this->smarty->assign("link_ant", $link_anterior);
        $this->smarty->assign("link_pos", $link_posterior);
        $this->smarty->assign("link_ult", $link_ultimo);
 
        
        $this->smarty->assign("total", $totalRegistrosNaTabela);
        $html_final = $this->smarty->fetch("comum/paginador.tpl");
        
        return  $html_final;
    }

}
