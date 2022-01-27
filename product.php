<?php 
$products = [
    ["pname"=>"abc","price"=>100,"quality"=>4,"image"=>"images\hat2.jpg"],
    ["pname"=>"xyz","price"=>200,"quality"=>4,"image"=>"images\hat2.jpg"],
    ["pname"=>"abc","price"=>300,"quality"=>4,"image"=>"images\hat2.jpg"],
    ["pname"=>"xyz","price"=>400,"quality"=>4,"image"=>"images\hat2.jpg"],
    ["pname"=>"abc","price"=>500,"quality"=>4,"image"=>"images\hat2.jpg"],
    ["pname"=>"xyz","price"=>600,"quality"=>4,"image"=>"images\hat2.jpg"]
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php")?>
</head>
<body>
    <?php include("nav.php")?>
    <section class="container">
        <h1>Product Page</h1>
        <div class='row'>
        <?php 
         foreach($products as $val){
             ?>
             <div class='col-sm-4'>
             <div class="card" style="width: 15rem; height: 420px" >
                <img src="<?php echo $val['image'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    
                    <h5 class="card-title"><?php echo $val['pname'];?></h5>
                    <p class="card-text">
                     <h6 class="card-title"><?php echo $val['price'];?></h6>
                     <h6 class="card-title"><?php echo $val['quality'];?></h6>
                    </p>
                    <a href="#" class="btn btn-primary">Add To Cart</a>
                </div>
                </div>
             </div>
        
            <?php

         }

        ?>
        </div>
    </section>
    <?php include("foot.php")?>
</body>
</html>