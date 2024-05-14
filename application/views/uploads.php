<?php include 'layouts/header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Upload District</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row" >
        <div class="col-lg-8" style="padding-top: 40px;">

          <div class="card">
            <div class="card-body">
            

              <!-- General Form Elements -->
              <form action="upload" method="post" enctype="multipart/form-data">
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10" style="margin-top:10px;">
                    <input class="form-control" type="file" name="upload_excel" id="formFile" required>
                    <input class="form-control" type="submit" name="submit" id="formFile" value="Submit" style="margin-top:10px;">
                    <?php if($this->session->flashdata('success')) { ?>
                      <p><?=$this->session->flashdata('success')?></p>
                    <?php } ?>  
                    <?php if($this->session->flashdata('error')) { ?>
                      <p><?=$this->session->flashdata('error')?></p>
                    <?php } ?> 
                  </div>
            
                </div>
                
                <!-- <div class="row mb-3" style="margin-top: 50px;">
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div> -->

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'layouts/footer.php';?>