$('#clock').countdown('2015/05/31', function(event) {
   var $this = $(this).html(event.strftime(''
     + '<span>%D</span> päeva '
     + '<span>%H</span> tundi '
     + '<span>%M</span> minutit ja '
     + '<span>%S</span> sekundit'));
 });

 $(document).ready(function() {
 $("#otsingunupp").click( function()
           {
             $( "#parameetrid" ).show();
           }
      );
});
