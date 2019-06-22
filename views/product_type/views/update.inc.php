<div class="container">
    <div class="row">
        <h3>Update Tae For Dev</h3>
    </div>

    
        <form class="form-horizontal" action="index.php?content=product_type&action=edit" method="post"> 
        <!-- ซ่อน id เพื่อส่งไป Fn  -->
            <input class="form-control" name="product_type_id" id="product_type_id" value="<?php echo $product_type['product_type_id'];?>" type="hidden" placeholder="รหัส" > 

            <div class="form-group ">
                <label class="col-sm-2 control-label">Product_name</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="product_type_name" type="product_type_name" value="<?php echo $product_type['product_type_name'];?>" placeholder="ชื่อประเภท" > 
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-default" href="#">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>