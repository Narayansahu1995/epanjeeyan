<?php 
include 'header.php';
if (isset($_REQUEST['succeed'])) {
 echo "<script>alert('Thank You!!! feedback successfully sended.')</script>";
}
?>
<!--/.nav-wrapper-->

<section class="wrapper banner-wrapper">
  <div id="flexSlider" class="flexslider">
    	<!-- <div class="inner-banner"><img src="" alt="e-process_img"></div> -->
  </div>
</section>
<div class="wrapper" id="skipCont"></div>

<!--/#skipCont-->
<section id="fontSize" class="wrapper body-wrapper ">
    <div class="bg-wrapper inner-wrapper">
    <div class="breadcam-bg breadcam">
        <div class="container common-container four_content">
        	<ul>
            	<li><a href="/">मुख्य पृष्ठ </a></li>
                <li><a href="#">प्रतिक्रिया</a></li>
                <li><a href="#">प्रतिक्रिया दर्ज करें</a></li>
            </ul>
   	  </div>
</div>
            
    <section id="page-head" class="wrapper headings-wrapper">
      <div class="container common-container four_content">
       <img src=""> <h1>प्रतिक्रिया दर्ज करें </h1>
      
        <!--   <h3>H3.Heading Goes here</h3>
        <h4>H4.Heading Goes here</h4>
        <h5>H5.Heading Goes here</h5>
        <h6>H6.Heading Goes here</h6> -->
        <hr />
      </div>
    </section>
    <!--/#page-head-->
    
 


     <section id="tables" class="wrapper tables-wrapper">
      <div class="container common-container four_content">
        <!-- <div class="scroller"> -->
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
          <center>
          <h2>आवेदक का विवरण</h2>
          <form action="" method="post">
            <table>
              <tr>
                <td><label >Full Name<i style="color: red; ">*</i></label></td>
                <td> <input type="text" class="form-control" name="full_name" style="width: 100%;height: 1cm" required=""></td>
              </tr>
              <tr>
                <td><label>Mobile No. <i style="color: red;">*</i></label></td>
                <td><input type="text" class="form-control" name="mobile" style="width: 100%;height: 1cm" required=""></td>
              </tr>
              <tr>
                <td><label>E-Mail ID <i style="color: red;">*</i></label></td>
                <td><input type="text" class="form-control" name="email" style="width: 100%;height: 1cm" required=""></td>
              </tr>
              
            
          
            
            </table>
            <center><h3>दरख्वास्त विस्तार</h3></center>
            <input type="radio" value="अति उत्कृष्ट" name="feedback">अति उत्कृष्ट &nbsp;&nbsp;
            <input type="radio" value="औसत" name="feedback">औसत&nbsp;&nbsp;
            <input type="radio" value="संतोषजनक" name="feedback">संतोषजनक&nbsp;&nbsp;
            <input type="radio" value="सुधार की जरूरत" name="feedback">सुधार की &nbsp;&nbsp;जरूरत
            <br><br>
                <button class="btn btn-primary" style="width: 100%;height: 1cm;background: gray ">Submit</button>
          </form>
          </center>
          <br><br>
        </div>
       
        </div>
            <div class="col-md-2"></div>
          </div>
      <!-- </div> -->
    </section> 
<?php   
include 'footer.php';

?>