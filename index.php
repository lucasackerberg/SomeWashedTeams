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
        <?php foreach($teams as $teamName => $teamData) { 
            $city = $teamData['city'];?>
            <div class="Teaminfo">
                <h3><?php echo $teamName ?></h3>
                <p><?php echo 'Is located in ' . $teamData['city']?></p>
                <img src="https://api.mapbox.com/styles/v1/mapbox/streets-v12/static/<?php echo $coordinates[$city]?>/300x200?access_token=pk.eyJ1IjoibHVjYXNhY2siLCJhIjoiY2xuNGZhdWdyMHI5czJrbDdoaTUzMzBzayJ9.xYHwIwyfYDoaqewL4hSqGw">
            </div> <?php } ?>
    </div>
    <div class="right" >
        <?php require __DIR__ . "/table.php" ?>
    </div>
</div>