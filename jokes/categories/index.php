<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/fjolus/jokes/categories/workers.php'?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/fjolus/jokes/workers/htmlSpeshialChars.php'?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <meta charset="utf-8">
        <title>Manage Categories</title>
    </head>
    <body>
        <h1>Manage Categories</h1>
        <p><a href="workers.php?add">Add new category</a></p>
        <ul>
            <?php foreach ($categories as $category):?>
            <li>
                <form action="" method="post">
                <div>
                    <?php echo html($category['name']); ?>
                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                    <input type="submit" name="action" value="edit">
                    <input type="submit" name="action" value="delete">
                </div>
                </form>
            </li>
            <?php endforeach; ?>
        </ul>
        <p><a href="../">Return to JMS home</a></p>
    </body>
</html>
