<div class="super-main">
    <?php include(__DIR__ . "/../partials/header.php");  ?>
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
        <div class="books-background" id="main-1">
            <div class="books-border"></div>
            <div class="the-book">
                <img src="<?= $assets ; ?>/images-home-library//book1.png" class="books" style="height:100%;">
            </div>
            <div class="books-border-bottom"></div>
        </div>
        <div class="books-background" id="main-2" style="background-color: #FFFDFF;">
            <div class="books-border" style="border-color: #333333;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book2.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #333333;"></div>
        </div>
        <div class="books-background" id="main-3" style="background-color: #7C2140;">
            <div class="books-border" style="border-color: #A86717;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book3.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #A86717;"></div>
        </div>
        <div class="books-background" id="main-4" style="background-color: #BCCAD5;">
            <div class="books-border" style="border-color: #7C2140;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book4.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #7C2140;"></div>
        </div>

        <div class="books-background" id="main-5" style="background-color: #3F5974">
            <div class="books-border" style="border-color: #E3AC1B;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book5.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #E3AC1B;"></div>
        </div>
        <div class="books-background" id="main-6" style="background-color: #171111">
            <div class="books-border" style="border-color: #FFFDFF;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book6.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #FFFDFF;"></div>
        </div>
        <div class="books-background" id="main-7">
            <div class="books-border" style="border-color: #FFFDFF;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book7.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #FFFDFF;"></div>
        </div>
        <div class="books-background" id="main-8" style="background-color: #7C2140">
            <div class="books-border" style="border-color: #FFFDFF;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book1.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #FFFDFF;"></div>
        </div>

        <div class="books-background" id="main-9" style="background-color: #A86717">
            <div class="books-border" style="border-color: #BCCAD5;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book2.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #BCCAD5"></div>
        </div>
        <div class="books-background" id="main-10" style="background-color: #333333">
            <div class="books-border" style="border-color: #E3AC1B;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book5.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #E3AC1B"></div>
        </div>
        <div class="books-background" id="main-11" style="background-color: #FFFDFF">
            <div class="books-border" style="border-color: #7C2140;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book4.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #7C2140"></div>
        </div>
        <div class="books-background" id="main-12" style="background-color: #3F5974;">
            <div class="books-border" style="border-color: #7C2140;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book3.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #7C2140"></div>
        </div>

        <div class="books-background" id="main-13" style="background-color:#E3AC1B;">
            <div class="books-border" style="border-color: #1F2C3D;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book7.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #1F2C3D;"></div>
        </div>
        <div class="books-background" id="main-14" style="background-color:#A86717;">
            <div class="books-border" style="border-color: #2E3444;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book6.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #2E3444;"></div>
        </div>
        <div class="books-background" id="main-15" style="background-color:#BCCAD5;">
            <div class="books-border" style="border-color: #171111;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book1.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color:#171111;"></div>
        </div>
        <div class="books-background" id="main-16" style="background-color:#1F2C3D;">
            <div class="books-border" style="border-color: #FFFDFF;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book5.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color:#FFFDFF;"></div>
        </div>

        <div class="books-background" id="main-17" style="background-color:#7C2140;">
            <div class="books-border" style="border-color: #3F5974;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book3.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color:#3F5974;"></div>
        </div>
        <div class="books-background" id="main-18" style="background-color:#E3AC1B;">
            <div class="books-border" style="border-color: #FFFDFF;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book6.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color:#FFFDFF;"></div>
        </div>
        <div class="books-background" id="main-19" style="background-color:#E3AC1B;">
            <div class="books-border" style="border-color: #1F2C3D;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book7.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #1F2C3D;"></div>
        </div>
        <div class="books-background" id="main-20" style="background-color:#A86717;">
            <div class="books-border" style="border-color: #2E3444;"></div>
            <div class="the-book"><img src="<?= $assets ; ?>/images-home-library//book2.png" class="books"
                    style="height:100%;"></div>
            <div class="books-border-bottom" style="background-color: #2E3444;"></div>
        </div>
    </div>
    <div style="height:100px;"></div>

    <?php include(__DIR__ . "/../partials/Footer.php");  ?>
</div>