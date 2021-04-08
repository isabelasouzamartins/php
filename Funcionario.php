<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squadra php</title>
</head>
<body>
    
<?php
class Funcionario{
    private String $Nome;
    private string $Atividade;
    
    public function __construtor(string $Nome,$Atividade){
        $this->Nome=$Nome;
        $this->Atividade=$Atividade;

    
    }
    
    public function getNome():string{
    return $this->Nome;
    } public function setNome(string $Nome):string{
        return $this->Nome=$Nome;
        }
    
    
    public function getAtividade():string{
        return $this->Atividade;
    }public function setAtividade(string $Atividade):string{
        return $this->Atividade=$Atividade;
        }
    
}

?>

</body>
</html>
