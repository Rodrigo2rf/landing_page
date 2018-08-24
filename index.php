<?php
    require('template/header.php');
    require('template/header-nav.php');
?>

<!-- SLIDER --> 
<header id="showcase_landing_page">
   <div class="barra-pesquisar d-none d-sm-block">
     <form action="cursos.php" method="get">
       <input name="c" type="text">
       <button><img src="assets/img/icone_marcacao/search.svg"></button>
     </form>
   </div>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li v-for="(item, index) in imagensShowcase" data-target="#carouselExampleIndicators" data-slide-to="{{index}}" class="gatilhos-slide"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <div v-for="(item, index) in imagensShowcase" class="carousel-item" :style="{ backgroundImage: 'url(http://eadh.liga.org.br/moodle/' + item.imgpath + ' )' } ">
        <a :href="item.href" v-if="item.href" class="link_slideshow" target="_blank"></a>
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

<!-- EXIBICAO DE CURSOS -->
<div id="sessoes">
  
  <!-- -->
  <section class="container-fluid bg-white">
    <div class="container container-cursos">
      <div class="row">
         <div :class="['col-md-'+qtdCursos.conteudo]">
            <h3 class="color-green">Cursos</h3>
            <p class="pt-2 pb-2">Cursos oferecidos no modelo tradicional, nessa modalidade as aulas serão ministradas dentro das dependências da Escola de Oncologia.</p>
            <a class="btn btn-liga btn-type-1 float-md-right" href="<?=url_cursos?>?q=2">Acessar</a>
         </div>
         <div :class="['col-md-'+qtdCursos.todosCursos]" v-if="qtdCursos.conteudo < 12">
            <div class="wrapper">
               <div class="jcarousel-wrapper">
                  <div class="jcarousel">
                     <ul class="lista-cursos">
                        <li v-for="item in cursos" class="col-md-4 pt-2 pb-2">
                           <a :href="'/landing_page/curso.php?q=' + item.id">
                              <div class="card">
                                <span class="info-matricula" v-if="item.matricula == true">Matrículas abertas</span>
                                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + item.img_capa_curso + ')' }"></div>
                                <div class="card-body">
                                  <h6 class="color-green">{{ item.fullname }}</h6>
                                  <p class="card-text" v-html="item.descricao"></p>
                                </div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div v-if="qtdCursos.qtd >= 4" class="d-block">
                     <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                     <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination"></p>
                  </div>
                  <div v-if="qtdCursos.qtd == 3" class="visible-smaller-lg">
                     <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                     <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination"></p>
                  </div>
                  <div v-if="qtdCursos.qtd == 2" class="visible-only-xs">
                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    <p class="jcarousel-pagination"></p>
                  </div>
               </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- -->


  <!-- RESIDENCIAS -->
  <section class="container-fluid bg-soft-blue">
    <div class="container container-cursos">
      <div class="row">
        <div :class="['order-2 col-md-'+qtdResidencias.todosResidencias]" v-if="qtdResidencias.conteudo < 12">      
          <div class="wrapper">
            <div class="jcarousel-wrapper">
              <div class="jcarousel">
                <ul class="lista-cursos">
                  <li v-for="residencia in residencias"  class="col-md-4 pt-2 pb-2">
                    <a :href="'/landing_page/curso.php?q=' + residencia.id">
                      <div class="card">
                        <span class="info-matricula" v-if="residencia.matricula == true">Matrículas abertas</span>
                        <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + residencia.img_capa_curso + ')' }"></div>
                        <div class="card-body">
                          <h6 class="color-green">{{ residencia.fullname }}</h6>
                          <p class="card-text" v-html="residencia.descricao"></p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div v-if="qtdResidencias.qtd >= 4" class="d-block">
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
              </div>
              <div v-if="qtdResidencias.qtd == 3" class="visible-smaller-lg">
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
              </div>
              <div v-if="qtdResidencias.qtd == 2" class="visible-only-xs">
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
              </div>
            </div>
          </div>    
        </div>
        <div :class="['order-1 order-md-12 col-md-'+qtdResidencias.conteudo]">
        <h3 class="color-green">Residência</h3>
            <p class="pt-2 pb-2">Cursos oferecidos no modelo tradicional, nessa modalidade as aulas serão ministradas dentro das dependências da Escola de Oncologia.</p>
          <a class="btn btn-liga btn-type-1 float-md-right" href="<?=url_cursos?>?q=3">Acessar</a>
        </div>
      </div>
    </div>
  </section>
  <!-- -->


  <!-- EVENTOS -->
  <section class="container-fluid bg-white">
    <div class="container container-cursos">
      <div class="row">
         <div :class="['col-md-'+qtdEventos.conteudo]">
            <h3 class="color-green">Eventos</h3>
            <p class="pt-2 pb-2">Nessa modalidade a escola ferece uma parte das aulas em formato presencial e a outra parte a distância.</p>
            <a class="btn btn-liga btn-type-1 float-md-right" href="<?=url_cursos?>?q=2">Acessar</a>
         </div>
         <div :class="['col-md-'+qtdEventos.todosEventos]" v-if="qtdEventos.conteudo < 12">
            <div class="wrapper">
               <div class="jcarousel-wrapper">
                  <div class="jcarousel">
                     <ul class="lista-cursos">
                        <li v-for="evento in eventos" class="col-md-4 pt-2 pb-2">
                           <a :href="'/landing_page/curso.php?q=' + evento.id">
                              <div class="card">
                              <span class="info-matricula" v-if="evento.matricula == true">Matrículas abertas</span>
                                 <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + evento.img_capa_curso + ')' }"></div>
                                 <div class="card-body">
                                    <h6 class="color-green">{{ evento.fullname }}</h6>
                                    <p class="card-text" v-html="evento.descricao"></p>
                                 </div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div v-if="qtdEventos.qtd >= 4" class="d-block">
                     <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                     <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination"></p>
                  </div>
                  <div v-if="qtdEventos.qtd == 3" class="visible-smaller-lg">
                     <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                     <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination"></p>
                  </div>
                  <div v-if="qtdEventos.qtd == 2" class="visible-only-xs">
                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    <p class="jcarousel-pagination"></p>
                  </div>
               </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- -->
  
