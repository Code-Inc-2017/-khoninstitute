<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid,date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
} 

function getComments($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class='comments-box'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>
            <form class='edit-form' method='POST' action='editcomment.php'>
                <input type='hidden' name='id' value='".$row['cid']."'>
                <input type='hidden' name='uid' value='".$row['uid']."'>
                <input type='hidden' name='date' value='".$row['date']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
            </form>
        </div>";
    }
}

function editComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("location: index.php");
    }
}