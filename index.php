<?php
//init variables
$title = "My Grocery List";
$attach_bootstrap_css = 1;
$attach_bootstrap_js = 1;
?>

<html>
<?php include_once("head.php");?>
<body>

    <div class="container">

        <h1>My Grocery List</h1>
        <?php
        if (isset($_POST['name'])){
            $item = $_POST['name'];
            ?>
            <div class="alert alert-success" role="alert"><?php echo "New item <b>$item</b> added to the list";?></div>
            <?php
        }

        ?>
        <ul class="list-group">
            <?php
            $i = 0;
            for ($i=1;$i<10;$i++){
                ?>
                <li class="list-group-item"><?php echo "Item number $i";?></li>
                <?php
            }
            if (isset($_POST['name'])){
                $item = $_POST['name'];
                ?>
                <li class="list-group-item active"><?=$item?></li>
                <?php
            }

            ?>

        </ul>

        <form action="index.php" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Insert New Item" name="name">
                <span class="input-group-btn">
                   <button class="btn btn-success" type="submit">Insert</button>
                </span>
            </div>
        </form>
    </div>
</body>
</html>






<?php
/**
 * Created by PhpStorm.
 * User: sulochana
 * Date: 4/24/17
 * Time: 10:58 AM
 */