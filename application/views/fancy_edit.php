
<div class="fancy">
    <div class="content">
        <div class="wrapper">
            <p>WOLOLO</p>
            <?php echo($segment);?>
            <?php echo(form_open("/match_edit/edit_single_match"));?>
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
                    <?php echo(form_checkbox($done)); ?>
                </label>
            </fieldset>
            <div class="result hidden" id="result">
                <hr/>
                <p>Información adicional</p>
            </div>
            <?php echo(form_submit('', 'Crear partido'));?>
            <?php echo(form_close());?>
        </div>
    </div>
    <div class="bg"></div>
</div>