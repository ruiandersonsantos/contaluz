$(document).ready(function () {

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(".bootstrap-switch-handle-on").html("Sim");
    $(".bootstrap-switch-handle-off").html("Não");
  
 

});
