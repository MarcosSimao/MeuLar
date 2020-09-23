<?php
class Ongs extends Document {
    private $id,$cnpj,$avaliacao;
    public function __construct($nome, $endereco, $bairro, $cidade, $uf, $cep, $contato,$cnpj,$avaliacao) {
        parent::__construct($nome, $endereco, $bairro, $cidade, $uf, $cep, $contato);
        $this->cnpj=$cnpj;
        $this->avaliacao=$avaliacao;
        }
        function getCnpj() {
            return $this->cnpj;
        }

        function getAvaliacao() {
            return $this->avaliacao;
        }

        function setCnpj($cnpj): void {
            $this->cnpj = $cnpj;
        }

        function setAvaliacao($avaliacao): void {
            $this->avaliacao = $avaliacao;
        }
        function getId() {
            return $this->id;
        }

        function setId($id): void {
            $this->id = $id;
        }




}
