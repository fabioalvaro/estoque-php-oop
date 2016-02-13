<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelClass
 *
 * @author fabio
 */
class modelBasico {
    private $con;    
    protected $db;
    protected $host;    
    protected $user;
    protected $pass;
   

    public function __construct() {
        $this->host = "localhost";
        $this->db = "fabioalvaro13_dev";
        $this->user = "root";
        $this->pass = "toor";
        $this->con = mysql_connect($this->host, $this->user, $this->pass)
                or trigger_error(mysql_error(), E_USER_ERROR);
        mysql_select_db($this->db, $this->con);        
    }

}



?>
