<?php
class Cliente
{
        private $nome;
        private $RG;
        private $telefone;
        private $email;

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getRG()
        {
                return $this->RG;
        }

        public function setRG($RG): self
        {
                $this->RG = $RG;

                return $this;
        }

        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone): self
        {
                $this->telefone = $telefone;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }
}
