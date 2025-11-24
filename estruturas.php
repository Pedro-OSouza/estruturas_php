<?

$rodando = true;

// Utilização do WHILE para manter o menu ativo
while ($rodando) {
    echo "=================================\n";
    echo "  Estruturas de controle, repetição e fluxo\n";
    echo "=================================\n";
    echo "1. Gerar tabuada de um número\n";
    echo "0. Sair\n";
    echo "=================================\n";
    echo "Escolha uma opção: ";

    $opcao = trim(fgets(STDIN));

    echo "\n";

    // Utilização de SWITCH para navegacao entre opcoes
    switch ($opcao) {
        case '1':
            echo "--- Tabuada ---\n";
            echo "Digite um número para ver a tabuada: ";
            $num = (int)trim(fgets(STDIN));
            echo "\n";
            
            // Utilização de IF para validar entrada
            if($num == 0) {
                echo "Por favor, insira um número válido (ou diferente de zero): ";
                $num = (int)trim(fgets(STDIN));
            } 
            
            // Utilização de FOR para gerar a tabuada
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $num * $i;
                echo "$num x $i = $resultado\n";
            }
            break;

        case '0':
            echo "Saindo do sistema...\n";
            $rodando = false;
            break;

        default:
            echo "Opção inválida! Tente novamente.\n";
            break;
    }

    if ($rodando) {
        echo "\n[Pressione ENTER para continuar]";
        fgets(STDIN);
    }
}