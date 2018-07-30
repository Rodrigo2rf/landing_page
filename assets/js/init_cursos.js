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
      countOfPage: 4,
      currPage: 1,
      filter_fullname: ''
    },
    filters: {
        tratar_string (text) {
            var count = 150;
            return text.slice(0, count) + (text.length > count ? "..." : "");
        },  
    },
    watch: {
        rows: function () {
            for(var i=0; i < this.rows.length; i++){
                if(this.rows[i].id != 1){
                    if( this.rows[i].overviewfiles[0] == null ){ 
                        this.rows[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                    }else{
                        this.rows[i].img_capa_curso = this.rows[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                    }
                }
            }
        },
    },
    computed: {
        showList: function(){
            return this.rows.length > 0;         
        },
        filteredRows: function(){
            var filter_fullname = this.filter_fullname.toLowerCase();
            return ( this.filter_fullname.trim() !== '' ) ? 
            this.rows.filter(function(d){ return d.fullname.toLowerCase().indexOf(filter_fullname) > -1; }) : 
            this.rows;
        },
        pageStart: function(){
            return (this.currPage - 1) * this.countOfPage;
        },
        totalPage: function(){
            return Math.ceil(this.filteredRows.length / this.countOfPage);
        }
    },
    methods: {
      setPage: function(idx){
        if( idx <= 0 || idx > this.totalPage ){
          return;
        }
        this.currPage = idx;
      },
    },
    mounted () {    
        q = this.$route.query.q;
        if ( q == null ){
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
        }else{
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value='+q+'&moodlewsrestformat=json';
        }
        axios
        .get(url)
        .then(response => ( 
            this.rows = response.data.courses ))
        .finally(() => this.loading = true);
    }
});