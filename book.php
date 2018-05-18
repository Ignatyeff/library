<?php
require 'connection.php';
require 'visual.php';
$crud = $app->layout->add('CRUD');
$crud->setModel(new Book($db));
$crud->addQuickSearch(['author','name','quantity','year_published']);
