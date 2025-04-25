<?php
    class Pessoa{
        /// Atrib. da classe pessoa
        public &Nome;
        public &Pessoa;
        public &Altura;

        //metodos
        public function MostrarDados(){
            echo"Nome da Pessoa: " . $this->Nome ."<br>";
            echo"Peso da Pessoa: " . $this->Peso ."<br>";
            echo"Altura da Pessoa: " . $this->Altura ."<br>";
            echo"<br>";
        }
    }

?>