
<?php
if ($db -> exec('mydb.sqlite')) { 
    $db -> exec('CREATE TABLE foo (bar varchar(10))');
    $db -> exec("INSERT INTO foo VALUES ('fnord')");
    $result = sqlite_query($db, 'select bar from foo');
    var_dump(sqlite_fetch_array($result)); 
} else {
    die($error);
}
?>

