<?php
require 'connection.php';
require 'visual.php';
$crud = $app->layout->add('CRUD');
$crud->setModel(new Client($db));
$crud->addQuickSearch(['name','surname','password','Borrow']);
