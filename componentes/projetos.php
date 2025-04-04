<?php

    $projetos = [

        [
            "titulo" => "Meu Portfolio",
            "finalizado" => false,
            "ano" => 2021,
            "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS", "JS"],
            "img" => "/img/projeto1.png"
        ],
        [
            "titulo" => "Lista de Tarefas",
            "finalizado" => true,
            "ano" => 2022,
            "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS", "JS"],
            "img" => ""
        ],
        [
            "titulo" => "Controle de Leitura de Vídeos",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Lista de Livros. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS", "JS"],
            "img" => ""
        ],
        [
            "titulo" => "Mais um Projeto",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Projeto secreto em andamento. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS", "JS"],
            "img" => ""
        ],

    ];

?>

<?php foreach($projetos as $projeto): ?>

    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">

        <div class="w-1/5 flex items-center justify-middle">

            <img src="<?= $projeto['img'] ?>" class="w-42 rounded-md">

        </div>

        <div class="w-4/5 space-y-3">

            <div class="flex gap-3 justify-between">

                <h3 class="font-semibold text-xl">

                    <?php if ($projeto['finalizado']): ?>

                        ✅

                    <?php endif; ?>

                    <?= $projeto['titulo'] ?>

                    <?php if ($projeto['finalizado']): ?>

                        <span class="text-xs text-grey-400 opacity-50 italic">( Finalizado em <?= $projeto['ano'] ?> )</span></h3>

                    <?php else: ?>

                        <span class="text-xs text-grey-400 opacity-50 italic">( Em desenvolvimento )</span></h3>

                    <?php endif; ?>

                <div class="space-x-1">

                    <?php 

                        $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];

                        foreach($projeto['stack'] as $posicao => $language):

                    ?>

                        <span class="bg-<?= $colors[$posicao] ?>-400 text-<?= $colors[$posicao] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">

                            <?= $language ?>

                        </span>

                    <?php endforeach; ?>

                </div>

            </div>

            <p class="leading-6"><?= $projeto['descricao'] ?></p>

        </div>

    </div>

<?php endforeach; ?>
