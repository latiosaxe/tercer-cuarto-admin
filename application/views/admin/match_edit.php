<?php
$id = isset( $id ) ? $id : 0;
$team_1 = isset( $team_1 ) ? $team_1 : 0;
$team_2 = isset( $team_2 ) ? $team_2 : 0;
$time = isset( $time ) ? $time : '';
$place = isset( $place ) ? $place : '';
$done = isset( $done ) ? $done : '';

// Este arreglo vendrá de base de datos
$countries = array(
    (object)array('value' => '0', 'label' => 'Selecciona'),
    (object)array('value' => '1', 'label' => 'Usa'),
    (object)array('value' => '2', 'label' => 'Japón'),
    (object)array('value' => '3', 'label' => 'México'),
    (object)array('value' => '4', 'label' => 'Canada'),
    (object)array('value' => '5', 'label' => 'Francia'),
    (object)array('value' => '6', 'label' => 'Corea Del Sur'),
    (object)array('value' => '7', 'label' => 'Australia'),
    (object)array('value' => '8', 'label' => 'Brasil'),
);

$team_1_html = '';
foreach( $countries as $country ){
    $selected = $team_1 != $country->value ? '':'selected="selected"';
    $team_1_html .= "<option value='{$country->value}' {$selected}>{$country->label}</option>";
}

$team_2_html = '';
foreach( $countries as $country ){
    $selected = $team_2 != $country->value ? '':'selected="selected"';
    $team_2_html .= "<option value='{$country->value}' {$selected}>{$country->label}</option>";
}

$is_done = $done? 'checked="checked"' : '';
?>
<?php if( isset( $form_ok ) ){ ?>
<div class="succes">
    <p>Tu información fue procesada sin ningún problema</p>
    <a href="<?php echo base_url('admin'); ?>">Regresar al inicio</a>
</div>
<?php } ?>
<div class="section match_new">
    <div class="container">
        <p class="title">Partido</p>
    </div>
    <form action="<?php echo base_url('admin/match/'.$id);?>" method="post">
        <fieldset>
            <label>
                <span>Equipo 1:</span>
                <select name="team_1" id="team_1" required="required">
                    <?php echo $team_1_html;?>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label>
                <span>Equipo 2:</span>
                <select name="team_2" id="team_2" required="required">
                    <?php echo $team_2_html;?>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label>
                <span>Lugar:</span>
                <input type="text" id="place" name="place" placeholder="Nombre del estadio" required="required" value="<?php echo $place;?>"/>
            </label>
        </fieldset>
        <fieldset>
            <label>
                <span>Fecha:</span>
                <input type="text" id="time" name="time" class="form_datetime" placeholder="¿Cúando sucede?" required="required" value="<?php echo $time;?>"/>
            </label>
        </fieldset>
        <fieldset class="fieldset_checkbox">
            <label>
                <span>¿Finalizado?:</span>
                <input type="checkbox" name="done" id="donde" value="1" <?php echo $is_done;?> />
            </label>
        </fieldset>
        <div class="result hidden" id="result">
            <hr/>
            <p>Información adicional</p>
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>
<!-- script type=text/javascript>
    function checkIfIsDone(){
        var done = document.getElementById('done');
        if (done.checked){
            $("#result").hide().removeClass('hidden').slideDown();
        }else{
            $("#result").slideUp();
        }
    }
</script -->