<!DOCTYPE html>
<html lang="it">
<title>Astronomy Picture of the Day</title>
<?php include('../parts/meta.php');
?>
<?php include('../parts/include.php');
?>

<?php
require('../lib/apod/apod.php');
$apod = getApodData();
?>

<body>
    <div class="site__container">
        <?php include('../parts/navbar.php'); ?>
        <main>
            <div class="apod__container">
                <div class="apod__banner">Astronomy Picture of the Day</div>
                <div class="apod__header">
                    <div class="apod__title"><?= $apod['title'] ?></div>
                    -
                    <div class="apod__date"><?= $apod['date'] ?></div>
                </div>
                <div class="apod__image-container">
                    <img class="apod__image" src="<?= $apod['url'] ?>" alt="<?= $apod['title'] ?>">
                </div>
                <div class="apod__explanation"><?= $apod['explanation'] ?></div>
            </div>
        </main>
    </div>

</body>

</html>