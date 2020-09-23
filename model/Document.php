<?php
 abstract class Document {
  private $nome,$endereco,$bairro,$cidade,$uf,$cep,$contato;
  function __construct($nome, $endereco, $bairro, $cidade, $uf, $cep, $contato) {
      $this->nome = $nome;
      $this->endereco = $endereco;
      $this->bairro = $bairro;
      $this->cidade = $cidade;
      $this->uf = $uf;
      $this->cep = $cep;
      $this->contato = $contato;
  }
function getNome() {
      return $this->nome;
  }

  function getEndereco() {
      return $this->endereco;
  }

  function getBairro() {
      return $this->bairro;
  }

  function getCidade() {
      return $this->cidade;
  }

  function getUf() {
      return $this->uf;
  }

  function getCep() {
      return $this->cep;
  }

  function getContato() {
      return $this->contato;
  }

  function setNome($nome): void {
      $this->nome = $nome;
  }

  function setEndereco($endereco): void {
      $this->endereco = $endereco;
  }

  function setBairro($bairro): void {
      $this->bairro = $bairro;
  }

  function setCidade($cidade): void {
      $this->cidade = $cidade;
  }

  function setUf($uf): void {
      $this->uf = $uf;
  }

  function setCep($cep): void {
      $this->cep = $cep;
  }

  function setContato($contato): void {
      $this->contato = $contato;
  }


  
}
