<?php
    @mysql_select_db("lectures", mysql_connect("localhost","root",""));
//lectures is the name of database
    $query = $_POST['query'];
    $topic = mysql_query("select * from lectures where courses like '%$query%'");
 //lectures is the name of table. courses is the name of column 
$number=mysql_num_rows($topic); 
    if($query=="") {
        echo "You can not make a blank call";
}

else if ($number<1) { echo "No results found for your search <a href='index.php'> Turn back.</a>";} 

else {
    while($find = mysql_fetch_array($topic)) {
        $courses = $find['courses'];
    echo "<b>$courses</b>";
    }
}
?>
            
