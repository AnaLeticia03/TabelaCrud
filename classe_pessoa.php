<?php
Class Pessoa{
     
    private $pdo;
    //conexão com banco de dados   
    public function __construct()
    {
        try{
            $this->pdo = new PDO('mysql:dbname=tabelacrud;host=localhost', 'root', '');
        }
        catch (PDOException $e){
            echo ("Erro com banco de dados: ". $e -> getMessage());
            exit();
        }
        catch (Exception $e){
            echo ("Erro genérico: ". $e -> getMessage());
            exit();
        }
    }
    public function buscarDados(){
        $res=array();
        $cmd=$this->pdo->query( "SELECT * FROM pessoas ORDER BY nome");
        $res = $cmd->fetchALL(PDO::FETCH_ASSOC);
        return $res;
    }
   

} //buscar dados e colocar na tela direita
    


   ?>