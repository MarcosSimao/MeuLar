<?php
require_once '../config.php';
class Select  extends PDO{
  private $connection;
   public function __construct() {
     $this->connection=Conexao::conectBanco();
       } 
       
   public function selectAnimals($id){
        $sql="SELECT * FROM animais WHERE id_Ongs=:ID";
      try{
        $sqls= Conexao::conectBanco()->prepare($sql);
        $param=array(
           ":ID"=>$id
        );
      $sqls->execute($param);
      $arr = [];
       $list =[];
       
      while($exib = $sqls->fetch(PDO::FETCH_ASSOC)){
          $animais = new Animals($exib['nome'],$exib['porte'],$exib['sexo'],$exib['imagem_animal']);
        $animais->setId($exib['id']);
       $animais->setCodigo($exib['id_Ongs']);
        $arr['id'] = $animais->getId();
          $arr['codigo'] =$animais->getCodigo();
        $arr['Nome'] = $animais->getNome();
         $arr['Porte'] =$animais->getPorte();
         $arr['Sexo'] =$animais->getSexo();
         $arr['Foto'] =$animais->getImg_animais();
         $list[]=$arr;
         unset($arr);
         $arr = [];
         
        }
        
      return $list;
    
     } catch (PDOException $ex) {
         return '';
     }
    }
    public function ListarOngs($uf,$cidade){
       $sql="SELECT * FROM ongs WHERE uf=:UF and cidade=:CIDADE and disponivel=true";
      try{
        $sqls= Conexao::conectBanco()->prepare($sql);
        $param=array(
           ":UF"=>$uf,
            ":CIDADE"=>$cidade
        );
      $sqls->execute($param);
      $arr = [];
       $list =[];
       $ongs = new Ongs("", "", "","","","","", "", "","","");
      while($exib = $sqls->fetch(PDO::FETCH_ASSOC)){
          $ongs->setId($exib['id']);
          $ongs->setNome($exib['nome']);
          $ongs->setEndereco($exib['endereco']);
          $ongs->setBairro($exib['bairro']);
          $ongs->setContato($exib['contato']);
          $ongs->setImagem_Ongs($exib['imagem_ongs']);
          
          $arr["id"]=$ongs->getId();
            $arr["nome"]=$ongs->getNome();
              $arr["endereco"]=$ongs->getEndereco();
                $arr["bairro"]=$ongs->getBairro();
                  $arr["contato"]=$ongs->getContato();
                    $arr["imagem"]=$ongs->getImagem_Ongs();
                    $arr["disponivel"]=$exib['disponivel'];
       
        
        $list[]=$arr;
         unset($arr);
         $arr = [];
         
        }
        
      return $list;
    
     } catch (PDOException $ex) {
         return '';
     }  
    }
  public function listrarHomer($uf,$cidade){
      $sql="SELECT * FROM lartemporario WHERE uf=:UF and cidade=:CIDADE and disponivel=true";
      try{
        $sqls= Conexao::conectBanco()->prepare($sql);
        $param=array(
           ":UF"=>$uf,
            ":CIDADE"=>$cidade
        );
      $sqls->execute($param);
      $arr = [];
       $list =[];
       $homer = new TemporaryHomer("", "", "","","","","", "", "","","");
      while($exib = $sqls->fetch(PDO::FETCH_ASSOC)){
          $homer->setId($exib['id']);
          $homer->setNome($exib['nome']);
          $homer->setEndereco($exib['endereco']);
          $homer->setBairro($exib['bairro']);
          $homer->setContato($exib['contato']);
          $homer->setImgComprovante($exib['imagem_comproResidencia']);
          
          $arr["id"]=$homer->getId();
            $arr["nome"]=$homer->getNome();
              $arr["endereco"]=$homer->getEndereco();
                $arr["bairro"]=$homer->getBairro();
                  $arr["contato"]=$homer->getContato();
                    $arr["imagem"]=$homer->getImgComprovante();
       
        
        $list[]=$arr;
         unset($arr);
         $arr = [];
         
        }
        
      return $list;
    
     } catch (PDOException $ex) {
         return '';
     } 
  }  
}
