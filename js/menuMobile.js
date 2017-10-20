document.querySelector('header svg').addEventListener('click', function() {
    let menu = document.querySelector('nav');
    if (menu.classList == 'fermer' || menu.classList == '') {
        menu.classList = 'ouvert';
    } else if (menu.classList == 'ouvert') {
        menu.classList = 'fermer';
    }
});