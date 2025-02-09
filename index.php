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

        $titulo = $saudacao . ' Portfolio do ' . $nome;

        $subtitulo = 'Seja bem vindo ao meu Portfolio!!';

        $ano = 2024;

        $projeto = 'Meu Portfolio';

        $finalizado = false; // true,1 ou false,0

        $dataDoProjeto = '2024-10-11';

        $descricao = 'Meu primeiro Portfolio. Escrito em PHP e HTML.';

        $projetos = [

            [
                "titulo" => "Meu Portfolio",
                "finalizado" => false,
                "ano" => 2021,
                "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Lista de Tarefas",
                "finalizado" => true,
                "ano" => 2022,
                "descricao" => "Lista de Tarefas. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Controle de Leitura de Vídeos",
                "finalizado" => true,
                "ano" => 2024,
                "descricao" => "Lista de Livros. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Mais um Projeto",
                "finalizado" => false,
                "ano" => 2025,
                "descricao" => "Projeto secreto em andamento. Escrito em PHP e HTML."
            ],
            // "Lista de Tarefas",
            // "Controle de Leitura de Livros",
            // "mais um projeto",

        ];

        function verificarSeEstaFinalizado($p) {

            if ($p['finalizado']) {

                return '<span style="color: green;">✅ finalizado</span>';

            }

            return '<span style="color: green;">⛔ não finalizado</span>';

        }

        $projetosFiltrados = array_filter($projetos, function($projeto) {

            return $projeto['ano'] === 2024 || $projeto['ano'] === 2021;

        });

    ?>
    
    <h1><?= $titulo ?></h1>

    <p><?= $subtitulo ?></p>

    <p><?php echo $ano ?></p>

    <hr>

    <ul>

        <?php foreach($projetosFiltrados as $projeto): ?>

            <div
    
                <?php if ( ! ((2024 - $ano) > 2) ): ?>

                    style="background-color: burlywood"

                <?php endif; ?>
            >

                <h2><?= $projeto['titulo'] ?></h2>

                <p><?= $projeto['descricao'] ?></p>

                <div>

                    <div><?= $projeto['ano'] ?></div>

                    <div>Projeto:

                        <?= verificarSeEstaFinalizado($projeto) ?>

                        <!-- <?php if (!$projeto['finalizado']): ?>

                            <span style="color: green;">⛔ não finalizado</span>
                            
                        <?php else: ?>

                            <span style="color: green;">✅ finalizado</span>

                        <?php endif; ?> -->

                        <!-- <?php
                        
                            if ($projeto['finalizado']) {

                                echo '✅ finalizado';

                            } else {

                                echo '⛔ não finalizado';

                            }
                            
                        ?> -->

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </ul>

</body>
</html>