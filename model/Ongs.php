<?php
class Ongs extends Document {
    private $id,$cnpj,$avaliacao,$imagem_Ongs;
    public function __construct($nome, $email,$senha,$endereco, $bairro, $cidade, $uf, $cep, $contato,$cnpj,$avaliacao,$imagem) {
        parent::__construct($nome,$email,$senha, $endereco, $bairro, $cidade, $uf, $cep, $contato);
        $this->cnpj=$cnpj;
        $this->avaliacao=$avaliacao;
        $this->imagem_Ongs=$imagem;
        }
        function getImagem_Ongs() {
            return $this->imagem_Ongs;
        }

        function setImagem_Ongs($imagem_Ongs) {
            $this->imagem_Ongs = $imagem_Ongs;
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
