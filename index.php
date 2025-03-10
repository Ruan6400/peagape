<?php
    include 'Quarto_Ciclo.class.php';
    

    $Jambalaia = new Condominio("Zé da Limpeza",10,"Rua dos Bobos n°0",50.00);
    print nl2br("\n".$Jambalaia->Get_sindico());
    $Jambalaia->Set_sindico("Roberto Carlos");
    print nl2br("\n".$Jambalaia->Get_sindico());


    $Padoca = new Padaria("Padoca do Seu Zé","Rua dos Bobos n°2",2,600.00);
    print nl2br("\n".$Padoca->Get_nome());
    $Padoca->Set_nome("Padoca do Seu João");
    print nl2br("\n".$Padoca->Get_nome());

?>  

