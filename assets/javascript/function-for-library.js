function hideModal() {
    var modal = document.querySelector('.modal-for-books');
    if (event.target === modal) {
        modal.classList.add('hide');
        modal.classList.remove('show');
        const book = document.querySelector('.book');
        book.classList.remove('flipped');
    }
}
     function flipBook() {
      const book = document.querySelector('.book');
      book.classList.toggle('flipped');
    }
    const books = document.getElementsByClassName("books");

    for(let i = 0; i < books.length; i++){
        books[i].addEventListener("click", (e) => {
            document.getElementsByClassName("modal-for-books")[0].classList.remove("hide")
            document.getElementsByClassName("modal-for-books")[0].classList.add("show")

            let cover = document.getElementById("bookInner").children[0].children[0];
            let back = document.getElementById("bookInner").children[1].children[0];
            let backUrl = books[i].parentElement.querySelector('#back-image');
            backUrl = backUrl.getAttribute('src');

            cover.src = e.target.src;
            back.src = backUrl

        });

    }
  function scrollToNavigator() {
    document.querySelector('#navigator').scrollIntoView({
      behavior: 'smooth'
    });
  }