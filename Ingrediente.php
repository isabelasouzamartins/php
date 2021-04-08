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
class Ingrediente{
    private String $nomeIng;
    private Datetime $Data_Validade;
    
    public function __construtor(String $nomeIng,Datetime $Data_Validade){
        $this->Nome=$nomeIng;
        $this->Data_Validade=$Data_Validade;
    
    }
    
    public function getNomeIng():string{
    return $this->Nome;
    }public function setNomeIng(string $nomeIng):string{
        return $this->Nome=$nomeIng;
        }
    
    
    public function getData_Validade():Datetime{
        return $this->Data_Validade;
        }public function setData_Validade(Datetime $Data_Validade):Datetime{
            return $this->Data_Validade=$Data_Validade;
            }
    
}

?>

</body>
</html>
