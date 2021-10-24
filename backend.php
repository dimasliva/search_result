<?php
require_once "db.php";

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = "%$search%";

    if (strlen($search) > 2) {
        $sql = "SELECT * FROM directory WHERE first_name LIKE :s || last_name LIKE :s";
        $stmt = $db->prepare($sql);
        $stmt->bindParam('s', $search);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $title = $row['title'];
            $company = $row['company'];
            $phone = $row['phone'];
            $email = $row['email'];

            echo "<div class='contact'>
                    <p>$fname $lname</p>
                    Company: $company </br>
                    Position: $title </br>
                    Phone number: $phone </br>
                    <a href='mailto;$email'>Email: $email</a>
                  </div>";
        }
    }
}