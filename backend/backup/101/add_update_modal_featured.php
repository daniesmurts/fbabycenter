<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Featured</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form id="product_form" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <!--  <div class="form-group">
             <label for=""> Choose a Product Category :</label>
             <input type="text" class="form-control" name="categ_id" id="product_categ_id">
           </div>  -->

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="sub_categ_title"> Add New To: </label>

                            <?php 
                   
                  require_once 'connexion.php';
                  $q = "SELECT * FROM sub_categories ORDER BY  title ASC";        
                  $r = mysqli_query($dbc,$q);
                   ?>
                            <select class="form-control" name="sub_categ_id" id="product_sub_categ_id">
                                <option value="0">Select a Block.</option>
                                <?php while ($data = mysqli_fetch_array($r)){
                  $categ_id = $data['id'];
                  $categ_title = $data['title']; 
                  ?>
                                <option value="<?php echo $categ_id;?>"> <?php echo $categ_title; ?> </option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="categ_title"> Choose a category: </label>

                            <?php 
                   
                  require_once 'connexion.php';
                  $q = "SELECT * FROM categories ORDER BY  title ASC";        
                  $r = mysqli_query($dbc,$q);
                   ?>
                            <select class="form-control" name="categ_id" id="product_categ_id">
                                <option value="0">Select category.</option>
                                <?php while ($data = mysqli_fetch_array($r)){
                  $categ_id = $data['id'];
                  $categ_title = $data['title']; 
                  ?>
                                <option value="<?php echo $categ_id;?>"> <?php echo $categ_title; ?> </option>
                                <?php } ?>

                            </select>
                        </div>



                    </div>


                    <div class="form-group">
                        <label for=""> Enter Product Name :</label>
                        <input type="text" class="form-control" name="title" id="product_title">
                    </div>


                    <div class="form-group">
                        <label for=""> Enter Product Original Price :</label>
                        <input type="text" class="form-control" name="price" id="product_price">
                    </div>


                    <div class="form-group">
                        <label for=""> Enter Product Discount Percentage :</label>
                        <input type="text" class="form-control" name="discount" id="product_discount">
                    </div>

                    <div class="form-group">
                        <label for=""> Enter Product New Price :</label>
                        <input type="text" class="form-control" name="new_price" id="product_new_price">
                    </div>


                    <div class="form-group">
                        <label for="comment">Product Description :</label>
                        <textarea class="form-control" rows="5" name="descpt" id="product_descpt"> </textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for=""> Select Product Image </label>
                            <input type="file" name="cover" id="product_cover" />
                            <span id="product_uploaded_cover"></span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for=""> Select Product Image 2 </label>
                            <input type="file" name="cover2" id="product_cover2" />
                            <span id="product_uploaded_cover2"></span>
                        </div>

                        <div class="form-group col-md-4">
                            <label for=""> Select Product Image 3 </label>
                            <input type="file" name="cover3" id="product_cover3" />
                            <span id="product_uploaded_cover3"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for=""> Select Product Color :</label>
                        <input type="color" class="form-control" name="color" value="#ff0000" id="product_color">

                    </div>

                    <div class="form-group">
                        <label for=""> Enter Product Size :</label>
                        <input type="text" class="form-control" name="size" id="product_size">
                    </div>

                    <div class="form-group">
                        <label for=""> Enter Product Quantity :</label>
                        <input type="text" class="form-control" name="quantity" id="product_quantity">
                    </div>

                    <div class="form-group">
                        <label for=""> Enter Product amount available in Stock :</label>
                        <input type="text" class="form-control" name="available" id="product_available">
                    </div>




                    <div class="form-group">
                        <label for="newz">Is Product New ? </label>
                        <select class="form-control" name="newz" id="product_newz">
                            <option value="0">Is Product New ?</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <input type="hidden" name="product_id" id="product_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-info2" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>




            </form>
        </div>
    </div>
</div>