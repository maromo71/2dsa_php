<?php
    $tabuleiro = [];

    function criarTabuleiro(){
        global $tabuleiro;
        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < 10; $j++){
                $tabuleiro[$i][$j] =rand(1,100);
            }
        }
    }
    function contarAcertos($p1, $p2){
        global $tabuleiro;
        $acertos = 0;
        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < 10; $j++){
                if($tabuleiro[$i][$j] == $p1 || $tabuleiro[$i][$j] == $p2){
                    $acertos++;
                }
            }
        }
        return $acertos;
    }
    function exibirTabuleiro($p1, $p2){
        global $tabuleiro;
        for($i = 0; $i < 10; $i++){//linhas
            for($j = 0; $j < 10; $j++){ //colunas
                if($p1 == $tabuleiro[$i][$j] || $p2 == $tabuleiro[$i][$j]){
                    printf("[%3d]*", $tabuleiro[$i][$j]);//impressao com *
                }else{
                    printf("[%3d] ", $tabuleiro[$i][$j]);//impressao
                }
            }
            echo "\n";//qdo acaba coluna, pula linha
        }
    }

    echo "JOGO DA ADIVINHAÇÃO\n";
    echo "------------------\n";
    echo "Digite o palpite 1: ";
    $palpite1 = (int)readline();
    echo "Digite o palpite 2: ";
    $palpite2 = (int)readline();
    echo "\n";
    echo "Procurar no Tabuleiro\n";
    echo "---------------------\n";
    criarTabuleiro();
    $total = contarAcertos($palpite1, $palpite2);
    echo "O total de acertos foi de: $total \n";
    if($total > 2){
        echo "PARABENS, VOCE GANHOU!\n";
        echo "Seu prêmio é R$ " . ($total * 1000) . "\n";
    }else{
        echo "VOCE PERDEU, TENTE NOVAMENTE!\n";
    }
    exibirTabuleiro($palpite1, $palpite2);
