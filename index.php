<?php
require 'header.php';
?>

<form action="functions.php" method="post">

        <div class="form-group">
            <label for="fish_name">What fish do you want?</label>
            <input id="fish_name" type="text" class="form-control" placeholder="Форель" name="fish_name"/>
        </div>
        <div class="form-group">
            <label for="$fish_quantity">How many do you want?</label>
            <input id="$fish_quantity" type="text" class="form-control" placeholder="2" name="fish_quantity"/>
        </div>
        <button type="submit" class="btn btn-primary">Order</button>
    </div>
</body>
</html>