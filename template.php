<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <link href="//fonts.googleapis.com/css?family=Lato:400,300,700,900" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/template.css" type="text/css" media="screen" />
        <title><?php echo $title; ?></title>
        <link rel="icon" href="<?php echo URL; ?>assets/images/favicon.png">
    </head>

    <body>
        <div id="layout">
            <div id="top">
                <div id="top_wrapper" class="main-size">
                    <h1>Flisol Santos 2016</h1>
                    <h2>16 de Abril</h2>
                    <ul id="menu">
                        <li class="<?php echo ($page == 'principal') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>">Principal</a>
                        </li>
                        <li class="<?php echo ($page == 'flisol') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>flisol">Flisol</a>
                        </li>
                        <li class="<?php echo ($page == 'programacao') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>programacao">Programação</a>
                        </li>
                        <li class="<?php echo ($page == 'local') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>local">Local</a>
                        </li>
                        <li class="<?php echo ($page == 'organizadores') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>organizadores">Organização</a>
                        </li>
                        <li class="<?php echo ($page == 'fotos') ? 'active' : ''; ?>">
                            <a href="<?php echo URL; ?>fotos">Fotos</a>
                        </li>
                    </ul>
                    <?php if ($page == 'principal') : ?>
                        <iframe class="video" src="//www.youtube.com/embed/OG5EAGT5VDk" frameborder="0" allowfullscreen></iframe>
                    <?php endif; ?>
                </div>
            </div>

            <div id="content" class="main-size">
                <?php include("pages/{$page}.php"); ?>
            </div>

            <div id="rodape">
                <h3>Apoio</h3>
                <ul class="sponsors">
                    <li><a href="http://unimonte.br">Unimonte</a></li>
                    <li><a href="https://www.casadocodigo.com.br/">Casa do Código</a></li>
                </ul>
                <p>
                    <img src="<?php echo URL; ?>assets/images/flisol.png" alt="Flisol" />
                </p>
                <p>Festival Latino Americano de Instalação de Software Livre</p>
                <p>
                    Flisol Santos :: 2011 - <?php echo date('Y'); ?> ::
                    <a href="http://gccsd.com.br" title="GCCSD">GCCSD</a> ::
                    <a href="https://github.com/GCCSD/flisol-site/graphs/contributors" title="Colaboradores">Colaboradores</a>
                </p>
            </div>
        </div>
    </body>
</html>
