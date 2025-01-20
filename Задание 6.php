<?php

$textStorage = [];

function add (string $title, string $text, array &$textStorage) : void
{
    $textStorage[] = ['title' => $title, 'text' => $text];
}

add('Тест 1', 'Тест 2', $textStorage);
add('Тест 3', 'Тест 4', $textStorage);

print_r($textStorage);

function remove(int $textId, array &$textStorage)
{
    if (isset($textStorage[$textId])) {
        unset($textStorage[$textId]);
        return true;
    }
    return false;
}

var_dump(remove(0, $textStorage));
var_dump(remove(5, $textStorage));

print_r($textStorage);

function edit(int $textId, string $title, string $text, array &$textStorage)
{
    if (isset($textStorage[$textId])) {
        $textStorage[$textId]['title'] = $title;
        $textStorage[$textId]['text'] = $text;
        return true;
    }
    return false;
}

edit(1, 'Тестовый заголовок', 'Тестовый текст', $textStorage);

print_r($textStorage);

var_dump(edit(7, 'Заголовок 1313', 'Текст 1567', $textStorage));