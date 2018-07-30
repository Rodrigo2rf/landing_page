<?php
  
  require('assets/template/header.php');
  require('assets/template/header-nav.php');

?>

<div id="app">

<section id="info-cursos" class="container-fluid">
    <div class="offset-md-2 col-md-8 mb-5">
        <h2 class="text-light mb-5">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero</h2>
        <p class="text-light">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento.</p>
    </div>    
    <div class="barra-pesquisar">
        <input type="text" placeholder="Pesquisar curso" v-model="filter_fullname">
    </div>

      
    <div class="row justify-content-center menu-de-cursos">
         <a href="#" class="link-menu-de-cursos col-md-2 text-center">
            Cursos<br>Presenciais
        </a>
        <a href="#" class="link-menu-de-cursos col-md-2 text-center">
            Cursos<br>Semipresenciais
        </a>
        <a href="#" class="link-menu-de-cursos col-md-2 text-center"> 
            Cursos<br>online / EAD
        </a> 
    </div>

</section>

<section class="container container-cursos">
     
        <div v-if="!showList" color="error">
            Nenhum curso encontrado.
        </div>
        <div v-if="showList"> 
            <div class="row">
                <ul class="lista-cursos">
                    <li v-for="(curso, index) in filteredRows.slice(pageStart, pageStart + countOfPage)" class="col-md-3 pt-2 pb-4">
                        
                        <a :href="'/landing_page/curso.php?q=' + curso.id">
                        <div class="card">
                            <div class="card-img background-img mb-2 mt-4"></div>
                            <div class="card-body">
                                <h5>{{ curso.fullname }}</h5>
                            <p class="card-text">
                                {{ curso.summary | tratar_string }}</p>
                            </div>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item" v-bind:class="{'disabled': (currPage === 1)}" @click.prevent="setPage(currPage-1)"><a class="page-link" href="">Prev</a></li>
                <li class="page-item" v-for="n in totalPage" v-bind:class="{'active': (currPage === (n))}" @click.prevent="setPage(n)"><a class="page-link" href="">{{n}}</a></li>
                <li class="page-item" v-bind:class="{'disabled': (currPage === totalPage)}" @click.prevent="setPage(currPage+1)"><a class="page-link" href="">Next</a></li>
                </ul>
            </nav>
        </div>
</section>

</div>

 <script src="assets/js/init_cursos.js"></script>

<?php

  require('assets/template/footer-nav.php');
  require('assets/template/footer.php');

?>