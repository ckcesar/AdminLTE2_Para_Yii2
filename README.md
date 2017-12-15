# AdminLTE2_Para_Yii2
AdminLTE 2 para usar no Framework Yi22

Parte 01

Abrir o terminal dentro do projeto e digitar essa linha. Se houver problema verifique seu PHP, essa versão funciona na versão do PHP 7.1.

composer require dmstr/yii2-adminlte-asset "*"

===============================================
Parte 02

Digite essas linhas dentro da pasta frontend/config/main-local.php. Dentro da sua variável 
$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'iTwy0cpx4dP9y64WtsVdUYVhOGM1wSiy',
        ],
=======

Resultado final.

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'iTwy0cpx4dP9y64WtsVdUYVhOGM1wSiy',
        ],
        'view' => [
            'theme' => [
                'pathMap'=>[
                    '@app/views'=>'@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue',
                ],
            ],
        ],
    ],
];

==============================================================
Parte 03

Acesse as pastas dentro da pasta vendor/
/home/site/advanced/vendor/dmstr/yii2-adminlte-asset/

/home/site/advanced/vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app/layouts/main.php

Nesse arquivo você vai encontrar a configuração se o usuário já está logado, é uma tela que modelei do meu jeito para deixar a tela inicial diferente, sem os campos de menu.

===============================================================
Parte 04

Siga instruções desse vídeo para poder melhor adptar a plataforma.

É uma sequência de vídeos.

https://www.youtube.com/watch?v=A7o_wN8eHr4&t=228s

=====================================================

Bom desenvolvimento. Fecho... /o/
