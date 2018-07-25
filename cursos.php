<?php
  
  require('assets/template/header.php');
  require('assets/template/header-nav.php');

?>

<section id="info-cursos" class="container-fluid">
    <div class="offset-md-2 col-md-8 mb-5">
        <h2 class="text-light mb-5">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero</h2>
        <p class="text-light">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Si num tem leite então bota uma pinga aí cumpadi! Per aumento.</p>
    </div>    
    <div class="barra-pesquisar">
        <form>
        <input type="text">
        <button><img src="assets/img/icone_marcacao/search.svg"></button>
        </form>
    </div>
    
    <div class="row justify-content-center menu-de-cursos">
        <a href="#" class="link-menu-de-cursos col-md-2">
            Cursos<br>Presenciais
        </a>
        <a href="#" class="link-menu-de-cursos col-md-2">
            Cursos<br>Semipresenciais
        </a>
        <a href="#" class="link-menu-de-cursos col-md-2"> 
            Cursos<br>online / EAD
        </a>
    </div>
</section>

<section id="show_courses" class="container container-cursos">
    <div class="row">    

            <div v-if="!showList" color="error">
                Não existe existem bugs.
            </div>

            <div v-if="showList">
                <ul class="lista-cursos">
                    <li v-for="item in result" class="col-md-3 pt-2 pb-4">
                        <a href="#">
                        <div class="card">
                            <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + item.img_capa_curso + ')' }"></div>

                            <div class="card-body">
                                <h5>{{ item.fullname }}</h5>
                            <p class="card-text">
                            {{ item.summary | tratar_string }}</p>
                            </div>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
    </div>
</section>

<?php

  require('assets/template/footer-nav.php');
  require('assets/template/footer.php');

?>