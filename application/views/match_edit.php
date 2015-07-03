<?php
    if($segment){
        foreach($matches->result() as $one){
            $One_id = $one->id;
            $One_place = $one->place;
            $One_team_1 = $one->team_1;
            $One_team_2 = $one->team_2;
            $One_time = $one->time;
            $One_done = $one->done;
        }
        $place = array(
            'name'        => 'place',
            'placeholder' => 'Nombre del estadio',
            'value'       =>  $One_place
        );
        $time = array(
            'name'        => 'time',
            'placeholder' => '¿Cúando sucede?',
            'class'       => 'datetime',
            'value'       => $One_time
        );
        $done = array(
            'name'        => 'done',
            'id'          => 'done',
            'onClick'     => 'checkIfIsDone()'
        );




        ?>

        <div class="section match_new">
        <p>Editar partido (<?php echo($segment);?>)</p>
        <?php

        ?>
        <?php echo(form_open("/match_edit/update/".$One_id));?>


        <fieldset>
            <label>
                <span>Equipo 1:</span>
                <select name="team_1" id="team_1" required="required" data-select="<?php echo($One_team_1) ?>">
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
                <select name="team_2" id="team_2" required="required" data-select="<?php echo($One_team_2) ?>">
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
            </label>
        </fieldset>
        <fieldset class="fieldset_checkbox">
            <label>
                <span>¿Finalizado?:</span>
                <?php
                    $js = 'onClick="checkIfIsDone()" id="done"';
                    if($One_done != 0){
                        echo form_checkbox('done', '1', TRUE, $js);
                        ?>
                            </label>
                        </fieldset>
                        <?php
                        echo('<div class="result" id="result">');
                    }else{
                        echo form_checkbox('done','0', FALSE, $js);
                        ?>
                            </label>
                        </fieldset>
                        <?php
                        echo('<div class="result hidden" id="result">');
                    }
                ?>

            <hr/>

            <div class="scores">
                <p style="font-size: 18px; text-align: center">Scores</p>
                <table>
                    <thead>
                        <tr>
                            <td>Cuarto</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody id="addHere">
                        <td>
                            <select name="cuarto" id="">
                                <option value="">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="name"/>
                        </td>
                    </tbody>
                </table>
                <br/><br/>
                <p class="text-right">
                    <a href="#" id="addRow">Agregar anotación</a>
                </p>
            </div>
        </div>
        <?php echo(form_submit('', 'Editar partido'));?>
        <?php echo(form_close());?>

        <script type=text/javascript>
            function checkIfIsDone(){
                var done = document.getElementById('done');
                if (done.checked){
                    $("#done").val("1");
                    $("#result").hide().removeClass('hidden').slideDown();
                }else{
                    $("#done").val("0");
                    $("#result").slideUp();
                }
            }


            var team_1 = $("#team_1");
            var team_2 = $("#team_2");

            var data_1 = parseInt(team_1.attr('data-select'));
            var data_2 = parseInt(team_2.attr('data-select'));

            $('#team_1 option:eq('+data_1+')').attr('selected', 'selected');
            $('#team_2 option:eq('+data_2+')').attr('selected', 'selected');
//            $('#team_2 option:eq('+parseInt(team_2.attr('data-select'))-1+')').attr('selected', 'selected')

            $("#addRow").click(function(){
                $("#addHere").append('<td> <select name="cuarto" id=""> <option value="">Select</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> </select> </td> <td> <input type="text" name="name"/> </td>')
            })
        </script>
        <?php
    }else{
        ?>
        <div class="section match_new">
            <div class="container">
                <p class="title">Partidos actuales</p>
            </div>

            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>Equipo 1</th>
                    <th>Equipo 2</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $teams = array(
                    1 => 'Usa',
                    2 => 'Japón',
                    3 => 'México',
                    4 => 'Canada',
                    5 => 'Francia',
                    6 => 'Corea Del Sur',
                    7 => 'Australia',
                    8 => 'Brasil'
                );
                foreach($matches->result() as $single_match){
                    ?>
                    <tr>
                        <td><?php echo($single_match->id); ?></td>
                        <td><?php echo($teams[$single_match->team_1]); ?></td>
                        <td><?php echo($teams[$single_match->team_2]); ?></td>
                        <td><a href="get/<?php echo($single_match->id);?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
    }
?>


