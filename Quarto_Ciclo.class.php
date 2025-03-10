<?php
    class Condominio {
        private $sindico;
        private $qtd_moradores;
        private $endereco;
        private $aluguel;

        public function __construct($sindico, $qtd_moradores, $endereco, $aluguel) {
            $this->sindico = $sindico;
            $this->qtd_moradores = $qtd_moradores;
            $this->endereco = $endereco;
            $this->aluguel = $aluguel;
            print nl2br("\n"."Condomínio Registrado");
        }
        
        public function Get_sindico(){return $this->sindico;}
        public function Get_qtd_moradores(){return $this->qtd_moradores;}
        public function Get_endereco(){return $this->endereco;}
        public function Get_aluguel(){return $this->aluguel;}

        public function Set_sindico($sindico){
            $this->sindico = $sindico;
        }

        public function Set_qtd_moradores($qtd_moradores){
            $this->qtd_moradores = $qtd_moradores;
        }

        public function Set_endereco($endereco){
            $this->endereco = $endereco;
        }

        public function Set_aluguel($aluguel){
            $this->aluguel = $aluguel;
        }

        
    }

    class Padaria{
        private $nome;
        private $endereco;
        private $qtd_funcionarios;
        private $faturamentos;


        public function __construct($nome,$endereco,$qtd_funcionarios,$faturamentos){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->qtd_funcionarios = $qtd_funcionarios;
            $this->faturamentos = $faturamentos;
            print nl2br("\n"."Padaria Registrada");
        }

        public function Get_nome(){return $this->nome;}
        public function Get_endereco(){return $this->endereco;}
        public function Get_qtd_funcionarios(){return $this->qtd_funcionarios;}
        public function Get_faturamentos(){return $this->faturamentos;}

        public function Set_nome($nome){$this->nome = $nome;}
        public function Set_endereco($endereco){$this->endereco = $endereco;}
        public function Set_qtd_funcionarios($qtd_funcionarios){$this->qtd_funcionarios = $qtd_funcionarios;}
        public function Set_faturamentos($faturamentos){$this->faturamentos = $faturamentos;}
    }


?>