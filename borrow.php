<?php
require 'connection.php';
require 'visual.php';
$crud = $app->layout->add('CRUD');
$crud->setModel(new Borrow($db));
$crud->addQuickSearch(['date_checked_out','date_returned','returned','quantity','client_id','book_id']);
