<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>Administrador Tercer Cuarto</title>

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-theme.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/datepicker/bootstrap-datetimepicker.min.css'); ?>">


    <script src="<?php echo base_url('/assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/libs/datepicker/bootstrap-datetimepicker.min.js'); ?>"></script>

</head>
<body>
<div class="header">
    <a href="<?php echo base_url('admin'); ?>"><span class="glyphicon glyphicon-home"></span> Inicio</a>
    <a class="logout" href="<?php echo base_url('admin/logout'); ?>">Salir</a>
</div>
<?php echo $html; ?>
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