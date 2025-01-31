<?php include 'layouts/header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 id="head">Record List</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Record</li>
          <li class="breadcrumb-item active">Record List</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        

          <?php
            if (isset($_REQUEST['not_add'])) {
              echo "<script>alert('Error while uploading!!!')</script>";
            }
          ?>
          <?php
            if (isset($_REQUEST['added'])) {
              echo "<script>alert('Successfully Added!!!')</script>";
            }
          ?>
           <?php
            if (isset($_REQUEST['invalid'])) {
              echo "<script>alert('Error while updating!!!')</script>";
            }
          ?>
          <?php
            if (isset($_REQUEST['updated'])) {
              echo "<script>alert('Successfully updated!!!')</script>";
            }
          ?>


          <div class="card">
            <div class="card-body">
              <br>
              <?php if ($_SESSION['ur'] == 2) {?>
                <a href="preview"  id="print_btn" class="btn btn-primary" style="float: right;">Preview प्रारूप 3</a>
              <?php } else { ?> 
                <a href="preview"  id="print_btn" class="btn btn-primary" style="float: right;">Preview प्रारूप 1</a>
              <?php }?>
              
              <br>
              <br>  
              <!-- <h5 class="card-title">Record List</h5> -->
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

              
              <!-- Table with stripped rows -->
              <table id="tbl_id" class="table datatable table-bordered table-striped">
                <thead>
                  
                  <tr>
                    
                    <th>
                      S.No.
                    </th>
                    <th>Local Body Name</th>
                    <?php if ($_SESSION['ur'] == 2) { ?>
                    <th>P.h.n</th>
                    <?php }?>
                    <?php if ($_SESSION['ur'] == 1) { ?>
                    <th>Ward No.</th>
                    <?php }?>
                    <th>Village/Ward Name</th>
                    <?php if ($_SESSION['ur'] == 1) { ?>
                    <th>Area/Description</th>
                    <?php }?>
                    <!-- <th>Area</th> -->
                    <?php if ($_SESSION['ur'] == 2) {?>
                    <th>All Type(hr)</th>
                    <th>Irrigated (hr)</th>
                    <th>Non Irrigated (hr)</th>
                    <?php } else {}?>
                     <th>Within 20m Rate(sm)</th>
                    <th>beyond 20m Rate(sm)</th> 
                    <th>Slabcode</th>
                    <th>SRO</th>
                    <th>Remark</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sn=1;
                  foreach ($list as $key) {
                   
                  ?>
                  <tr>
                    <td><?=$sn++;?></td>
                    <td><?=$key->local_body_name_hindi;?></td>
                    <?php if ($key->ur == 2) { ?>
                    <td><?=$key->phn;?></td>
                    <?php }?>
                    <?php if ($key->ur == 1) { ?>
                    <td><?=$key->ward_no;?></td>
                    <?php }?>
                    <td><?=$key->ward_name_hindi;?></td>
                    <?php if ($key->ur == 1) { ?>
                    <td><?=$key->area_village_hindi;?></td>
                    <?php }?>
                    <?php if ($key->ur == 2) { ?>
                    <td><?=$key->all_type_mr;?></td>
                    <td><?=$key->irrigated;?></td>
                    <td><?=$key->non_irrigated;?></td>
                    <?php }?>
                    <td><?=$key->within_20m_sq;?></td>
                    <td><?=$key->beyond_20m_sq;?></td>
                    <td><?=$key->slabcode;?></td>
                    <td><?=$key->sro_name;?></td>
                    <td><?=$key->remark;?></td>
                    <td>
                      <a href="edit?id=<?=$key->id;?>" class="btn btn-success btn-sm" style="--bs-btn-padding-x: -0.5rem;"><i class="ri-edit-2-line"></i></a>
                      <!-- <button type="button" class="btn btn-danger btn-sm delete" data-id='".<?=$key->r_district_english;?>."'><i class="ri-delete-bin-fill"></i></button> -->
                      <button type='button' class='btn bg-danger  delete btn-sm' data-id="<?=$key->id;?>" style="--bs-btn-padding-x: -0.5rem;"><i class="ri-delete-bin-fill"></i></button>
                      <a href="create?q=<?php echo $key->id; ?>" class="btn btn-warning btn-sm" style="--bs-btn-padding-x: -0.5rem;"><i class="ri-add-box-fill"></i></a>
                    </td>
                   
                  </tr>
                  <?php 

                  }
                  ?>
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'layouts/footer.php';?>
  <script type="text/javascript">
  $(document).ready(function(){
  $(document).on("click", ".delete", function() { 
  //alert("Success");
  let text = "Are Sure!!!\nYou Want To Delete It.";
  if (confirm(text) == true) {
    var $ele = $(this).parent().parent();
    $.ajax({
      url: "<?php echo base_url("deleterecords");?>",
      type: "POST",
      cache: false,
      data:{
        
        d_id: $(this).attr("data-id")
      },
      success: function(dataResult){
        alert("deleted records");
        location.reload();
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          $ele.fadeOut().remove();
          alert("Not deleted records");
          location.reload();
          
        }
      }
    });
  }
  });
 
 });

 function pr(){
  document.getElementById('header').style.cssText="visibility:hidden;";
  document.getElementById('head').style.cssText="visibility:hidden;";
  document.getElementById('print_btn').style.cssText="visibility:hidden;";

  var element = document.getElementById("tbl_id");
  element.classList.remove("datatable");
  
  print();
  document.getElementById('header').style.cssText="visibility:visible;";
  document.getElementById('head').style.cssText="visibility:visible;";
  document.getElementById('print_btn').style.cssText="visibility:visible;";
 }
</script>
  