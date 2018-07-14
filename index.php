<!doctype html>
<html lang="pt-br">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      
      <!-- Custom styles for this template -->
      <link href="assets/css/dist/full-slider.css" rel="stylesheet">      
      <script src="https://cdn.jsdelivr.net/npm/vue"></script>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script> 

      <link rel="icon" href="assets/img/favicon.png">
      <title>Moodle Liga</title>
  </head>
  <body>

      <!-- Barra contato -->
      <div id="topo" class="container-fluid barra-contato text-white d-flex align-items-center">
         <div class="container text-right">
            Fone 55 (84) 9999 9999 | contato@contato.com.br
         </div>
      </div>
      

      <!-- Barra de menu -->
      <div class="container-fluid barra-menu d-flex">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-2 d-flex align-items-center">logo</div>
               <div class="col-md-1 offset-md-2 menu-horizontal no-gutters"><a href="">Home</a></div>
               <div class="col-md-1 menu-horizontal no-gutters"><a href="">Curso</a></div>
               <div class="col-md-1 menu-horizontal no-gutters"><a href="">Calendário</a></div>
               <div class="col-md-1 menu-horizontal no-gutters"><a href="">Contato</a></div>
               <div class="col-md-2 menu-horizontal">
                  <ul class="list-inline icons-redes-sociais text-center">
                      <li class="list-inline-item">
                        <a href="#"><img src="assets/img/icones_redes_sociais/facebook_gray.svg"></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#"><img src="assets/img/icones_redes_sociais/instagram_gray.svg"></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#"><img src="assets/img/icones_redes_sociais/twitter_gray.svg"></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#"><img src="assets/img/icones_redes_sociais/youtube_gray.svg"></a>
                      </li>
                    </ul>
               </div>
               <div class="col-md-2 bt-login no-gutters">
                  <a class="text-center" href="#">login</a>
               </div>
            </div>
         </div>
      </div>



      <!-- <header id="showcase_landing_page">

        <div class="barra-pesquisar">
          <form>
            <input type="text">
            <button><img src="assets/img/icone_marcacao/search.svg"></button>
          </form>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li v-for="(item, index) in imagensShowcase" data-target="#carouselExampleIndicators" data-slide-to="{{index}}" class="gatilhos-slide"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div  v-for="(item, index) in imagensShowcase" class="carousel-item" :style="{ backgroundImage: 'url(http://eadh.liga.org.br/moodle/' + item.imgpath + ' )' } ">
            </div> 
          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header> -->
      
          <!-- Conteudo -->
          <div id="lista-cursos-presenciais" class="container-fluid bg-white">
            <div class="container container-cursos">
              <div class="row">
              <div :class="['col-md-'+quantidadeRegistros.conteudo]">
                  <h4 class="color-green">Cursos Presenciais</h4>
                  <p class="pt-2 pb-2">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit endrerit. Aenean sit amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento de achacis, eu reclamis. Cevadis im ampola pa arma uma pindureta.</p>
                  <a class="btn btn-liga btn-type-1 float-md-right" href="#">Acessar</a>
                </div>
                <div :class="['col-md-'+quantidadeRegistros.cursos]" v-if="quantidadeRegistros.conteudo < 12">
                  <!-- Carousel -->
                  <div class="wrapper">
                     <div class="jcarousel-wrapper">
                        <div class="jcarousel">
                          <ul class="lista-cursos">
                            <li v-for="item in listCursosPresenciais" class="col-md-4 pt-2 pb-2">
                              <a href="#">
                                <div class="card">
                                  <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + item.img_capa_curso + ')' }"></div>
                                  <div class="card-body">
                                    <h5>{{ item.fullname }}</h5>
                                    <p class="card-text">{{ item.summary | tratar_string }}</p>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div v-if="quantidadeRegistros > 3">
                          <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                          <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                          <p class="jcarousel-pagination"></p>
                        </div>
                      </div>
                  </div>
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
          <!-- -->


      <!-- Conteudo -->
      <div id="lista-cursos-semi-presenciais" class="container-fluid bg-soft-blue">
         <div class="container container-cursos">
            <div class="row">
            <div :class="['col-md-'+quantidadeRegistros.cursos]" v-if="quantidadeRegistros.conteudo < 12">
                  <!-- Carousel -->
                  <div class="wrapper">
                     <div class="jcarousel-wrapper">
                        <div class="jcarousel">

                          <ul class="lista-cursos">
                            <li v-for="semiPresencial in listCursosSemiPresenciais"  class="col-md-4 pt-2 pb-2">
                              <a href="#">
                                <div class="card">
                                  <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                                  </div>
                                  <div class="card-body">
                                    <h5>{{ semiPresencial.fullname }}</h5>
                                    <p class="card-text">
                                    {{ semiPresencial.summary | tratar_string }}</p>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>

                        </div>
                        <div v-if="quantidadeRegistros > 3">
                          <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                          <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                          <p class="jcarousel-pagination"></p>
                        </div>
                     </div>
                  </div>
                  <!-- -->
               </div>
              <div :class="['col-md-'+quantidadeRegistros.conteudo]">
                  <h4 class="color-green">Cursos Presenciais</h4>
                  <p class="pt-2 pb-2">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit
                     amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento de cachacis, eu reclamis. Cevadis im
                     ampola pa arma uma pindureta.
                  </p>
                  <a class="btn btn-liga btn-type-1 float-md-right" href="#">Acessar</a>
               </div>
            </div>
         </div>
      </div>
      <!-- -->

      <!-- Conteudo -->
      <div id="lista-cursos-ead" class="container-fluid bg-white">
         <div class="container container-cursos">
            <div class="row">
              <div :class="['col-md-'+quantidadeRegistros.conteudo]">
                  <h4 class="color-green">Cursos Presenciais</h4>
                  <p class="pt-2 pb-2">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit
                     amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento de cachacis, eu reclamis. Cevadis im
                     ampola pa arma uma pindureta.
                  </p>
                  <a class="btn btn-liga btn-type-1 float-md-right" href="#">Acessar</a>
               </div>


                <div :class="['col-md-'+quantidadeRegistros.cursos]" v-if="quantidadeRegistros.conteudo < 12">                  <!-- Carousel -->
                  <div class="wrapper">
                    <div class="jcarousel-wrapper">
                      <div class="jcarousel">
                        <ul  class="lista-cursos">
                          <li v-for="ead in listCursosEAD"  class="col-md-4 pt-2 pb-2">
                            <a href="#">
                              <div class="card">
                                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + ead.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                                </div>
                                <div class="card-body">
                                  <h5>{{ ead.fullname }}</h5>
                                  <p class="card-text">
                                  {{ ead.summary | tratar_string }}</p>
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <div v-if="quantidadeRegistros > 3">
                          <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                          <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                          <p class="jcarousel-pagination"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- -->
               </div>

            </div>
         </div>
      </div>
      <!-- -->

      <!-- calendario -->
      <div class="container-fluid bg-soft-blue pt-5 pb-5">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <h4 class="color-green">Agenda</h4>
                <p class="pt-3 pb-3">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento de cachacis, eu reclamis. Cevadis im ampola pa arma uma pindureta.</p>
              </div>
              <div class="col-md-7"></div>
            </div>
          </div>
      </div>
      <!-- -->

      <!-- Depoimento alunos -->
      <div class="container pt-3 pb-3">
        <div class="row">
          <div class="col">
            <h3 class="color-green text-center">DEPOIMENTOS DE NOSSOS ALUNOS</h3>
          </div>
        </div>
      </div>
      <!-- -->

      <!-- Formulario contato sugestao -->
      <div class="container-fluid parallax">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-flex align-items-center">
              <h3 class="color-white">"Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi." Si num</h3>
            </div>
            <div class="col-md-5">
              <form class="formulario-contato-index">
                <textarea placeholder="Mensagem"></textarea>
                <input type="text" placeholder="Email">
                <button class="btn btn-liga btn-type-2 float-md-right" type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- -->
      
      <!-- Apoio -->
      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 pb-3 text-center">
              <h4 class="color-green">Apoio</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <img src="assets/img/freepik.jpg">
                </li>
                <li class="list-inline-item">
                    <img src="assets/img/freepik.jpg">
                </li>
                <li class="list-inline-item">
                    <img src="assets/img/freepik.jpg">
                </li>
                <li class="list-inline-item">
                    <img src="assets/img/freepik.jpg">
                </li>
                <li class="list-inline-item">
                    <img src="assets/img/freepik.jpg">
                </li>
              </ul>
            </div>
        </div>
      </div>
      <!-- -->
      
      <!-- Rodape -->
      <div class="container-fluid container-rodape pt-5 pb-2">

        <a href="javascript:">
          <div class="ir-para-topo">
            <img src="assets/img/icone_marcacao/arrow-up.svg"> 
          </div>
        </a>

        <div class="container">
          <div class="row">
            <div class="col-md-3 info-endereco">
              <p><strong>Endereço</strong></p>
              <p>Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit</p>
              <p><strong>Fone: 55 (84) 9999 9999<br>contato@contato.com.br</strong></p>
            </div>
            <div class="col offset-md-1"><p><strong>Home</strong></p></div>
            <div class="col-md-2">
              <p><strong>Cursos</strong></p>
              <ul>
                <li><a href="#">Cursos Presencias</a></li>
                <li><a href="#">Cursos Semipresencias</a></li>
                <li><a href="#">Cursos Online/EAD</a></li>
              </ul>
            </div>
            
            <div class="col"><p><strong>Calendário</strong></p></div>
            
            <div class="col"><p><strong>Contato</strong></p></div>

            <div class="col-md-2">
                <ul class="list-inline icons-redes-sociais text-right">
                    <li class="list-inline-item">
                        <a href="#"><img src="assets/img/icones_redes_sociais/facebook.svg"></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#"><img src="assets/img/icones_redes_sociais/instagram.svg"></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#"><img src="assets/img/icones_redes_sociais/twitter.svg"></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#"><img src="assets/img/icones_redes_sociais/youtube.svg"></a>
                      </li>
                  </ul>
            </div>
          </div>
          
          <div class="row justify-content-end copyright">
            <div class="col-4 text-center">
              <p>Copyright | Liga Contra o Cancer</p>
            </div>
            <div class="col-4 text-right">
              <p>Desenvolvido por Rodrigo Reinaldo e Lúcio Silva</p>
            </div>
          </div>
        </div>
      </div>
      <!-- -->


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