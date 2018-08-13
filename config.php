<?php

    // URL Paginas
    
    define("url_site",      "http://eadh.liga.org.br");
    // define("url_site", "http://localhost");
    
    define("url_index", url_site."/landing_page");    
    define("url_calendario", url_site."/landing_page/index.php#calendario");
    define("url_contato", url_site."/landing_page/index.php#contato");

    define("url_curso_presencial", url_site."/landing_page/index.php#lista-cursos-presenciais");
    define("url_curso_semipresencial", url_site."/landing_page/index.php#lista-cursos-semi-presenciais");
    define("url_curso_ead", url_site."/landing_page/index.php#lista-cursos-ead");
    define("url_cursos", url_site."/landing_page/cursos.php");

    define("url_redirect_presencial", url_cursos."?q=2#trocar-modalidade");
    define("url_redirect_semipresencial", url_cursos."?q=3#trocar-modalidade");
    define("url_redirect_ead", url_cursos."?q=4#trocar-modalidade");   
    define("url_moodle", url_site."/moodle");

?>