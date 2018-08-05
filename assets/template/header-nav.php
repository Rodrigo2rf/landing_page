
<nav id="menu" class="panel" role="navigation">
<div class="menu-list">
      <!-- menu -->
      <div id="MainMenu">
        <div class="list-group panel">
          <a href="<?=url_index?>" class="list-group-item" data-parent="#MainMenu">Home</a>
          <a href="#cursos" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Cursos<i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="cursos">
            <a href="<?=url_redirect_presencial?>" class="list-group-item" style="background:#005e34; padding-left:35px;">Presenciais</a>
            <a href="<?=url_redirect_semipresencial?>" class="list-group-item" style="background:#005e34; padding-left:35px;">Semi-presenciais</a>
            <a href="<?=url_redirect_ead?>" class="list-group-item" style="background:#005e34; padding-left:35px;">À distância</a>
          </div>
          <a href="<?=url_moodle?>" class="list-group-item" data-parent="#MainMenu">Login</a>
        </div>
      </div>
</div>
</nav>

<div class="wrap push">

    <!-- Barra contato -->
<div id="topo" class="container-fluid barra-contato text-white d-flex align-items-center">
    <div class="container text-right">
    Fone 55 (84) 9999 9999 | contato@contato.com.br
    </div>
</div>

<div class="container-fluid menu-mobile">
    <div class="container">
<a class="menu-link" href="#menu"><i class="material-icons">menu</i></a>
<a href="<?=url_index?>">
<img src="assets/img/logo.png" height="50px" alt="Liga Contra o Câncer" title="Liga Contra o Câncer"></a>
</div>
</div>

<!-- Barra de menu -->
<div class="container-fluid barra-menu d-flex">
    <div class="container">
    <div class="row text-center">
        <div class="col-md-2 d-flex align-items-center">
            <a href="<?=url_site?>"><img src="assets/img/logo.png" height="50px" alt="Liga Contra o Câncer" title="Liga Contra o Câncer"></a>
        </div>
        <div class="col-md-1 offset-md-2 menu-horizontal no-gutters"><a href="<?=url_index?>">Home</a></div>
        <div class="col-md-1 menu-horizontal no-gutters dropdown">
            <a href="#">Cursos</a>
            <div class="dropdown-content text-left">
                <a href="<?=url_curso_presencial?>">Presenciais</a>
                <a href="<?=url_curso_semipresencial?>">Semi-Presenciais</a>
                <a href="<?=url_curso_ead?>">À distância</a>
            </div>
        </div>
        <div class="col-md-1 menu-horizontal no-gutters"><a href="<?=url_calendario?>">Agenda</a></div>
        <div class="col-md-1 menu-horizontal no-gutters"><a href="<?=url_contato?>">Contato</a></div>
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
            </ul>
        </div>
        <div class="col-md-2 bt-login no-gutters">
            <a class="text-center" href="<?=url_moodle?>">login</a>
        </div>
    </div>
    </div>
</div>