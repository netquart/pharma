

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
     
    </div>
    <strong>Copyright &copy; <?php echo date("Y");?> <a href="http://pharmafocus.co.uk">Pharmafocus.co.uk</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap 4 -->

<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Select2 -->

<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js') ?>"></script>

<!-- date-range-picker -->

<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>

<!-- DataTables -->

<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>

<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>

<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- AdminLTE App -->

<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->

<script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>

<style>
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
</style>

<script>

<?php if(isset($addpage_javascript)) echo $addpage_javascript; ?>
<?php if(isset($faq_javascript)) echo $faq_javascript; ?>
<?php if(isset($addsplashpage_javascript)) echo $addsplashpage_javascript; ?>

<?php if(isset($addbrandpage_javascript)) echo $addbrandpage_javascript; ?>
</script>

<!-- page script -->
<script>
  jQuery(function () {
    jQuery("#example1faq").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });


    jQuery("#example1cat").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 2
  }]
    });


    jQuery("#example1brand").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 3
  }]
    });

    jQuery("#example1product").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 3
  }]
    });
    jQuery("#example1soffer").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });

 jQuery("#example1soffers").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });


    
    jQuery("#example1dmethods").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });


 jQuery("#example1lcoupons").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 6
  }]
    });
    
 jQuery("#example1cbcrds").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 5
  }]
    });

    jQuery("#example1stpges").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });

  jQuery("#example1cmscnt").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });


    jQuery("#example1spp").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 3
  }]
    });


    jQuery("#example1ttm").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 6
  }]
    });


    jQuery("#example1reviews").DataTable({
     "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      columnDefs: [{
  orderable: false,
  targets: 4
  }]
    });
    
    



    jQuery('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,

    });

    

  
    

  
    //Initialize Select2 Elements
    jQuery('.select2').select2()

    //Initialize Select2 Elements
    jQuery('.select2bs4').select2({
      theme: 'bootstrap4'
    })


    


  });
</script>

<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      jQuery('.img-fluid').attr('src', e.target.result);
      
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }

  
}

function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      jQuery('.img-fluid2').attr('src', e.target.result);
      
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }

  
}

jQuery("#offerimage").change(function() {
  readURL(this);
});

jQuery("#offerimage2").change(function() {
  readURL2(this);
});

