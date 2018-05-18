<?php
require 'connection.php';
require 'visual.php';
$form = $app->layout->add('Form');
$form->setModel(new Borrow($db));
$form->buttonSave->set('Сохранить');
