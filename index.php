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
    require "Cozinha.php";
    //Ingredientes utilizados na cozinha Mineira 
    $ingreM1=new Ingrediente();
    $ingreM1->setnomeIng("Feijão");
    $ingreM1-> setData_Validade(new Datetime("2021/04/03"));
    $ingreM2=new Ingrediente();
    $ingreM2->setnomeIng("farinha");
    $ingreM2-> setData_Validade(new Datetime("2021/04/02"));
    $ingreM3=new Ingrediente();
    $ingreM3->setnomeIng("Arroz");
    $ingreM3-> setData_Validade(new Datetime("2021/04/01"));
    $ingreM4=new Ingrediente();
    $ingreM4->setnomeIng("Carne de Porco");
    $ingreM4-> setData_Validade(new Datetime("2021/03/29"));

    //Ingredientes utilizados na cozinha Italiana
    $ingreI1=new Ingrediente();
    $ingreI1->setnomeIng("Molho");
    $ingreI1-> setData_Validade(new Datetime("2021/04/03"));
    $ingreI2=new Ingrediente();
    $ingreI2->setnomeIng("Macarrão");
    $ingreI2-> setData_Validade(new Datetime("2021/04/02"));
    $ingreI3=new Ingrediente();
    $ingreI3->setnomeIng("queijo");
    $ingreI3-> setData_Validade(new Datetime("2021/04/01"));
    
    //Ingredientes utilizados na cozinha Chinesa
    $ingreC1=new Ingrediente();
    $ingreC1->setnomeIng("Salmão");
    $ingreC1-> setData_Validade(new Datetime("2021/04/03"));
    $ingreC2=new Ingrediente();
    $ingreC2->setnomeIng("Arroz");
    $ingreC2-> setData_Validade(new Datetime("2021/04/02"));
    $ingreC3=new Ingrediente();
    $ingreC3->setnomeIng(" saquê doce ");
    $ingreC3-> setData_Validade(new Datetime("2021/04/01"));
    


    //todos os funcionarios que trabalham na cozinha mineira 
    $funciMineiro1=new Funcionario();
    $funciMineiro1->setNome("Isabela Souza Martins");
    $funciMineiro1->setAtividade("ajudante");    
    $funciMineiro2=new Funcionario();
    $funciMineiro2->setNome("Barões da Pisadinha");
    $funciMineiro2->setAtividade("ajudante");
    $funciMineiro3=new Funcionario();
    $funciMineiro3->setNome("Gustavo Lima");
    $funciMineiro3->setAtividade("chef");    
    $funciMineiro4=new Funcionario();
    $funciMineiro4->setNome("Hungria");
    $funciMineiro4->setAtividade("ajudante");

    //todos os funcionarios que trabalham na cozinha Italiana
     $funciItaliana7=new Funcionario();
     $funciItaliana7->setNome("Rodrigo Marques RM");
     $funciItaliana7->setAtividade("chef");
     $funciItaliana8=new Funcionario();
     $funciItaliana8->setNome("Bruna Louise");
     $funciItaliana8->setAtividade("ajudante");

    //todos os funcionarios que trabalham na cozinha Chinesa    
    $funciChinesa5=new Funcionario();
    $funciChinesa5->setNome("Afonso Padiha");
    $funciChinesa5->setAtividade("chef");
    $funciChinesa6=new Funcionario();
    $funciChinesa6->setNome("Marcio Donato");
    $funciChinesa6->setAtividade("ajudante");
    
    //cozinha mineira incluindo seus ingredientes e funcionarios       
    $cozinhaMineira = new Cozinha();    
    $cozinhaMineira->setTipo("cozinha Mineira");
    $cozinhaMineira->setHora_Abertura(14);
    $cozinhaMineira->setHora_Fechamento(20);
    $cozinhaMineira->setPrato_Principal("Feijoada");
    $cozinhaMineira-> setFuncionario($funciMineiro1);
    $cozinhaMineira-> setFuncionario($funciMineiro2);
    $cozinhaMineira-> setFuncionario($funciMineiro3);
    $cozinhaMineira-> setFuncionario($funciMineiro4);
    $cozinhaMineira-> setIngrediente($ingreM1);
    $cozinhaMineira-> setIngrediente($ingreM2);
    $cozinhaMineira-> setIngrediente($ingreM3);
    $cozinhaMineira-> setIngrediente($ingreM4);

    //cozinha Italiana incluindo seus ingredientes e funcionarios   
    $cozinhaItaliana = new Cozinha();    
    $cozinhaItaliana->setTipo("cozinha Italiana");
    $cozinhaItaliana->setHora_Abertura(14);
    $cozinhaItaliana->setHora_Fechamento(20);
    $cozinhaItaliana->setPrato_Principal("Pizza");
    $cozinhaItaliana-> setFuncionario($funciItaliana7);
    $cozinhaItaliana-> setFuncionario($funciItaliana8);
    $cozinhaItaliana-> setIngrediente($ingreI1);
    $cozinhaItaliana-> setIngrediente($ingreI2);
    $cozinhaItaliana-> setIngrediente($ingreI3);

    //cozinha Chinesa incluindo seus ingredientes e funcionarios   
    $cozinhaChinesa = new Cozinha();    
    $cozinhaChinesa->setTipo("cozinha Chinesa");
    $cozinhaChinesa->setHora_Abertura(12);
    $cozinhaChinesa->setHora_Fechamento(20);
    $cozinhaChinesa->setPrato_Principal("sushi");
    $cozinhaChinesa-> setFuncionario($funciChinesa5);
    $cozinhaChinesa-> setFuncionario($funciChinesa6);
    $cozinhaChinesa-> setIngrediente($ingreC1);
    $cozinhaChinesa-> setIngrediente($ingreC2);
    $cozinhaChinesa-> setIngrediente($ingreC3);


    
    
    


    echo"<pre>"; //serve para deixar organizado os print_r,facilitar a leitura
    print_r($cozinhaMineira);
    print_r($cozinhaItaliana);
    print_r($cozinhaChinesa);



    ?>
</body>
</html>