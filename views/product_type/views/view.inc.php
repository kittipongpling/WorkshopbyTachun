

<div class="container">
    <div>
        <div class="row">
            <h3>TAE FOR DEV</h3>
        </div>
        <a href="index.php?content=insert" class="btn btn-success">Cretae</a>




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