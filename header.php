<?php
    $fName = basename($_SERVER['PHP_SELF']);
?>


<div class="container span4">

    <header>
        <a href="index.php"><img src="lk5.png" class="initials_small center-block" alt="lk_logo"></a>
    </header>

        <div class="row col-sm-12"> 
                <div class="col-sm-4 center-block">
                    <a href="mixitup_example.php">
                    <img alt="websites_nav" 
                    <?php
                        if ($fName == "mixitup_example.php") {
                            echo "src= \"portfolio_long.png\"";
                        }
                        else {
                            echo "src= \"portfolio_long_before.png\"";
                        }?>
                        >
                    </a>
                </div>
                <div class="col-sm-4 center-block">
                    <a href="about.php">
                    <img alt="about_nav" 
                    <?php
                        if ($fName =="about.php") {
                            echo "src= \"about_long.png\"";
                        }
                        else{
                            echo "src= \"about_long_before.png\"";
                        }
                            ?>
                        >
                    </a>
                </div>
                <div class="col-sm-4 center-block">
                    <a href="contact.php">
                    <img alt="contact_nav" 
                     <?php
                        if ($fName =="contact.php") {
                            echo "src= \"contact_long.png\"";
                        }
                        else{
                            echo "src= \"contact_long_before.png\"";
                        }
                            ?>
                        >
                    </a>
                </div>
            </div>
    </div>