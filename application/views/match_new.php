<?php
    $place = array(
        'name' => 'place',
        'placeholder' => 'Nombre del estadio',
        'required'   => 'required'
    );
    $time = array(
        'name' => 'time',
        'placeholder' => '¿Cúando sucede?',
        'class' => 'form_datetime',
        'required'   => 'required'
    );
    $done = array(
        'name'        => 'done',
        'id'        => 'done',
        'value'       => '1',
        'checked'     => FALSE,
        'onClick'     => 'checkIfIsDone()'
    );
?>
<div class="section match_new">
    <div class="container">
        <p class="title">Crear partido</p>
    </div>
    <?php echo(form_open("match_new/submitmatch"));?>
    <fieldset>
        <label>
            <span>Equipo 1:</span>
            <select name="team_1" id="team_1" required="required">
                <option value="">Selecciona</option>
                <option value="1">Usa</option>
                <option value="2">Japón</option>
                <option value="3">México</option>
                <option value="4">Canada</option>
                <option value="5">Francia</option>
                <option value="6">Corea Del Sur</option>
                <option value="7">Australia</option>
                <option value="8">Brasil</option>
            </select>
        </label>
    </fieldset>
    <fieldset>
        <label>
            <span>Equipo 2:</span>
            <select name="team_2" id="team_2" required="required">
                <option value="">Selecciona</option>
                <option value="1">Usa</option>
                <option value="2">Japón</option>
                <option value="3">México</option>
                <option value="4">Canada</option>
                <option value="5">Francia</option>
                <option value="6">Corea Del Sur</option>
                <option value="7">Australia</option>
                <option value="8">Brasil</option>
            </select>
        </label>
    </fieldset>
    <fieldset>
        <label>
            <span>Lugar:</span>
            <?php echo(form_input($place)); ?>
        </label>
    </fieldset>
    <fieldset>
        <label>
            <span>Fecha:</span>
            <?php echo(form_input($time)); ?>
<!--            <input type="text" value="" readonly class="form_datetime">-->
        </label>
    </fieldset>
<!--        <label>-->
<!--            <span>Liga:</span>-->
<!--            <select class="half-select">-->
<!--                <option value="">Selecciona la liga</option>-->
<!--            --><?php
//            $acutal_ligue = 1;
//            $arrayTeams = array();
//            $temporal_array = array();
//            foreach($teams->result() as $one){
//                $team_id          = $one->id;
//                $team_league_id   = $one->liga;
//                $team_league_name = $one->nombre_liga;
//                $team_name        = $one->nombre_equipo;
//
//                array_push($temporal_array, $team_name);
//                if($acutal_ligue <= $team_league_id ){
//                    ?>
<!--                    --><?php
//                    echo '<option value="'.$team_league_id.'">'.$team_league_name.'</option>';
//                    ?>
<!--                    --><?php
//                    array_push($arrayTeams, $temporal_array);
//                    $temporal_array = array();
//                    $acutal_ligue ++;
//                }
//            }
//            ?>
<!--            </select>-->
<!--        </label>-->
    </fieldset>

<!---->
<!--        --><?php
//        $count = 1;
//        foreach($arrayTeams as $singleLeague){
//            echo '<fieldset><label><span>Equipo:</span><select class="half-select" id="teams_'.$count.'">';
//                $team_id = 1;
//                foreach($singleLeague as $singleTeam ){
//                    echo '<option value="'.$team_id.'">'.$singleTeam.'</option>';
//                    $team_id ++;
//                }
//                $count ++;
//            echo '</select></label></fieldset>';
//        }
//        ?>




    <div class="result hidden" id="result">
        <hr/>
        <p>Información adicional</p>
    </div>
    <?php echo(form_submit('', 'Crear partido'));?>
    <?php echo(form_close());?>
</div>

<script type=text/javascript>
    function checkIfIsDone(){
        var done = document.getElementById('done');
        if (done.checked){
            $("#result").hide().removeClass('hidden').slideDown();
        }else{
            $("#result").slideUp();
        }
    }
</script>