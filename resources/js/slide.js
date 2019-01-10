$(document).ready(function() {
    $('.pull-me').click(function() {
        $('.panel').slideToggle('slow');

        $(".pull-me").fadeOut(function () {
            $(".pull-me").text(($(".pull-me").text() == 'Réduire ↑') ? 'Recherche avancée ↓' : 'Réduire ↑').fadeIn();
        })
    });
});