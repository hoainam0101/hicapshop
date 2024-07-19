document.addEventListener('DOMContentLoaded', () => {
    const navLiActive = document.querySelectorAll('.navbar-home .nav-list .nav-li');

    navLiActive.forEach(li => {
        li.addEventListener('click', () => {
            navLiActive.forEach(li => {
                li.classList.remove('activeUnderLine');
            });
            li.classList.add('activeUnderLine');
        });
    });
});