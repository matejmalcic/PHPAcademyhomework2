<!DOCTYPE html>
<html lang="en">
<?php require_once 'template/header.php'; ?>
<body>
<?php require_once 'template/menu.php'; ?>

<div class="grid-container">
    <div class="grid-x">
        <div class="large-12 small-12 columns">
            <div class="callout">
                <div style="margin-left: 40%;">
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'template/footer.php';
    require_once 'template/scripts.php';
?>
</body>
</html>
