<?php 
$pdo = new PDO('mysql:host=localhost;dbname=testes', 'root', '');
if($pdo){
    print 'Conectou';
}else{
    print 'Não Conectou';
}
