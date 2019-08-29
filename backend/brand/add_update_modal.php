<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form id="product_form" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          


           

           

          <div class="form-group">
            <label for=""> Enter Brand Name :</label>
            <input type="text" class="form-control" name="title" id="product_title">
          </div> 

          <div class="form-group">
            <label for="comment">Enter Brand Description: </label>
            <textarea class="form-control" rows="5" name="descpt" id="product_descpt"> </textarea>
          </div>
 
            <div class="form-group">
              <label for=""> Select Brand Image </label>
              <input type="file" name="cover" id="product_cover" />
              <span id="product_uploaded_cover"></span>
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