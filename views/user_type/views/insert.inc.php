<div class="container">
    <div class="row">
        <h3>InSert MY USER</h3>
    </div>

    <?php
                
                

    ?>
        <form class="form-horizontal" action="index.php?content=user_type&action=add" method="post">
            <!-- <input class="form-control" name="name" type="hidden" placeholder="รหัส" >  -->
            <div class="form-group">
                <label class="col-sm-2 control-label">User_name</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="user_type_name" id="user_type_name" type="text" placeholder="ชื่อประเภท">
                </div>
                <div class="controls col-sm-6">
                    <input class="form-control" name="user_type_email" id="user_type_email" type="text" placeholder="ชื่อที่อยู่อีเมล">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Insert</button>
                    <a class="btn btn-default" href="index.php?content=user_type">Bac          
                </div>
            </div>
        </form>
    </div>
</div>