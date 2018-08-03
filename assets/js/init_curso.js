/**
 * 
 * RECUPERAR PARAMS DA URL
 * 
 */
var router = new VueRouter({
    mode: 'history',
    routes: []
});
var app = new Vue({
    router,
    el: '#curso',
    data: {
        curso: [],
        loading: true,
    },
    computed: {
        exite: function () {
            if( this.curso.length == 0 ){
                return curso_existe = 0;
            } else {
                return curso_existe = 1;
            } 
        }
    },
    watch: {
        curso: function () {
            if( this.curso.overviewfiles[0] == null ){ 
                this.curso.img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
            }else{
                this.curso.img_capa_curso = this.curso.overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
            }
        }
    },
    mounted () {
        q = this.$route.query.q;
        if ( q == null ){
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
        }else{
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=id&value='+q+'&moodlewsrestformat=json';
        }
        axios
            .get(url)
            .then(response => (
                this.curso = response.data.courses[0]
            ))
            .finally(() => this.loading = true)
    }    
})