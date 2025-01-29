<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
</head>
<body>

    <?php
    
        $nome = 'João';

        $saudacao = 'Oi';

        $titulo = $saudacao . ' Portifolio do ' . $nome;

        $subtitulo = 'Seja bem vindo ao meu portifolio!!';

        $ano = 2024;

        $projeto = 'Meu Portifolio';

        $finalizado = false; // true,1 ou false,0

        $dataDoProjeto = '2024-10-11';

        $descricao = 'Meu primeiro portifolio. Escrito em PHP e HTML.';
    
    ?>
    
    <h1><?= $titulo ?></h1>

    <p><?= $subtitulo ?></p>

    <p><?php echo $ano ?></p>

    <hr>

    <div
    
        <?php if ( ! ((2024 - $ano) > 2) ): ?>

            style="background-color: burlywood"

        <?php endif; ?>
    >

        <h2><?= $projeto ?></h2>

        <p><?= $descricao ?></p>

        <div>

            <div><?= $dataDoProjeto ?></div>

            <div>Projeto:

                <?php if ($finalizado): ?>

                    <span style="color: green;">⛔ não finalizado</span>
                    
                <?php else: ?>

                    <span style="color: green;">✅ finalizado</span>

                <?php endif; ?>

                <?php
                
                    if ($finalizado) {

                        echo '✅ finalizado';

                    } else {

                        echo '⛔ não finalizado';

                    }
                    
                ?>

            </div>

        </div>

    </div>

</body>
</html>