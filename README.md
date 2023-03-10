# Статические переменные / Static Vars

Данный плагин необходим, в основном, для плагинов "UrsacoreLab".

## Статусы

Для использования в полях - dropdown

### Statuses::list()

```php
0 - новый
10 - подтвержден
20 - завершен
100 - отключен
110 - активен
410 - на удалении
```

### Statuses::short_list()

```php
100 - отключен
110 - активен
```

## Информация для АПИ

### Использовать для обработки в NuxtJS/VueJS плагином Notification/Toast

```php
 [
    'type' => 'success / warning / info / error',
    'show' => true / false,
    'translate_code' => 'statuses.loaded',
    'messages'  => [
        0 => [
            'type'  => 'warning',
            'translate_code' => 'Армия тьмы на подходе!'
        ]
    ]
 ]
```

```
"type" - обязательно - выбор конкретного типа сообщения
"show" - по умолчанию 'false' - отображать или нет сообщение
"translate_code" - сообщение для локализации на стороне фронта
"messages" - не обязательно - обработка  массива сообщений на стороне фронта
```

## Цели ссылки (link target)

```php
LinkTarget::list()


static function list(): array
{
    return [
        '_self'   => 'Current window',
        '_blank'  => 'In new tab',
        '_parent' => 'Frame-parent',
        '_top'    => 'Full window',
    ];
}
```
