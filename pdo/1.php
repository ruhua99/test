<?php 
$pdo=new PDO('mysql:host=localhost;dbname=test','root','root');
 
echo "\n";
 
//echo $pdo->exec("create table my1(id int)");
//print_r($pdo->exec("insert into my values(1),(2)"));
($res=$pdo->query("select * from my"));
  $row=$res->fetchAll(PDO::FETCH_ASSOC);
  foreach ($row as $key => $value) {
  	# code...
  	foreach ($value as $key => $value) {
  		# code...
  		echo $key.'=='.$value;
  	}
  	echo "\n";
  }
 ?>