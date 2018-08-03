      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
      <script src="assets/js/jquery.min.js"></script>
      
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- <script src="https://cdn.jsdelivr.net/npm/babel-polyfill/dist/polyfill.min.js"></script> -->

      <script src="assets/js/vuetify.min.js"></script>
      <script src="assets/js/moment.min.js"></script>

      <script src="assets/js/jquery-ui.min.js"></script>
      <script src="assets/js/init.js"></script>

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