jQuery(document).ready(function(){

  var selectedval = jQuery("#IDSelect").val();
  if(selectedval!==''){
  jQuery('#IDselectbox option[value="'+selectedval+'"]').attr("selected", "selected");

  var selecttext = jQuery( "#IDselectbox option:selected" ).text();

   jQuery("#select2-IDselectbox-container").html(selecttext);

  }

  if(jQuery("#IDSelect_brand_id").val()!==''){
  jQuery('#IDselectbox1 option[value="'+jQuery("#IDSelect_brand_id").val()+'"]').attr("selected", "selected");
var selecttext = jQuery( "#IDselectbox1 option:selected" ).text();

jQuery("#select2-IDselectbox1-container").html(selecttext);

  }

  if(jQuery("#IDSelect_offer_id").val()!==''){
  jQuery('#IDselectbox2 option[value="'+jQuery("#IDSelect_offer_id").val()+'"]').attr("selected", "selected");

  var selecttext = jQuery( "#IDselectbox2 option:selected" ).text();

jQuery("#select2-IDselectbox2-container").html(selecttext);

  }

  if(jQuery("#IDSelect_sale_offer_id").val()!==''){
  jQuery('#IDselectbox3 option[value="'+jQuery("#IDSelect_sale_offer_id").val()+'"]').attr("selected", "selected");

  var selecttext = jQuery( "#IDselectbox3 option:selected" ).text();

  jQuery("#select2-IDselectbox3-container").html(selecttext);

  }

  if(jQuery("#IDSelect_category_id").val()!==''){
  jQuery('#IDselectbox4 option[value="'+jQuery("#IDSelect_category_id").val()+'"]').attr("selected", "selected");

  var selecttext = jQuery( "#IDselectbox4 option:selected" ).text();

  jQuery("#select2-IDselectbox4-container").html(selecttext);

  }

 

  jQuery("#add-tabs").click(function(){

var name = jQuery("#tabname").val();



var desc = CKEDITOR.instances['tab_description'].getData()



desc = htmlEncode(desc);

//alert(desc)


var tab_order = jQuery("#tab_order").val();

var tab_status = jQuery("#tab_Status").val();

var ifupdate = jQuery("#updatetab").val();



if(ifupdate!='0') {

  var setid = jQuery("#selectedtd").val();

  if(setid!='')
  var trid='tr_id_' + setid;

  
   
 

var markup = '<td>'+name+'<input type="hidden" id="tab_name_hidden" name="tab_name[]" value="'+name+'"></td><td>'+tab_order+'<input type="hidden" id="tab_order_hidden" name="tabs_order[]" value="'+tab_order+'"></td><td>'+tab_status+'<input type="hidden" id="tab_status_hidden" name="tab_statuses[]" value="'+tab_status+'"><input type="hidden" name="tabs_desc[]" id="tab_desc_hidden" value="'+desc+'"></td><td><i class="fa fa-edit" customtag="'+setid+'" id="edit-row" style="cursor:pointer;" ></i></td><td><i class="fa fa-trash" id="delete-row" style="cursor:pointer;"></i></td>';

jQuery('tr#'+trid).html(markup);

jQuery("#updatetab").val('0');

jQuery("#add-tabs").val("Add New Tab");
}
else {

var dynamic_id = parseInt(jQuery("#dynamic_id").val())+parseInt(1);

var markup = '<tr id="tr_id_'+dynamic_id+'"><td>'+name+'<input type="hidden" id="tab_name_hidden" name="tab_name[]" value="'+name+'"></td><td>'+tab_order+'<input type="hidden" id="tab_order_hidden" name="tabs_order[]" value="'+tab_order+'"></td><td>'+tab_status+'<input type="hidden" id="tab_status_hidden" name="tab_statuses[]" value="'+tab_status+'"><input type="hidden" name="tabs_desc[]" id="tab_desc_hidden" value="'+desc+'"></td><td><i class="fa fa-edit" customtag="'+dynamic_id+'" id="edit-row" style="cursor:pointer;" ></i></td><td><i class="fa fa-trash" id="delete-row" style="cursor:pointer;"></i></td></tr>';

jQuery("#dynamic_id").val(dynamic_id);
//jQuery("table > tbody:nth-child(1)").after(markup);
//jQuery(markup).prependTo("table > tbody:nth-child(1)");
jQuery( "table tr:first" ).after(markup);

}




});



jQuery('body').on('click', '#delete-row', function() {


  var confirmit = confirm('Are you sure?');
  if(confirmit)
  jQuery(this).closest('tr').remove(); 



});

jQuery('body').on('click', '#edit-row', function() {


  jQuery("#add-tabs").val("Update Tab");

  jQuery("#updatetab").val('1');

jQuery("#tabname").val(jQuery(this).closest('tr').find('td #tab_name_hidden').val());

//jQuery("#cke_tab_description").val(jQuery(this).closest('tr').find('td #tab_desc_hidden').val());
//alert(jQuery(this).closest('tr').find('td #tab_desc_hidden').val())

var desc = htmlDecode(jQuery(this).closest('tr').find('td #tab_desc_hidden').val());

//alert(desc)

CKEDITOR.instances['tab_description'].setData(desc);





jQuery('#tab_order option[value="'+jQuery(this).closest('tr').find('td #tab_order_hidden').val()+'"]').attr("selected", "selected");

var selecttext = jQuery( "#tab_order option:selected" ).text();

jQuery("#select2-tab_order-container").html(selecttext);



jQuery("#selectedtd").val(jQuery(this).attr("customtag"))


jQuery('#tab_Status option[value="'+jQuery(this).closest('tr').find('td #tab_status_hidden').val()+'"]').attr("selected", "selected");

var selecttext = jQuery( "#tab_Status option:selected" ).text();

jQuery("#select2-tab_Status-container").html(selecttext);

});

jQuery(document).on("click", "#update_stock", function (ev) {




var product_id = jQuery(this).val();



var stock_value = jQuery(this).closest("div.input-group").find("input[name=update_stock_product]").val();

    jQuery.ajax({
     url:'<?=base_url()?>admin/products/UpdateStock',
     method: 'post',
     data: {product_id: product_id,stock_value: stock_value},
     dataType: 'json',
     success: function(response){
      alert(response)
 
       }
 
     });

    });

    jQuery("#page_title").blur(function(){

     // var updateslug = jQuery("#page_title").val();

    //  updateslug = updateslug.replaceAll(' ','-');
     // jQuery("#page_slug").val(updateslug);
}); 

jQuery("#SEO").click(function(){

    

if (jQuery('input.SEO').is(':checked')) {

  jQuery("#hide_row").show();
  jQuery("#hide_row2").show();

}
else{
  jQuery("#hide_row").hide();
  jQuery("#hide_row2").hide();

}
  });
  jQuery('input:radio[name="splash_type"]').change(function(){
  
    if(jQuery(this).val() === 'image'){

      jQuery("#splash_imageid").hide();

      jQuery("#splash_desc").hide();

      jQuery("#splash_url").show();

      jQuery("#splash_intab").show();

      jQuery("#splash_imageid").show();
       
    }

    if(jQuery(this).val() === 'text'){

      jQuery("#splash_imageid").show();

      jQuery("#splash_desc").show();

      jQuery("#splash_url").hide();

      jQuery("#splash_intab").hide();

      jQuery("#splash_imageid").hide();
       
      }


});



});


function htmlEncode(value){

value = value.replaceAll('"','doublequotes');

  return jQuery('<div/>').text(value).html();
}

function htmlDecode(value){
  value = value.replaceAll('doublequotes','"');
  return value;
}



</script>




</body>
</html>