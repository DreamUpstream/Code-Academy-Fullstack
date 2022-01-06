<?php
use App\formbuilder\Formbuilder;

$form = new FormBuilder;
 
echo $form->open('index.php', 'POST');
echo $form->label('text');
echo $form->input('text', 'Enter value', '');
echo $form->input('password', 'Enter password', '');
echo $form->password('Enter password');
echo $form->textarea('Enter text');
echo $form->submit('go');
echo $form->close();