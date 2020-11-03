<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>


<section class="cookies container-fluid">
    <div class="row justify-content-center">

        <div class="col-4">

            <?php $panier = $_COOKIE["panier"]; ?> 

            <h1> Your order : </hi> 
            <h2><?php 

                foreach ($panier as $cookie => $amount) { 
                    if ($amount>0) {
                        switch ($cookie){
                            case "pecan_nuts";
                            echo "Cookies with Pecan Nuts";
                            break;
                            case "full_chocolate";
                            echo "Cookies full chocolate";
                            break;
                            case "chocolate";
                            echo "Cookies with chocolat chips";
                            break;
                            case "m&ms";
                            echo "Cookies with M&Ms";
                            break;
                        }
                        echo '<br/> Quantity of box : ' . $amount ."<hr/>";
                    }
                } 
                ?>
            </h2>

        </div>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
