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
            
            // recuperando itens
            p_start = this.curso.summary.indexOf("data-preco") + 12;
            p_end = this.curso.summary.indexOf("</p>", p_start);
            this.curso.preco = this.curso.summary.substring(p_start, p_end);

            h_start = this.curso.summary.indexOf("data-horas") + 12;
            h_end = this.curso.summary.indexOf("</p>", h_start);
            this.curso.horas = this.curso.summary.substring(h_start, h_end);

            c_start = this.curso.summary.indexOf("data-coordenador") + 18;
            c_end = this.curso.summary.indexOf("</p>", c_start);
            this.curso.coordenador = this.curso.summary.substring(c_start, c_end);

            d_start = this.curso.summary.indexOf("data-inicio-dia") + 17;
            d_end = this.curso.summary.indexOf("</p>", d_start);
            this.curso.dia = this.curso.summary.substring(d_start, d_end);

            m_start = this.curso.summary.indexOf("data-inicio-mes") + 17;
            m_end = this.curso.summary.indexOf("</p>", m_start);
            this.curso.mes = this.curso.summary.substring(m_start, m_end);

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