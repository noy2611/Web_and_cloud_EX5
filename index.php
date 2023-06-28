<?php
include "config.php";
$bookId = $_GET['bookId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id_page_book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<header> <h2> Book Details</h2></header>
    <?php
    $query = "SELECT * FROM tbl_72_books WHERE id = '$bookId'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $bookName = $row['name'];
            $bookPrice = $row['price'];
            $bookDescription = $row['Description'];
            $bookImageFront = $row['image_front'];
            $bookImageBack = $row['image_back'];

            echo '<div>';
            echo '<br><h3><b>' . $bookName . '</b></h3>';
            echo '<h5>Price: $' . $bookPrice . '</h5>';
            echo '<img src="' . $bookImageFront . '" alt="Book C">';
            echo '<img src="' . $bookImageBack . '" alt="Book C">';
            echo '<p>' . $bookDescription . '</p>';
            echo '</div>';
        } else {
            echo 'Book not found';
        }
    } else {
        echo 'Error executing the query: ' . mysqli_error($connection);
    }
    ?>
    <footer><h5>Noy Raichman</h5></footer>
    <script src="js/books.js"></script>
</body>
</html>











<?php
//close DB connection
mysqli_close($connection);
?>