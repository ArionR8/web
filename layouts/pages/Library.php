<div class="super-main">
    <?php 
        include(__DIR__ . "/../partials/header.php");  
        include(__DIR__ . "/admin/Books.php");
        $getBooks = new Books;
        $getBooks = $getBooks->getAllBooks();
        $getBooksAssets = '/web/uploads';
    ?>
    <div class="scroll-to-navigator"><a href="#navigator" style="font-size:50px;">&#11205;</a></div>

    <div class="modal-for-books hide" onclick="hideModal()">
        <div class="book" onclick="flipBook()">
            <div class="book-inner" id="bookInner">
                <div class="book-cover"><img src="<?= $assets ; ?>/images-home-library//book1.png" style="height:100%">
                </div>
                <div class="book-back"><img src="<?= $assets ; ?>/images-home-library//book1.2.png"
                        style="height:100%;"></div>
            </div>
        </div>
    </div>

    <div class="main">
        <?php for ($i = 0; $i < count($getBooks); $i++) { ?>
            <div class="books-background" id="main-<?= ($i+1); ?>">
                <div class="books-border"></div>
                <div class="the-book">
                    <img src="<?php echo $getBooksAssets.'/'.$getBooks[$i]->image_front; ?>" class="books" style="height:100%;">
                    <img id="back-image" style="display:none;" src="<?php echo $getBooksAssets.'/'.$getBooks[$i]->image_back; ?>"  />
                </div>
                <div class="books-border-bottom"></div>
            </div>
        <?php } ?>
    </div>
    <div style="height:100px;"></div>

    <?php include(__DIR__ . "/../partials/Footer.php");  ?>
</div>