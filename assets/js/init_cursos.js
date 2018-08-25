/**
 * 
 * RECUPERAR PARAMS DA URL
 * 
 */
var router = new VueRouter({
    mode: 'history',
    routes: []
});


/**
 * 
 * PAGINA: CURSOS
 * SESSAO: EXIBIR CURSOS
 * 
 */
var app = new Vue({
    el: '#app',
    router,
    data: {
        rows: [],
        cursos: [],
        countOfPage: 40,
        currPage: 1,
        filter_fullname: '',
        categoryid : ''
    },
    filters: {
        tratar_string (text) {
            var count = 150;
            return text.slice(0, count) + (text.length > count ? "..." : "");
        },  
    },
    watch: {
        rows: function () {
            this.cursos = [];
            for(var i=0; i < this.rows.length; i++){
                if( categoryid == 6 ){
                    if( this.rows[i].categoryid >= 6 && this.rows[i].categoryid <= 15 ){
                        this.mount_info( this.rows[i] );
                    }
                }
                if( categoryid == 7 ){
                    if( this.rows[i].categoryid >= 7 && this.rows[i].categoryid <= 9 ){
                        this.mount_info( this.rows[i] );
                    }
                }
                if( categoryid == 10 ){
                    if( this.rows[i].categoryid >= 10 && this.rows[i].categoryid <= 12 ){
                        this.mount_info( this.rows[i] );
                    }
                }
                if( categoryid == 13 ){
                    if( this.rows[i].categoryid >= 13 && this.rows[i].categoryid <= 15 ){
                        this.mount_info( this.rows[i] );
                    }
                }
            }
        }
    },
    computed: { 
        showList: function(){
            return this.cursos.length > 0;         
        },
        filteredRows: function(){
            var filter_fullname = this.filter_fullname.toLowerCase();
            return ( this.filter_fullname.trim() !== '' ) ? 
            this.cursos.filter(function(d){ return d.fullname.toLowerCase().indexOf(filter_fullname) > -1; }) : 
            this.cursos;
        },
        pageStart: function(){
            return (this.currPage - 1) * this.countOfPage;
        },
        totalPage: function(){
            return Math.ceil(this.filteredRows.length / this.countOfPage);
        },
        limpar_consulta: function(){
            if( this.$route.query.c != null ){
                return limpar_consulta = 0;
            }
        }
    },
    methods: {
        setPage: function(idx){
            if( idx <= 0 || idx > this.totalPage ){
                return;
            }
            this.currPage = idx;
        },
        getCursos: function( categoryid ){
            this.init( categoryid );
        },
        init: function( categoryid ){
            if ( categoryid == 6 || categoryid == 7 || categoryid == 10 || categoryid == 13 || categoryid == null ){ 
                url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
            } else if ( categoryid == 8 || categoryid == 9 || categoryid == 11 || categoryid == 12 || categoryid == 14 || categoryid == 15  ){ 
                url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value='+categoryid+'&moodlewsrestformat=json';
            }else{
                url = "";
            }
            axios
                .get(url)
                .then(response => ( this.rows = response.data.courses ))
                .finally(() => this.loading = true);
        },
        mount_info: function( rows ){
            if( rows.overviewfiles[0] == null ){ 
                rows.img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
            }else{
                rows.img_capa_curso = rows.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
            }
                // recuperando descricao
                p_start = rows.summary.indexOf("apresentacao-card") + 19;
                p_end = rows.summary.indexOf("</p>", p_start);
                rows.descricao = rows.summary.substring(p_start, p_end);

                mi_start = rows.summary.indexOf("dt-inicio-matricula") + 21;
                mi_end = rows.summary.indexOf("</p>", mi_start);
                timestart = rows.summary.substring(mi_start, mi_end);
    
                mf_start = rows.summary.indexOf("dt-fim-matricula") + 18;
                mf_end = rows.summary.indexOf("</p>", mf_start);
                timefinish = rows.summary.substring(mf_start, mf_end);

                ts = timestart.split("-");
                tf = timefinish.split("-");
                
                timestart  = new Date(String(ts[2] +'-'+ ts[1] +'-'+ ts[0]+ ' 20:59:59')).getTime()/1000;
                timefinish = new Date(String(tf[2] +'-'+ tf[1] +'-'+ tf[0]+ ' 20:59:59')).getTime()/1000;

                var hoje = Math.round(+new Date()/1000);
                if( hoje >= timestart && hoje <= timefinish){
                    rows.matricula = true;
                }else{
                    rows.matricula = false;
                }   
                
                var c = rows;
                this.cursos.push(c);
            }
    },
    created: function () {
        categoryid = this.$route.query.categoryid; 
        if( categoryid == null ){ categoryid = 6; }
        this.init( categoryid );
    }  
});