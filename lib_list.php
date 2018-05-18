<?php
require 'connection.php';
require 'visual.php';
$crud = $app->layout->add('CRUD');
$crud->setModel(new Librarian($db));
$crud->addQuickSearch(['author','name','password']);
