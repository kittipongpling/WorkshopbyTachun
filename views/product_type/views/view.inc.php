<?php
// echo "<pre>";
// print_r($product_type);
// echo "</pre>";
?>
<!-- Array
(
    [0] => Array
        (
            [product_type_id] => 1
            [product_type_name] => นายวายุทธ
        )

) -->

<div class="container">
    <div>
        <div class="row">
            <h3>TAE FOR DEV</h3>
        </div>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>


        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>ชื่อประเภท</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <?php foreach ($product_type as $key => $product_type_variable) {
                # code...product_type 
                // echo "<pre>";
                // print_r($product_type_variable['product_type_id']);
                // echo "</pre>";
           ?>
            <tbody>

                <tr>
                    <th scope="row"><?php echo $product_type_variable['product_type_id'] ?></th>
                    <td scope="row"><?php echo $product_type_variable['product_type_name'] ?></td>
                     
                    <td>
                    <!-- http://localhost/workshopbytachun/index.php?content=product_type&action=update&id=1  -->
                        <a 
                            href="index.php?content=product_type&action=update&id=<?php echo $product_type_variable['product_type_id'] ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a 
                        href="index.php?content=product_type&action=delete&id=<?php echo $product_type_variable['product_type_id'] ?>">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                        
                    </td>
                </tr>

            </tbody>
            <?php 
            } ?>
        </table>


    </div>