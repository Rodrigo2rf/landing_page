<?php
  
  require('assets/template/header.php');
  require('assets/template/header-nav.php');

?>

      <!-- SLIDER -->
      <header id="showcase_landing_page">
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
      </header>
      
      <!-- PRESENCIAL -->
      <div id="lista-cursos-presenciais" class="container-fluid bg-white">
        <div class="container container-cursos">
          <div class="row">
          <div :class="['col-md-'+quantidadeRegistros.conteudo]">
              <h4 class="color-green">Cursos Presenciais</h4>
              <p class="pt-2 pb-2">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit endrerit. Aenean sit amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento de achacis, eu reclamis. Cevadis im ampola pa arma uma pindureta.</p>
              <a class="btn btn-liga btn-type-1 float-md-right" href="cursos.php?q=1">Acessar</a>
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


      <!-- SEMI-PRESENCIAL -->
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
                  <a class="btn btn-liga btn-type-1 float-md-right" href="cursos.php?q=2">Acessar</a>
               </div>
            </div>
         </div>
      </div>
      <!-- -->

      <!-- EAD -->
      <div id="lista-cursos-ead" class="container-fluid bg-white">
         <div class="container container-cursos">
            <div class="row">
              <div :class="['col-md-'+quantidadeRegistros.conteudo]">
                  <h4 class="color-green">Cursos Presenciais</h4>
                  <p class="pt-2 pb-2">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit
                     amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento de cachacis, eu reclamis. Cevadis im
                     ampola pa arma uma pindureta.
                  </p>
                  <a class="btn btn-liga btn-type-1 float-md-right" href="cursos.php?q=3">Acessar</a>
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
            <div id="calendar"></div>
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
      
<?php
  require('assets/template/footer-nav.php');
  require('assets/template/footer.php');
?>
