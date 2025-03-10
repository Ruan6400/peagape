<?php
    include 'Quarto_Ciclo.class.php';
    

    $Jambalaia = new Condominio("Zé da Limpeza",10,"Rua dos Bobos n°0",50.00);
    print nl2br("\n".$Jambalaia->Get_sindico());
    $Jambalaia->Set_sindico("Roberto Carlos");
    print nl2br("\n".$Jambalaia->Get_sindico());



    
?>  

