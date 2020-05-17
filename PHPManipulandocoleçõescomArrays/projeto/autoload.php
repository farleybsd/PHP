<?php
spl_autoload_register(
    function (string $namespaceClass): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClass);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);
