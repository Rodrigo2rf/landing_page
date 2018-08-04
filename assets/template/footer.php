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