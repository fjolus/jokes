<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/fjolus/jokes/workers/htmlSpecialChars.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/button.css">
    <meta charset="utf-8">
    <title><?php echo html($pageTitle); ?></title>
</head>
<body>
<h1><?php echo html($pageTitle); ?></h1>
<form action="?<?php echo html($action); ?>" method="post">
    <div>
        <label for="name">Name: <input type="text" name="name" id="name" value="<?php echo html($name); ?>"></label>
    </div>
    <div id="add">
        <input type="hidden" name="id" value="<?php echo html($id); ?>">
        <input id="button" type="submit" value="<?php echo html($button); ?>">
    </div>
</form>
</body>
</html>