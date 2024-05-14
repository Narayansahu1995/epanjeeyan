
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files -->
  <script src="assets2/vendor/apexcharts/apexcharts.min.js"></script>
  <!-- <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="assets2/vendor/chart.js/chart.umd.js"></script>
  <script src="assets2/vendor/echarts/echarts.min.js"></script>
  <script src="assets2/vendor/quill/quill.min.js"></script>
  <script src="assets2/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets2/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 <script>
    // Function to trigger AJAX request after 1 minute
    function executeQueryAfterDelay() {
        setTimeout(function() {
            $.ajax({
                url: "<?php echo base_url('HomeController/execute_query'); ?>",
                type: "POST",
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }, 119000); // 1 minute delay (60000 milliseconds)
    }

    // Call the function when the page loads
    $(document).ready(function() {
        executeQueryAfterDelay();
        
    });


</script>


</body>

</html>