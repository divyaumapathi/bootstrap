<?php
session_start();

$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('laravel', $conn);

if(isset($_POST['bookID']))
{
    $bookID = $_POST['bookID'];

    $result = mysql_query("DELETE FROM bookstore WHERE Id=$bookID", $conn);

    if ($result)
        echo "Book #" + $bookId + " has been reserved.";
    else
        echo "An error message!";
}
?>