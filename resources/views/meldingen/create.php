<?php require_once __DIR__.'/../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once __DIR__.'/../components/head.php'; ?>
</head>

<body>

    <?php require_once __DIR__.'/../components/header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="<?php echo $base_url; ?>/app/Http/Controllers/meldingenController.php" method="POST">

            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select name="type" id="type" class="form-input">
                <option value="">Kies een type</option>
                <option value="Achtbaan">Achtbaan</option>
                <option value="Draaiend">Draaiend</option>
                <option value="Kinder">Kinder</option>
                <option value="Horeca">Horeca</option>
                <option value="Show">Show</option>
                <option value="Water">Water</option>
                <option value="Overig">Overig</option>
</select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
            <label for="prioriteit">Prioriteit:</label>
            <input type="checkbox" name="prioriteit" id="prioritiet">
</div>
            <div>
            <textarea name="overige info" id="overige_info" class="form-input" rows="4"></textarea>
</div>
            <input type="submit" value="Verstuur melding">

        </form>
    </div>

</body>

</html>
