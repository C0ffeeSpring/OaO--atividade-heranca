<?php

require_once("modelo/Pop.php");
require_once("modelo/Jazz.php");
require_once("modelo/Sertanejo.php");


$playlist = [];

do {
    echo "\n--- MENU ---\n";
    echo "1. Adicionar música Sertanejo\n";
    echo "2. Adicionar música Pop\n";
    echo "3. Adicionar música Jazz\n";
    echo "4. Listar todas músicas\n";
    echo "5. Listar músicas Sertanejo\n";
    echo "6. Listar músicas Pop\n";
    echo "7. Listar músicas Jazz\n";
    echo "8. Sair\n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $titulo = readline("Título: ");
            $anoLancamento = readline("Ano Lancamento: ");
            $cantor = readline("Cantor: ");
            $dupla = readline("Dupla: ");

            $Sertaneju = new Sertanejo($titulo, $anoLancamento, $cantor);
            $Sertaneju->setDupla($dupla);
            

            $playlist[] = $Sertaneju;
            
            break;

            case 2:

               $titulo = readline("Título: ");
               $anoLancamento = readline("Ano Lancamento: ");
               $cantor = readline("Cantor: ");

               $p = new Pop($titulo, $anoLancamento, $cantor);
              

               $playlist[] = $p;


                break;

                case 3:

                    $titulo = readline("Título: ");
                    $anoLancamento = readline("Ano Lancamento: ");
                    $cantor = readline("Cantor: ");
                    $instrumentoPrincipal = readline("Instrumento Principal: ");

                    $jazz = new Jazz($titulo, $anoLancamento, $cantor);
                    $jazz->setInstrumentoPrincipal($instrumentoPrincipal);
                    

                    $playlist[] = $jazz;

                    break;

                    case 4:
                        echo "\n--- Playlist ---\n";
                        foreach ($playlist as $musica) {
                            echo $musica . "\n";
                        }
                        break;

                        case 5:
                            echo "\n--- Músicas Sertanejo ---\n";
                            foreach ($playlist as $musica) {
                                if ($musica instanceof Sertanejo) {
                                    echo $musica . "\n";
                                }
                            }
                            break;

                            case 6:
                                echo "\n--- Músicas Pop ---\n";
                                foreach ($playlist as $musica) {
                                    if ($musica instanceof Pop) {
                                        echo $musica . "\n";
                                    }
                                }
                                break;

                                case 7:
                                    echo "\n--- Músicas Jazz ---\n";
                                    foreach ($playlist as $musica) {
                                        if ($musica instanceof Jazz) {
                                            echo $musica . "\n";
                                        }
                                    }
                                    break;
                    


        
}} while ($opcao != 8);


