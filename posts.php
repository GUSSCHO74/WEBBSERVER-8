<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Guestbook</h1>
    <form action="script.php" method="post">
        Name:
        <br />
        <input type="text" name="name" required placeholder="Enter name" />
        <br />
        Comment:
        <br />
        <textarea type="text" name="comment" required placeholder="Write comment" cols="30" rows="3" style="resize: none"/></textarea>
        <br />
        <br>
        <input type="submit" value="Post" />
    </form>

    <?php
        include "database.php";

        $sql = "SELECT * FROM guestbook";
        $result = $conn->query($sql);
    
        while ($row = $result->fetch_assoc()) {
          echo
          "<hr> Name: " . $row["name"] . "<br/>
            Comment: " . $row["comment"] . "<br/ >
            Posted: " . $row["time"];
        }
    
        $conn->close();
    ?>
</body>
</html>