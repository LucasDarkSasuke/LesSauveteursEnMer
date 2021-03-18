 /* Animation défiler vers le bas */
 $(document).ready(function() {
    /* arrow down */
    $('.cd-scrolling').on('click', function() { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
return false;
});

/* menu redirection */
    $('.cd-scroll').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
    return false;
});

});