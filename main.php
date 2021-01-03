<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shopping";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT name, price, imgPath FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo  '<div class="row mt-3">';
            while ($row = $result->fetch_assoc()) {
                echo  '<div class="col-12 col-md-3">';
                echo  '<div class="card" style="width: 18rem;">';
                echo  '<img src="' . $row["imgPath"] . '" class="card-img-top" alt="' . $row["name"] . '">';
                echo  '<div class="card-body">';
                echo  '<h5 class="card-title">' . $row["name"] . '</h5>';
                echo  '<p class="card-text">網路價 ' . $row["price"] . '</p>';
                echo  '</div>';
                echo  '</div>';
                echo  '</div>';
            }
            echo  '</div>';
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</body>

</html>