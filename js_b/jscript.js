$(document).ready(function () {
    
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
     $("#menu-toggle-2").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled-2");
        $('#menu ul').hide();
    });
 
     function initMenu() {
      $('#menu ul').hide();
      $('#menu ul').children('.current').parent().show();
      //$('#menu ul:first').show();
      $('#menu li a').click(
        function() {
          var checkElement = $(this).next();
          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            return false;
            }
          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
            return false;
            }
          }
        );
      }
    $(document).ready(function() {initMenu();});

    
//    $("#menu-toggle").click(function (e) {
//        e.preventDefault();
//        $("#wrapper").toggleClass("toggled");
//    });
//
//    $(".bootstrap-switch-handle-on").html("Sim");
//    $(".bootstrap-switch-handle-off").html("Não");
//    
//    
//    
//     $("#troca-estado").click(function(){
//        var btn = $(this);
//        btn.button("loading");
//        
//        
//        
//        setTimeout(function(){
//            //btn.button("reset");
//            var kwh_relogio = $("#kwh_relogio").val();
//             window.location.href = "/index.php/calculo/calcular?kwh="+kwh_relogio;
//        }, 2000);
//        
//       
//    });
 

});
