        <script>
            $(document).ready(function(){

                $('.menu-link').bigSlide();
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 300) {
                        $('.ir-para-topo').fadeIn();
                    } else {
                        $('.ir-para-topo').fadeOut();
                    }
                });
                
                //Click event to scroll to top
                $('.ir-para-topo').click(function(){
                    $('html, body').animate({scrollTop : 0},800);
                    return false;
                });
                
                $('.ir-para-topo').click(function() {      
                    $('body,html').animate({
                        scrollTop : 0           
                    }, 500);
                });

                $('.sub-menu-categoria').click(function(){
                    $('.sub-menu-categoria').removeClass('active');
                    $(this).addClass('active');
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