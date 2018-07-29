      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

      <script src="assets/js/init.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


      <link rel="stylesheet" href="assets/css/dist/style.css">
      <link rel="stylesheet" href="assets/css/dist/style_jcarousel.css">

        <script>
          $(document).ready(function(){
            
            $('.ir-para-topo').click(function() {      
                $('body,html').animate({
                    scrollTop : 0           
                }, 500);
            });
            setTimeout( function(){
              $.getScript('assets/js/jquery.jcarousel.min.js');
              $.getScript('assets/js/jcarousel.responsive.js');
              var inicial = 1;
              var gatilho = 0;
              $(".carousel-item" ).each(function() {
                if(inicial == 1){
                  $(".carousel-item").first().addClass('active');
                }
                inicial++;
              });
              $(".gatilhos-slide").each(function(){
                if(gatilho == 0){
                  $(".gatilhos-slide").first().addClass('active');
                }
                gatilho++;
              });
            }, 1000);
          });



        </script>
    </body>
</html>