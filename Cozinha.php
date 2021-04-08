<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    require_once "Funcionario.php";
    require_once "Ingrediente.php";
class Cozinha{


    private string $tipo; 
    private int $Hora_Abertura;
    private int $Hora_Fechamento;
    private string $Prato_Principal;

    private array $ingrediente=[];
    private array $funcionario=[];


    public function __construtor(string $tipo,int $Hora_Abertura,int $Hora_Fechamento,string $Prato_Principal){
         $this->tipo =$tipo;
         $this->Hora_Abertura=$Hora_Abertura;
         $this->Hora_Fechamento=$Hora_Fechamento;
         $this->Prato_Principal=$Prato_Principal;

    }
    public function getTipo():string{
    return $this->tipo;
    } public function setTipo(string $tipo):string{
        return $this->tipo=$tipo;
        }

    public function getHora_Abertura():int{
    return $this->Hora_Abertura;
    } public function setHora_Abertura(int $Hora_Abertura):int{
        return $this->Hora_Abertura=$Hora_Abertura;
        }


    public function gethora_Fechamento():int{
    return $this->Hora_Fechamento;
    } public function setHora_Fechamento(int $Hora_Fechamento):int{
        return $this->Hora_Fechamento=$Hora_Fechamento;
        }


    public function getPrato_Principal():string{
    return $this->Prato_Principal;
    }public function setPrato_Principal(string $Prato_Principal):string{
        return $this->Prato_Principal=$Prato_Principal;
        }


    public function getIngrediente():array{
        return $this->ingrediente;
    }public function setIngrediente(ingrediente $ingrediente):void{
    array_push($this->ingrediente,$ingrediente);}


    public function getFuncionario():array{
    return $this->funcionario;
    }public function setFuncionario(Funcionario $funcionario):void{
    array_push($this->funcionario,$funcionario);}
    }   
?>


</body>
</html>


