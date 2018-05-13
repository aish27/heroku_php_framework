<?php 

$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

$results = $pdo->query('select e.name as name ,m.name as mgr from employee e left join employee m on e.mgr=m.id order by m.id asc;');

foreach($results as $row) {
    print_r($row['name']);
    echo ' reports to ';
    print_r($row['mgr']);
    echo '<br/>';
    }  

//echo json_encode($results);

?> 