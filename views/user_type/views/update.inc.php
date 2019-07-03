<div class="container">
    <div class="row">
        <h3>Update For User_Type</h3>
    </div>

    
        <form class="form-horizontal" action="index.php?content=user_type&action=edit" method="post"> 
        <!-- ซ่อน id เพื่อส่งไป Fn  -->
            <input class="form-control" name="user_type_id" id="user_type_id" value="<?php echo $user_type['user_type_id'];?>" type="hidden" placeholder="รหัส" > 

            <div class="form-group ">
                <label class="col-sm-2 control-label">User_name</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="user_type_name" type="user_type_name" value="<?php echo $user_type['user_type_name'];?>" placeholder="ชื่อประเภท" > 
                </div>
                <div class="controls col-sm-6">
                    <input class="form-control" name="user_type_email" type="user_type_email" value="<?php echo $user_type['user_type_email'];?>" placeholder="ชื่อประเภท" > 
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-default" href="index.php?content=user_type">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>