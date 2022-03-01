<?php require_once 'controllers/controller_app.php';?>
<!DOCTYPE html>
<html lang="<?php echo $settings['lang']; ?>">
<head>
    <meta charset="<?php echo $settings['charset']; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $settings['title']; ?></title>

    <!--    --><?php //include 'includes/style/globalStyles.php'; ?>

</head>
<body>

    <div class="app">
        <?php include 'templates/components/app/app.php'?>
    </div>

<?php //include 'includes/scripts/globalScripts.php'; ?>
</body>
</html>