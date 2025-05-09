<?php
    class lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status=True;

        }
        public function Desligar(){
            $this->Status=False;
            
        }
        public function MostrarDados(){
            echo "O fabricante é: "  .$this->Fabricante . "<br>";
            echo "A tensao é: "  .$this->Tensao . "<br>";
            echo "A potencia é: " .$this->Potencia . "<br>";
            echo "A cor é: " .$this->Cor . "<br>";
            if($this->Status == 1){
                echo "O status é: Ligado! <br>";
            }
            else{
                echo "O status é: Desligado! <br>";
            }

        }
    }
?>