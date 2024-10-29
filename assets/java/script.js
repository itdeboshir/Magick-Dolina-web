window.addEventListener('scroll', function() {
    var footer = document.getElementById('footer');
    var scrollPosition = window.scrollY;
    var windowHeight = window.innerHeight;
    var bodyHeight = document.body.offsetHeight;

    // Перевіряємо, чи сторінка не може прокручуватись
    if (bodyHeight <= windowHeight) {
        // Якщо сторінка не може прокручуватись,
        // тоді футер відображається незалежно від положення прокрутки
        footer.style.display = 'block';
    } else {
        // Якщо сторінка може прокручуватись,
        // тоді застосовуємо попередню логіку
        if ((windowHeight + scrollPosition) >= bodyHeight) {
            footer.style.display = 'block'; // Показуємо футер
        } else {
            footer.style.display = 'none'; // Ховаємо футер
        }
    }
});
