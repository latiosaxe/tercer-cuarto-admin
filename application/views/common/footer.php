<footer></footer>
</body>
<script>
//    $('.datePicker').datepicker({
//        startView: 1,
//        todayBtn: "linked",
//        language: "es"
//    });
    $(document).ready(function(){
        $(".form_datetime").datetimepicker({
            format: 'yyyy-mm-dd hh:ii',
            language: "es",
            startView: 3,
            todayBtn: "linked"
        });

    });

(function($){
    $.fn.datetimepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy",
        suffix: [],
        meridiem: []
    };
}(jQuery));

</script>
</html>