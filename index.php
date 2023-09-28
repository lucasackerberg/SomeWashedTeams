<?php
require __DIR__ . "/header.php";
require __DIR__ . "/footer.php";
require __DIR__ . "/data.php";
?>

<div class="container">
    <div class="left">
        <div class="total">
            <h2>The total number of teams in this washed league is <?php require __DIR__ . "/teamcount.php" ?></h2>
        </div>
    </div>
    <div class="right" >
        <?php require __DIR__ . "/table.php" ?>
    </div>
</div>