<?php

return [
    'plugin' => [
        'name'        => 'Статические переменные',
        'description' => 'Выходные переменные и статическая информация',
    ],

    'statuses' => [
        0   => 'Новый',
        10  => 'Подтвержден',
        20  => 'Завершен',
        100 => 'Отключен',
        110 => 'Активен',
        410 => 'На удалении',
    ],

    'targets' => [
        '_self'   => 'В текущем окне',
        '_blank'  => 'В новом окне',
        '_parent' => 'Во фрейм-родитель',
        '_top'    => 'В полном окне браузера',
    ],
];
