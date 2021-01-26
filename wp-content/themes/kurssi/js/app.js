window.addEventListener('DOMContentLoaded', () => {
    const postbtn = document.querySelectorAll('.post-btn');
    const articles = document.querySelectorAll('article.page-article');

    if (postbtn.length > 0) {
        postbtn[0].classList.add('active');
    }

    for (var i = 0; i < postbtn.length; i++) {
        postbtn[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    postbtn.forEach((link) => {
        link.addEventListener('click', (event) => {
            articles.forEach((article) => {
                article.style.display = 'none';
                if (article.id === event.target.innerHTML) {
                    article.style.display = 'block';

                }
            });
        })
    });

    const menuBars = document.querySelector('.mobile-bars');

    menuBars.addEventListener('click', (event) => {
        const menu = document.querySelector('ul#menu-header');
        if (menu.classList.contains('active-menu')) {
            menu.classList.remove('active-menu');
            menuBars.innerHTML = "<i class='fas fa-bars'></i>";
            return;
        }
        menu.classList.add('active-menu');
        menuBars.innerHTML = "<i class='fas fa-times'></i>";
    });
});