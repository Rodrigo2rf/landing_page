
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
            Fone 55 (84) 4009 5501 | sec.depecom@liga.org.br
        </div>
    </div>

    <div class="container-fluid menu-mobile">
        <div class="container">
            <a class="menu-link" href="#menu"><i class="material-icons">menu</i></a>
            <a href="<?=url_index?>">
            <img src="<?=url_index?>/assets/img/logo.png" height="50px" alt="Liga Contra o Câncer" title="Liga Contra o Câncer"></a>
        </div>
    </div>

    <!-- Barra de menu -->
    <div class="container-fluid barra-menu d-flex">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-2 d-flex align-items-center text-left">
                    <a href="<?=url_index?>"><img src="<?=url_index?>/assets/img/logo.png" height="50px" alt="Liga Contra o Câncer" title="Liga Contra o Câncer"></a>
                </div>
                <div class="col-md-10">
                    <div class="col-md-1 bt-login no-gutters float-right">
                        <a class="text-center" href="<?=url_moodle?>">Login</a>
                    </div>
                    <div class="menu-horizontal float-right">
                        <ul class="list-inline icons-redes-sociais text-center">
                            <li class="list-inline-item m-0">
                                <a href="#"><img class="ml-3" src="<?=url_index?>/assets/img/icones_redes_sociais/facebook_gray.svg"></a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a href="#"><img class="ml-3" src="<?=url_index?>/assets/img/icones_redes_sociais/instagram_gray.svg"></a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a href="#"><img class="ml-3 mr-3" src="<?=url_index?>/assets/img/icones_redes_sociais/twitter_gray.svg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="float-right">
                        <div class="menu-horizontal no-gutters float-right"><a href="<?=url_contato?>" class="pr-3 pl-3">Contato</a></div>
                            <div class="menu-horizontal no-gutters float-right"><a href="<?=url_calendario?>" class="pr-3 pl-3">Calendário</a></div>
                            <div class="menu-horizontal no-gutters dropdown float-right">
                                <a href="<?=url_eventos?>" class="pr-3 pl-3">Eventos</a>
                                <div class="dropdown-content text-left">
                                    <a href="<?=url_eve_congressos?>">Congessos</a>
                                    <a href="<?=url_eve_simposios?>">Simpósios</a>
                                    <a href="<?=url_eve_jornadas?>">Jornadas</a>
                                </div>
                            </div>
                            <div class="menu-horizontal no-gutters dropdown float-right">
                                <a href="<?=url_residencia?>" class="pr-3 pl-3">Residência</a>
                                <div class="dropdown-content text-left">
                                    <a href="<?=url_res_medica?>">Médica</a>
                                    <a href="<?=url_res_multidisciplinar?>">Multidisciplinar</a>
                                </div>
                            </div>
                            <div class="menu-horizontal no-gutters dropdown float-right">
                                <a href="<?=url_cursos?>" class="pr-3 pl-3">Cursos</a>
                                <div class="dropdown-content text-left">
                                    <a href="<?=url_cur_tecnico?>">Técnicos</a>
                                    <a href="<?=url_cur_posgraduacao?>">Pós-Graduação</a>
                                    <a href="<?=url_cur_atualizacao?>">Atualização</a>
                                </div>
                            </div>
                            <div class="menu-horizontal no-gutters float-right"><a href="<?=url_index?>" class="pr-3 pl-3">Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
