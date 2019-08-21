<?php
$this->get('', function($arg){
	echo 'testando home page';
});

$this->loadRouteFile('noticias');

/** tarefa de casa **/
<?php
 
$this->get('', function($arg) {
    echo 'Home';
});
 
$this->get('404', function($arg){
    $tpl = $this->core->loadModule('template');
    $tpl->render('404');
});
 
$this->loadRouteFile('noticias');