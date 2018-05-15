<?php
    @mysql_select_db("project", mysql_connect("localhost","root",""));
    $query = $_POST['query'];
    $topic = mysql_query("select * from courses where code like '%$query%'");

$number=mysql_num_rows($topic); 
    if($query=="") {
        echo "You can not make a blank call";
}

else if ($number<1) { echo "No results found for your search <a href='index.php'> Turn back.</a>";} 

else {
    while($find = mysql_fetch_array($topic)) {
        $code = $find['code'];
        $name = $find['name'];
        $link = $find['link'];

    echo $code." ".$name." ";
    echo '<a href="' . $link . '">Go to page of the course</a>';

    }
}

session_start();

$find_data = mysql_query("SELECT * FROM comments WHERE code='$code'");


while($row = @mysql_fetch_assoc($find_data)) {
    $username= $row['username'];
    $comment = $row['comment'];
    echo "<br />$comment - $username<p>"; 
}

?>

<html>
<form action="post_comment.php" method="POST"> 
    <input type="text" name="code" value="Code of the course"><br>
    <textarea name="comment" cols="50" rows="2">Enter a comment</textarea>
    <input type="submit" value="Comment">

</form>
</html>

