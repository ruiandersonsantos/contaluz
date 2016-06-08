$(document).ready(function () {

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(".bootstrap-switch-handle-on").html("Sim");
    $(".bootstrap-switch-handle-off").html("Não");
    
    
    
     $("#troca-estado").click(function(){
        var btn = $(this);
        btn.button("loading");
        
        
        
        setTimeout(function(){
            //btn.button("reset");
            var kwh_relogio = $("#kwh_relogio").val();
             window.location.href = "/index.php/calculo/calcular?kwh="+kwh_relogio;
        }, 2000);
        
       
    });
 

});
