<?php 

if(isset($_SESSION['loginname'])) {
    include('login.php'); 
    exit;
}

$panier = $_COOKIE["panier"];

if (isset($_GET['id'])) {
    switch ($_GET['id'])
    {
        case "46":
            $panier["pecan_nuts"]++;
            setCookie("panier[pecan_nuts]",$panier["pecan_nuts"]);
        break;
        case "58":
            $panier["full_chocolate"]++;
            setCookie("panier[full_chocolate]",$panier["full_chocolate"]);
        break;
        case "32":
            $panier["m&ms"]++;
            setCookie("panier[m&ms]",$panier["m&ms"]);
        break;
        case "36":
            $panier["chocolate"]++;
            setCookie("panier[chocolate]",$panier["chocolate"]);
        break;
    }
}

?>


<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?id=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
