<?php include 'layouts/header.php';?>

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Forms</h5>

              <!-- Multi Columns Form -->
              <?php
              foreach ($test2 as $key) {
              ?>
              
              <form class="row g-3" method="post" action="edit_db">
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">State Name</label>
                  <input type="hidden" class="form-control" id="id" value="<?=$key->id?>" name="id">
                  <input type="text" class="form-control" id="state_name" value="<?=$key->state_english?>" name="state_english">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">State Name</label>
                  <input type="text" class="form-control" id="state_hindi" value="<?=$key->state_hindi?>" name="state_hindi">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Division Name</label>
                  <input type="text" class="form-control" id="division_name" value="<?=$key->division_english?>" name="division_english">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Division Name(hindi)</label>
                  <input type="text" class="form-control" id="division_hindi" name="division_hindi" value="<?=$key->division_hindi?>">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label font">Revenue District</label>
                
                  <select name="district" name="r_district_english" id="district" class="form-select">
                    
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
                  <label for="inputState" class="form-label font">Revenue District(hindi)</label>
                 
                  <select name="r_district_hindi" id="district" class="form-select">
                    
                    <?php
                    $sess_d5=$_SESSION['district'];
                    $test15=$this->db->get('district_master')->result();
                    
                    foreach($test15 as $row5){
                      $did5=$row5->district_id;
                     if ($sess_d5 != $did5) {
                      ?>
                      <option value="<?=$row5->district_id;?>"><?=$row5->name_hindi;?></option>
                    <?php } else{?>
                      <option value="<?=$row5->district_id;?>" selected 
                      ><?=$row5->name_hindi;?></option>



                      <?php
                    } 
                    }
                    ?>

                  </select>
                </div> 
                <div class="col-md-4">
                  <label for="inputState" class="form-label font">IGR District</label>
                  <select name="igrdistrict" id="" class="form-select">
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
                  <select id="tehsil" name="tehsil_english" class="form-select" name="tensil">
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
                  <select id="inputState" name="urbun_rural" class="form-select" name="ur">

                    <option selected>-- select --</option>
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
                  <select id="body_type" class="form-select" name="body_type_english">
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
                  <input type="text" class="form-control" id="body_name" name="body_name_english" value="<?=$key->local_body_type_english?>">
                </div>
                <div class="col-md-8">
                  <label for="inputName5" class="form-label font">Local Body Name(hindi)</label>
                  <input type="text" class="form-control" id="body_hindi" name="body_name_hindi" value="<?=$key->local_body_name_hindi?>">
                </div>
                 <?php if($_SESSION['ur']==2) {?>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Patwari Halka</label>
                  <input type="text" class="form-control" id="patwari_halka" name="patwari_halka" value="<?=$key->phn?>" name="phn">
                </div>
                 <?php } ?>  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Ward No.</label>
                  <input type="text" class="form-control" id="ward_num" name="ward_no" value="<?=$key->ward_no?>">
                </div>
                <div class="col-md-4"> 
                  <label for="inputName5" class="form-label font">Ward Name</label>
                  <input type="text" class="form-control" id="ward_name" name="ward_name_english" value="<?=$key->ward_name_english;?>">
                </div>
                <div class="col-md-4"> 
                  <label for="inputName5" class="form-label font">Ward Name(hindi)</label>
                  <input type="text" class="form-control" id="ward_name" name="ward_name_hindi" value="<?=$key->ward_name_hindi;?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Pin Code</label>
                  <input type="text" class="form-control" id="pin_code" name="pincode" value="<?=$key->pincode?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Area Villages</label>
                  <input type="text" class="form-control" id="area_villages" name="area_english" value="<?=$key->area_village_english?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Area Villages(hindi)</label>
                  <input type="text" class="form-control" id="area_villages" name="area_hindi" value="<?=$key->area_village_hindi?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Description</label>
                  <input type="text" class="form-control" id="description" name="description" value="<?=$key->description?>">
                </div>
               
                <div class="col-md-4"> 
                  <label for="inputName5" class="form-label font">Within 20 m Square meter</label>
                  <input type="text" class="form-control" id="within" name="within" value="<?=$key->within_20m_sq?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Beyond 20 m Square meter</label>
                  <input type="text" class="form-control" id="beyond" name="beyond" value="<?=$key->beyond_20m_sq?>">
                </div>
                <?php if($_SESSION['ur']==2) {?>
               <div class="col-md-4">
                  <label for="inputName5" class="form-label font">All Type in hecter</label>
                  <input type="text" class="form-control" id="all_type" name="all_type" value="<?=$key->all_type_mr?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Irrigated in hecter</label>
                  <input type="text" class="form-control" id="irrigated" name="irrigated" value="<?=$key->irrigated?>">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">Non-irrigated in hecter</label>
                  <input type="text" class="form-control" id="non_irrigated" name="non_irrigated" value="<?=$key->non_irrigated?>">
                </div>
                <?php } ?>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label font">SRO Name</label>
                  <!-- <input type="text" class="form-control" id="sro_name" name="sro_name" value="<?=$key->sro?>"> -->
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

