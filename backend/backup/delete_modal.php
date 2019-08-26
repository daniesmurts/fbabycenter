
      
        <!-- Modal -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete student Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              
                  <form action="deletecode.php" method="post">
              <div class="modal-body">
                  
                  <input type="hidden" class="form-control" id="delete_id" name="delete_id" >
                     
                     <h6>Do you want to delete student's data? </h6>
                      
                      
                      
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                <button type="submit" name="deletedata" class="btn btn-primary">Yes, delete it! </button>
              </div>
              
              
                    </form>
            </div>
          </div>
        </div>
      