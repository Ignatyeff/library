<?php
$app = new \atk4\ui\App('Library');
$app->initLayout('Admin');
$layout = $app->layout;
$app->layout->leftMenu->addItem(['Главная страница'],['main_lib']);
$app->layout->leftMenu->addItem(['Все книги'],['book']);
$app->layout->leftMenu->addItem(['Книги, который надо вернуть'],['return']);
$app->layout->leftMenu->addItem(['Читатели'],['main']);
$app->layout->leftMenu->addItem(['Книги которые взяли'],['borrow']);
$app->layout->leftMenu->addItem(['Библиотекари'],['lib_list']);
$app->layout->leftMenu->addItem(['Выход'],['index']);
