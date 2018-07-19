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

<section class="container container-cursos">
            <div class="row">    
    <!-- <ul class="lista-cursos">
        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>

        <li class="col-md-3 pt-2 pb-4">
            <a href="#">
            <div class="card">
                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + semiPresencial.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867 )' } ">
                </div>
                <div class="card-body">
                <h5>semiPresencial.fullname</h5>
                <p class="card-text">
                semiPresencial.summary | tratar_string</p>
                </div>
            </div>
            </a>
        </li>
    </ul> -->
</div>
</section>

<?php

  require('assets/template/footer-nav.php');
  require('assets/template/footer.php');

?>