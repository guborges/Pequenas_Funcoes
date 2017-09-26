<?php 

public function gerarJogoMegaSena(){
        
    echo "<hr>Números da Mega Sena<br>";
    echo "|------------------------------|<br>";
    
    //Declaro minha array
    $mega = array();
    
    //Faço o loop para repetir até 6x
    
    for($i = 0; $i < 6; $i++){
        //imprimo meus dados
        echo $mega[$i] = rand(1,60)."<Br>";
        
    }
    
    //Botão para gerar novamente
    echo "<a HREF='javascript:history.go(0)'><button>Gerar</button></a>";
    echo "<br>|------------------------------|";
}

?>