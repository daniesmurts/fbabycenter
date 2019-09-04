  $(document).ready(function () {
      $('#add_button').click(function () {
        $('#product_form')[0].reset();
        $('.modal-title').text("Add Featured");
        $('#action').val("Add");
        $('#operation').val("Add");
        $('#product_uploaded_cover').html('');
        $('#product_uploaded_cover2').html('');
        $('#product_uploaded_cover3').html('');
      });

      var dataTable = $('#product_data').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "fetch_all_items.php",
          type: "POST"
        },
        "columnDefs": [{
          "targets": [0, 3, 4],
          "orderable": false,
        }, ],

      });

      $(document).on('submit', '#product_form', function (event) {
        event.preventDefault();
        var categ_id = $('#product_categ_id').val();
        var sub_categ_id = $('#product_sub_categ_id').val();
        var title = $('#product_title').val();
        var price = $('#product_price').val();
        var new_price = $('#product_new_price').val();
        var discount = $('#product_discount').val();
        var descpt = $('#product_descpt').val();
        var color = $('#product_color').val();
        var size = $('#product_size').val();
        var quantity = $('#product_quantity').val();
        var available = $('#product_available').val(); 
        var newz = $('#product_newz').val();


        var extension = $('#product_cover').val().split('.').pop().toLowerCase();
        if (extension != '') {
          if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover').val('');
            return false;
          }
        }

        var extension2 = $('#product_cover2').val().split('.').pop().toLowerCase();
        if (extension2 != '') {
          if (jQuery.inArray(extension2, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover2').val('');
            return false;
          }
        }

        var extension3 = $('#product_cover3').val().split('.').pop().toLowerCase();
        if (extension3 != '') {
          if (jQuery.inArray(extension3, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover3').val('');
            return false;
          }
        }


        if (title != '' && descpt != '') {
          $.ajax({
            url: "insert_all.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
              alert(data);
              $('#product_form')[0].reset();
              $('#productModal').modal('hide');
              dataTable.ajax.reload();
            }
          });
        } else {
          alert("Both Fields are Required");
        }
      });

      $(document).on('click', '.update', function () {
        var product_id = $(this).attr("id");
        $.ajax({
          url: "fetch_single_item.php",
          method: "POST",
          data: {
            product_id: product_id
          },
          dataType: "json",
          success: function (data) {
            $('#productModal').modal('show');

            $('#product_categ_id').val(data.categ_id);
            $('#product_sub_category_id').val(data.sub_categ_id);
            $('#product_title').val(data.title);
            $('#product_price').val(data.price);
            $('#product_new_price').val(data.new_price);
            $('#product_discount').val(data.discount);
            $('#product_descpt').val(data.descpt);
            $('#product_color').val(data.color);
            $('#product_size').val(data.size);
            $('#product_quantity').val(data.quantity);
            $('#product_available').val(data.available);
            $('#product_newz').val(data.newz);


            $('.modal-title').text("Edit Product");
            $('#product_id').val(product_id);

            $('#product_uploaded_cover').html(data.cover);
            $('#product_uploaded_cover2').html(data.cover2);
            $('#product_uploaded_cover3').html(data.cover3);

            $('#action').val("Edit");
            $('#operation').val("Edit");
          }
        })
      });

      $(document).on('click', '.delete', function () {
        var product_id = $(this).attr("id");
        if (confirm("Are you sure you want to delete this?")) {
          $.ajax({
            url: "delete_all_items.php",
            method: "POST",
            data: {
              product_id: product_id
            },
            success: function (data) {
              alert(data);
              dataTable.ajax.reload();
            }
          });
        } else {
          return false;
        }
      });


    });