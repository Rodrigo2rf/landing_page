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
            
            // Recuperando itens
            p_start = this.curso.summary.indexOf("dt-preco") + 10;
            p_end = this.curso.summary.indexOf("</p>", p_start);
            this.curso.preco = this.curso.summary.substring(p_start, p_end);

            h_start = this.curso.summary.indexOf("dt-horas") + 10;
            h_end = this.curso.summary.indexOf("</p>", h_start);
            this.curso.horas = this.curso.summary.substring(h_start, h_end);

            c_start = this.curso.summary.indexOf("dt-coordenador") + 16;
            c_end = this.curso.summary.indexOf("</p>", c_start);
            this.curso.coordenador = this.curso.summary.substring(c_start, c_end);

            d_start = this.curso.summary.indexOf("dt-inicio-dia") + 15;
            d_end = this.curso.summary.indexOf("</p>", d_start);
            this.curso.dia = this.curso.summary.substring(d_start, d_end);

            m_start = this.curso.summary.indexOf("dt-inicio-mes") + 15;
            m_end = this.curso.summary.indexOf("</p>", m_start);
            this.curso.mes = this.curso.summary.substring(m_start, m_end);

            l_start = this.curso.summary.indexOf("dt-link-inscricao") + 19;
            l_end = this.curso.summary.indexOf("</p>", l_start);
            this.curso.link_inscricao = this.curso.summary.substring(l_start, l_end);

            mi_start = this.curso.summary.indexOf("dt-inicio-matricula") + 21;
            mi_end = this.curso.summary.indexOf("</p>", mi_start);
            new_timestart = this.curso.summary.substring(mi_start, mi_end);

            mf_start = this.curso.summary.indexOf("dt-fim-matricula") + 18;
            mf_end = this.curso.summary.indexOf("</p>", mf_start);
            new_timefinish = this.curso.summary.substring(mf_start, mf_end);

            ts = new_timestart.split("-");
            tf = new_timefinish.split("-");
            
            timestart  = new Date(String(ts[2] +'-'+ ts[1] +'-'+ ts[0]+ ' 20:59:59')).getTime()/1000;
            timefinish = new Date(String(tf[2] +'-'+ tf[1] +'-'+ tf[0]+ ' 20:59:59')).getTime()/1000;

            var hoje = Math.round(+new Date()/1000);
            if( hoje >= timestart && hoje <= timefinish){
                this.curso.matricula = true;
            }else{
                this.curso.matricula = false;
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