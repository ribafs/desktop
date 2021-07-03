<?php 
$pdo = new PDO('sqlite:./sqlite3.db');
if($pdo){
    print 'Conectou';
}else{
    print 'Não Conectou';
}
