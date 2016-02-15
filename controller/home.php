<?php

/**
 * Description of home
 *
 * @author fabio
 */
class home extends controllerBasico {

    // index do Controller
    public function index() {
            $this->smarty->display('home/index.tpl');
        }
    }
