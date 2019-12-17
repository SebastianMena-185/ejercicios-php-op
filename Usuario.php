<?php

    class Usuario{
        
        protected $pass;        
        protected $nombre;
        protected $mail;
        
        public function __construct($nombre,$mail,$pass){
            $this->pass=$pass;
            $this->mail=$mail;
            $this->nombre=$nombre;
        }
            private function encriptarPass(){
                return encriptarPass($pass);
            }

        public function saludar(){
            echo "hola"." ". $this->nombre;
        }
        /**
         * Get the value of pass
         */ 
        public function getPass()
        {
                return $this->pass;
        }

        /**
         * Set the value of pass
         *
         * @return  self
         */ 
        public function setPass($pass)
        {
                $this->pass = $pass;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }
    }


?>