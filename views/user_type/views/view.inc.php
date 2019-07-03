

<div class="container">
    <div>
        <div class="row">
            <h3>MY USER</h3>
        </div>
        <a href="index.php?content=user_insert" class="btn btn-success">Cretae</a>
       




        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>ชื่อประเภท</th>
                    <th>ที่อยู่อีเมล</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <?php foreach ($user_type as $key => $user_type_variable) {
                # code...product_type   
                // echo "<pre>";
                // print_r($user_type_variable['user_type_email']);
                // echo "</pre>";
           ?>
            <tbody>

                <tr>
                    <th scope="row"><?php echo $user_type_variable['user_type_id'] ?></th>
                    <td scope="row"><?php echo $user_type_variable['user_type_name'] ?></td>
                    <td scope="row"><?php echo $user_type_variable['user_type_email'] ?></td>
                     
                    <td>
                    <!-- http://localhost/workshopbytachun/index.php?content=product_type&action=update&id=1  -->
                        <a 
                            href="index.php?content=user_type&action=update&id=<?php echo $user_type_variable['user_type_id'] ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a 
                        href="index.php?content=user_type&action=delete&id=<?php echo $user_type_variable['user_type_id'] ?>">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                        
                    </td>
                </tr>

            </tbody>
            <?php 
            } ?>
        </table>


    </div>