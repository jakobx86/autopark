$( document ).ready(function() {
    $(".menus").click(function() {
        if($('input[name="carnumber"]').length!=1 && $('input[name="drivername"]').length!=1)
        {
            $('input[name="carnumber"]').last().remove(); 
            $('input[name="drivername"]').last().remove(); 
        }       
    });
    $(".plus").click(function() {
        $(".car-number").append('<input type="text" name="carnumber[]">');
        $(".driver-name").append('<input type="text" name="drivername[]">');
    });
    $('.autopark-list li a').click(function(e) {
        e.preventDefault();
        if(!$(this).closest("ul.dropdawn").hasClass('active'))
        {
            $(this).closest("ul.dropdawn").slideDown("slow");
            $(this).closest("ul.dropdawn").toggleClass("active");
        }
        else 
        {
            $(this).closest("ul.dropdawn").slideUp("slow");
            $(this).closest("ul.dropdawn").toggleClass("active");
        }
      });

  });