<?php
    class conexion{
        private $db;

        public function conectar()
        {

            $this->db=new mysqli("localhost","root","","conedb") or die ("no fue conectada");
        return $this->db;
        
        }
    }