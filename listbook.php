<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head> 

        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

   <link rel="stylesheet" href="css/style1.css">
    <title>Books list</title>
</head>

<body>
    
    <header> <h2> List books</h2></header>
    

    
        <div class="select-category">
        <select id="categoryDropdown" class="form-select">
            <option value="">All </option>
			<option value="1">Action</option>
			<option value="2">fantasy</option>
			<option value="3">History</option>
			<option value="4">Children</option>
            <option value="5">Novel</option>
        </select>
        </div>


        
        <?php

$query = "SELECT * FROM tbl_72_books";
$result = mysqli_query($connection, $query);
?>

<main id="dataServices" class="container">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            $bookId = $row['id'];
            $bookName = $row['name'];
            $bookPrice = $row['price'];
            $bookCategory = $row['id_category'];
            $bookDescription = $row['Description'];
            $bookImageFront = $row['image_front'];
            $bookImageBack = $row['image_back'];
        ?>

        <div class="col-md-4">
            <div class="book" data-category="<?php echo $bookCategory; ?>">
                <a href="index.php?bookId=<?php echo $bookId; ?>">
                <h3><?php echo $bookName; ?> </h3>
                    <img src="<?php echo $bookImageFront; ?>" class="img_style" alt="Book Cover">
                    <h3>$<?php echo $bookPrice; ?></h3>
                </a>
            </div>
        </div>

        <?php } ?>
        
    </div>
</main>


<footer><h5>Noy Raichman</h5></footer>
    <script src="js/get_book.js"></script>
</body>
</html>
<?php
mysqli_close($connection);
?>
