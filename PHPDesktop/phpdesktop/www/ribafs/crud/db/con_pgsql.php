<?php 
$pdo = new PDO('pgsql:host=localhost;dbname=phpdesktop', 'postgres', 'postgres');
if($pdo){
    print 'Conectou';
}else{
    print 'Não Conectou';
}
