$(document).ready(function() {
    $("#show").click(function() {
        $("#add").slideDown(1000);
        $("#show").fadeOut();
    });
    $("#hide").click(function() {
        $("#add").slideUp(1000);
        $("#show").fadeIn();
    })
    $("#show_itr").click(function() {
        $("#add_itr").slideDown(1000);
        $("#show_itr").fadeOut();
        $("#d_record").fadeOut();
    });
    $("#hide_itr").click(function() {
        $("#add_itr").slideUp(1000);
        $("#show_itr").fadeIn();
        $("#d_record").fadeIn();
    })
    $("#show_fdental").click(function() {
        $("#p_fdental").slideUp(1000);
        $("#dental_form").fadeIn();
    });

    $('#show_com').click(function() {
        $("#com").slideDown(1000);
        $("#show_com").fadeOut();
    });
    $('#hide_com').click(function() {
        $("#com").slideUp(1000);
        $("#show_com").fadeIn();
    });
});