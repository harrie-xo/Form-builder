# Form-builder
Eases way for wrote any form in php.

#Sample Tests


$Form = new \Applications\Provider\Package\Forms\Form();
$Form->open('/add',  [ 'class' => 'form' ]);
$Form->checkbox('box',  [ 'class' => 'box' ]);
$Form->checkbox('box',  [ 'class' => 'box' ]);
$Form->radio('radio',  [ 'class' => 'radio' ]);
$Form->text('text',  [ 'class' => 'text' ]);
$Form->textarea('textarea',  [ 'class' => 'fortext',  'placeholder' => 'Typing your message!' ]);

$Form->select('select',  [ 'class' => 'select' ]);
$Form->option([ 'label_opt' => '--option--' ]);
$Form->option([ 'value' => 'harrieanto', 'label_opt' => 'Harrieanto' ]);
$Form->option([ 'value' => 'harrieanto31', 'label_opt' => 'Harrieanto31' ]);
$Form->endselect();

$Form->number('num',  [ 'class' => 'num' ]);
$Form->email('email',  [ 'class' => 'email' ]);
$Form->email('url',  [ 'class' => 'url' ]);

$Form->submit('submit', [ 'class' => 'sub' ]);

$Form->close();
