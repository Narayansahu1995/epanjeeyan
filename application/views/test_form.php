<?php include 'layouts/header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Search Data</h1>

      
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Multi Columns Form</h5> -->
              <br> 
              <?php
              if (isset($_REQUEST['invalid'])) {
               ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                Invalid Search option !!<br><hr>Please select correct location.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               <?php
              }
              ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" action="form-db" method="post">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">District</label>
                  <select name="district" id="district" class="form-select">
                    <option value="">-- select district --</option>
                    <?php
                    foreach($test as $row){
                      echo '<option value="'.$row->district_id.'">'.$row->name_english.'</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Tehsil</label>
                  <select id="tehsil" name="tehsil" class="form-select">
                    
                  
                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Urban/Rural</label>
                  <select id="ur" class="form-select" name="ur">
                    <option selected>-- select urban/rural --</option>
                    <option value="1">urban</option>
                    <option value="2">rural</option>
                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Select Local Body Type</label>
                  <select id="body_type" class="form-select" name="body_type">
                    <option selected>-- Select Local Body Type --</option>
                   
                    
                  </select>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- End Multi Columns Form -->
              
            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'layouts/footer.php';?>
  <script>
    $('#district').change(function(){
    var district = $(this).val();
    $.ajax({
    url: "<?php echo base_url("viewajax");?>",
    type: "POST",
     data: {district: district},
    cache: false,
    success: function(data){
      //alert(data);
      $('#tehsil').html(data); 
    }
  });
  });

  $('#ur').change(function(){
    // var district = $('#district').val();
    // var tehsil = $('#tehsil').val();
    var ur = $(this).val();
    $.ajax({
    url: "<?php echo base_url("select_body");?>",
    type: "POST",
     data: {
      // district: district,
      // tehsil: tehsil,
      ur: ur
    },
    cache: false,
    success: function(data){
      //alert(data);
      $('#body_type').html(data); 
    }
  });
});
  </script>