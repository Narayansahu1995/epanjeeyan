<?php include 'layouts/header.php';?>

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New</h5>
 

              <!-- Multi Columns Form -->
              <?php
              foreach ($test as $key) {
              ?>
              <form class="row g-3" method="post" action="add">
               <input type="hidden" class="form-control" id="test" value="<?= $key->id ?>" name="id" readonly>
                <div class="col-md-4">
                  <!-- <?php echo $key->id ?> -->
                  <label for="inputName5" class="form-label font">State Name</label>
                  <input type="text" class="form-control" id="state_name" value="<?= $key->state_english ?>" name="state_english" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">State Name</label>
                  <input type="text" class="form-control" id="state_hindi" value="<?=$key->state_hindi?>" name="state_hindi" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Division Name</label>
                  <input type="text" class="form-control" id="division_name" value="<?=$key->division_english?>" name="division_english" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Division Name</label>
                  <input type="text" class="form-control" id="division_name" value="<?=$key->division_hindi?>" name="division_hindi" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label font">Revenue District</label>
                  <select name="district1" id="district1" class="form-select">
                  <?php
                    $sess_d=$_SESSION['district'];
                    $test1=$this->db->get('district_master')->result();
                    
                    foreach($test1 as $row){
                      $did=$row->district_id;
                     if ($sess_d != $did) {
                      ?>
                      <option value="<?=$row->district_id;?>"><?=$row->name_english;?></option>
                    <?php } else{?>
                      <option value="<?=$row->district_id;?>" selected 
                      ><?=$row->name_english;?></option>



                      <?php
                    } 
                    }
                    ?>  
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label font">IGR District</label>
                  <select name="district" id="district" class="form-select" >
                    <option value="">-- select district --</option>
                    <?php
                    $sess_d=$_SESSION['district'];
                    $test1=$this->db->get('district_master')->result();
                    
                    foreach($test1 as $row){
                      $did=$row->district_id;
                     if ($sess_d != $did) {
                      ?>
                      <option value="<?=$row->district_id;?>"><?=$row->name_english;?></option>
                    <?php } else{?>
                      <option value="<?=$row->district_id;?>" selected 
                      ><?=$row->name_english;?></option>



                      <?php
                    } 
                    }
                    ?>  
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Tehsil</label>
                  <select name="tehsil" id="tehsil" class="form-select" >
                  <?php
                    $sess_d1=$_SESSION['district'];
                    $sess_t=$_SESSION['tehsil'];
                    $test2=$this->db->query("select * from tehsil_master where district_id ='$sess_d1'")->result();
                    
                    foreach($test2 as $row1){
                      $did1=$row1->district_id;
                     if ($sess_t != $did1) {
                      ?>
                      <option value="<?=$row1->tehsil_id;?>" ><?=$row1->tehsil_english;?></option>
                    <?php } else{?>
                      <option value="<?=$row1->tehsil_id;?>" selected 
                      ><?=$row1->tehsil_english;?></option>



                      <?php
                    } 
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Urban/Rural</label>
                  <select id="ur" name="urban_rural" class="form-select" >
                
                    <option value="1" <?php if ($_SESSION['ur']==1) {
                      echo "selected";
                    }?>>Urban</option>
                    <option value="2" <?php if ($_SESSION['ur']==2) {
                      echo "selected";
                    }?>>Rural</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label font">Local Body Type</label>
                  <select id="body_type" name="body_type_english" class="form-select" >
                    <option value="1" <?php if ($_SESSION['body_type']==1) {
                      echo "selected";
                    }?>>Nagar Panchayat Class C</option>
                    <option value="2" <?php if ($_SESSION['body_type']==2) {
                      echo "selected";
                    }?>>Nagar Palika Class B</option>
                    <option value="3" <?php if ($_SESSION['body_type']==3) {
                      echo "selected";
                    }?>>Nagar Nigam Class A</option>
                    <option value="4" <?php if ($_SESSION['body_type']==4) {
                      echo "selected";
                    }?>>Revenue Inspector circle</option>
                    <option value="5" <?php if ($_SESSION['body_type']==5) {
                      echo "selected";
                    }?>>Janpad</option>
                    <option value="6" <?php if ($_SESSION['body_type']==6) {
                      echo "selected";
                    }?>>Gram panchayat</option>
                    <option value="7" <?php if ($_SESSION['body_type']==7) {
                      echo "selected";
                    }?>>Janpad</option>
                    
                  </select>
                </div>
                <div class="col-md-8">
                  <label for="inputName5" class="form-label font">Local Body Name</label>
                  <input type="text" class="form-control" id="body_name" name="body_name_english" value="<?=$key->local_body_name_english?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label font">Local Body Name(hindi)</label>
                  <input type="text" class="form-control" id="body_hindi" name="body_name_hindi" value="<?=$key->local_body_name_hindi?>" readonly>
                </div>
                <div class="col-md-3">
                  <label for="inputName5" class="form-label font">Patwari Halka</label>
                  <input type="text" class="form-control" id="patwari_halka"  value="<?=$key->phn?>" name="phn" readonly>
                </div>
                <div class="col-md-3">
                  <label for="inputName5" class="form-label font">Ward No.</label>
                  <input type="text" class="form-control" id="ward_num" value="<?=$key->ward_no?>" name="ward_no" readonly>
                </div>
                <div class="col-md-4"> 
                  <label for="inputName5" class="form-label font">Ward Name</label>
                  <input type="text" class="form-control" id="ward_name" value="<?=$key->ward_name_english?>" name="ward_name_english" >
                </div>
                <div class="col-md-4"> 
                  <label for="inputName5" class="form-label font">Ward Name(hindi)</label>
                  <input type="text" class="form-control" id="ward_name" name="ward_name_hindi"value="<?=$key->ward_name_hindi;?>" >
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Pin Code</label>
                  <input type="text" class="form-control" id="pin_code" name="pin_code" value="<?=$key->ward_no?>" >
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Area Villages (English)</label>
                  <input type="text" class="form-control" id="area_vlg_english" name="area_vlg_eng" placeholder="enter area in english">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Area Villages (Hindi)</label>
                  <input type="text" class="form-control" id="area_vlg_hindi" name="area_vlg_hindi" placeholder="enter area in hindi">
                </div>
                
                <div class="col-md-4"> 
                  <label for="inputName5" class="form-label font">Within 20 m Square meter</label>
                  <input type="text" class="form-control" id="within" name="within_square" placeholder="enter within square meter">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Beyond 20 m Square meter</label>
                  <input type="text" class="form-control" id="beyond" name="beyond_square" placeholder="enter beyond square meter">
                </div>
                
                <?php if($_SESSION['ur']==2) {?>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">All Type in hecter</label>
                  <input type="text" class="form-control" id="all_type" name="all_type" placeholder="enter all type in hecter">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Irrigated in hecter</label>
                  <input type="text" class="form-control" id="irrigated" name="irrigated_type" placeholder="enter irrigated in hecter">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Non-irrigated in hecter</label>
                  <input type="text" class="form-control" id="non_irrigated" name="non_irrigated_type" placeholder="enter non-irrigated in hecter">
                </div>
                <?php } ?>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">SRO Name</label>
                  <!-- <input type="text" class="form-control" id="sro_name" name="sro_name"> -->
                  <select name="sro_name" id="sro_name" class="form-select">
                    <option value="">-- select sro --</option>
                    <?php
                    $sess_d=$_SESSION['sro_id'];
                    $test1=$this->db->get('sr_info')->result();
                    
                    foreach($test1 as $row){
                      $did=$row->id;
                     if ($sess_d != $did) {
                      ?>
                      <option value="<?=$row->id;?>"><?=$row->sro_name;?></option>
                    <?php } else{?>
                      <option value="<?=$row->id;?>" selected 
                      ><?=$row->sro_name;?></option>



                      <?php
                    } 
                    }
                    ?>  
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Description</label>
                  <input type="text" class="form-control" id="description" name="descrip" placeholder="enter description">
                </div>
            
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="back" class="btn btn-secondary">Back</a>
                </div>
              </form><!-- End Multi Columns Form -->
              <?php }  ?>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'layouts/footer.php';?>

  
  <script type="text/javascript">
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
  </script>

   