</div>


<!-- calendario -->
<section id="calendario" class="container-fluid bg-soft-blue">
   <div class="container">
      <div class="row">
        <v-app id="inspire">
            <v-layout wrap>
              <div class="col-md-6 col-sm-12 mb-2">
                  <h3 class="color-green text-left">Calendário</h3>
                  <p class="text-left">Acompanhe o nosso calendário de cursos e eventos organizados pela Escola de Oncologia.</p>
                  <v-date-picker ref="picker" v-model="date" :picker-date.sync="pickerDate" full-width></v-date-picker>
              </div>
              <div class="col-md-6 col-sm-12">
                <div v-if="quantidadeRegistros > 0">
                  <div class="col-12 eventos-calendario" v-for="note in allNotes">
                    <div class="col-sm-2 show-date text-center" style="float:left" v-html="$options.filters.tratar_data(note.timestart)"></div>
                    <div class="col-sm-10 show-info" style="float:right">
                      <span v-html="note.name" class="titulo"></span>
                      <span v-html="note.description"></span>
                    </div>
                  </div> 
                </div>
                <div v-if="quantidadeRegistros <= 0">
                  <p class="mt-2 text-danger"><b>Nenhum evento encontrado!</b></p>
                </div>
              </div>
            </v-layout>
        </v-app>
      </div>
   </div>
</section>
<!-- -->



<!-- Depoimento alunos -->
<section id="comentarios-alunos" class="container-fluid">
   <div class="container container-cursos">
      <div class="col">
         <h3 class="color-green text-center pb-3">DEPOIMENTOS DE NOSSOS ALUNOS</h3>
      </div>
      <div class="row">
        <div v-if="quantidadeRegistros > 0" class="col-md-12">
          
          
            <div class="wrapper">
               <div class="jcarousel-wrapper">
                  <div class="jcarousel">
                     <ul class="lista-cursos depoimentos">
                        <li v-for="msg in msnEnviadas"  class="col-md-4 pt-2 pb-2">
                           <div class="card">
                              <div class="card-body">
                                 <p class="card-text text-left">"{{ msg.message }}"</p>
                                 <span>{{ msg.timecreated | formatar_data }} - {{ msg.fullname }}</span>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div v-if="quantidadeRegistros >= 4" class="d-block">
                     <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                     <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination"></p>
                  </div>
                  <div v-if="quantidadeRegistros == 3" class="visible-smaller-lg">
                     <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                     <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination"></p>
                  </div>
                  <div v-if="quantidadeRegistros == 2" class="visible-only-xs">
                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    <p class="jcarousel-pagination"></p>
                  </div>
               </div>
            </div>
            

        </div>
        <div v-if="quantidadeRegistros < 1" class="col-md-12">
          <p class="text-danger">Nenhum depoimento encontrato!</p>
        </div>
      </div>
   </div>
</section>
<!-- -->



<!-- Formulario contato sugestao -->
<section id="contato" class="container-fluid parallax">
  <div class="container"> 
    <div class="row">
      <div class="col-md-7 d-flex align-items-center">
        <h3 class="color-white">Ficou com alguma dúvida? Então entre em contato conosco.</h3>
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
</section>
<!-- -->



<!-- Apoio -->
<section class="container">
   <div class="row">
      <div class="col-md-12 pb-3 text-center">
         <h3 class="color-green">Apoio</h3>
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
</section>
<!-- -->

<?php
  require('template/footer-nav.php');
  require('template/footer-script-index.php');
  require('template/footer.php');
?>