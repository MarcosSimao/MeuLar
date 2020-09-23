<?php
class TemporaryHomer extends Document {
    private $id,$cpf,$imgComprovante,$avaliacao;
    public function __construct($nome, $endereco, $bairro, $cidade, $uf, $cep, $contato,$cpf,$img,$avaliacao) {
        parent::__construct($nome, $endereco, $bairro, $cidade, $uf, $cep, $contato);
        $this->cpf=$cpf;
        $this->avaliacao=$avaliacao;
        $this->imgComprovante=$img;
        }
        function getCpf() {
            return $this->cpf;
        }

        function getImgComprovante() {
            return $this->imgComprovante;
        }

        function getAvaliacao() {
            return $this->avaliacao;
        }

        function setCpf($cpf): void {
            $this->cpf = $cpf;
        }

        function setImgComprovante($imgComprovante): void {
            $this->imgComprovante = $imgComprovante;
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
