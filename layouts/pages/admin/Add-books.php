<?php 
    include(__DIR__ . "/Admin-navigator.php");
    include(__DIR__ . "/Books.php");

    // Check if the form was submitted
    if(isset($_POST["submit"])) {
        $createBook = new Books;
        $createBook->createBook($_FILES,$_POST);
    }
?>
<div class="display-book-inputs">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <label for="file_front">Select Front Image:</label>
        <input type="file" name="file_front" id="file_front">
        
        <label for="file_front">Select Back Image:</label>
        <input type="file" name="file_back" id="file_back">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</div>

<?php 
    $getBooks = new Books;
    $getBooks = $getBooks->getAllBooks();
?>

<table>
        <tr>
            <th>Book Title</th>
            <th>Image Front</th>
            <th>Image Back</th>
        </tr> 
        <?php for ($i = 0; $i < count($getBooks); $i++) { ?>
        <tr >
            <td><?php echo $getBooks[$i]->title; ?></td>
            <td>
                <img style="width:50px;" src="<?php echo '../../../uploads/'.$getBooks[$i]->image_front; ?>"/>
            </td>
            <td>
                <img style="width:50px;" src="<?php echo '../../../uploads/'.$getBooks[$i]->image_back; ?>"/>
            </td>
        </tr>
    <?php } ?>
</table> 

<?php include(__DIR__ . "/Admin-footer.php");  ?>