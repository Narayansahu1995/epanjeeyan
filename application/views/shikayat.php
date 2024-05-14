<?php 
include 'header.php';
if (isset($_REQUEST['succeed'])) {
 echo "<script>alert('Complain successfully Received !!We Will Contact You As Soon As Possible.')</script>";
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
                <li><a href="#">शिकायत दर्ज करें</a></li>
            </ul>
   	  </div>
</div>
            
    <section id="page-head" class="wrapper headings-wrapper">
      <div class="container common-container four_content">
       <img src=""> <h1>शिकायत दर्ज करें </h1>
      
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
          <h3>आवेदक का विवरण</h3>
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
              
            
            <tr><td colspan="2"><h3><center>पंजीकरण  सन्दर्भ  विवरण  दरख्वास्त विस्तार</h3></center></td>
           
              <tr>
                <td><label>ई-पंजीयन आईडी  <i style="color: red;">*</i></label></td>
                <td><input type="text" class="form-control" name="epanjeeyan_id" style="width: 100%;height: 1cm" required=""></td>
              </tr>
              <tr>
                <td><label>कार्यालय का नाम<i style="color: red;">*</i></label></td>
                <td>
                <select name="office_name" id="dsr_location" class="combobox" style="width: 100%;height: 1cm" required="">
    <option value="Select कार्यालय">Select कार्यालय</option>
    <option value="अकलतरा_SR">अकलतरा_SR</option>
    <option value="अभनपुर">अभनपुर</option>
    <option value="अम्बिकापुर_SR">अम्बिकापुर_SR</option>
    <option value="अंतागढ_SR">अंतागढ_SR</option>
    <option value="आरंग">आरंग</option>
    <option value="कटघोरा_SR">कटघोरा_SR</option>
    <option value="कबीरधाम_SR">कबीरधाम_SR</option>
    <option value="कसडोल_SR">कसडोल_SR</option>
    <option value="कांकेर_SR">कांकेर_SR</option>
    <option value="कुनकुरी_SR">कुनकुरी_SR</option>
    <option value="कुरुद_SR">कुरुद_SR</option>
    <option value="कुसमी_SR">कुसमी_SR</option>
    <option value="केशकाल_SR">केशकाल_SR</option>
    <option value="कोटा_SR">कोटा_SR</option>
    <option value="कोरबा_SR">कोरबा_SR</option>
    <option value="कोंटा_SR">कोंटा_SR</option>
    <option value="कोंडागांव_SR">कोंडागांव_SR</option>
    <option value="खरसिया_SR">खरसिया_SR</option>
    <option value="खैरागढ_SR">खैरागढ_SR</option>
    <option value="गरियाबंद_SR">गरियाबंद_SR</option>
    <option value="गरूर_SR">गरूर_SR</option>
    <option value="गुण्डरदेही_SR">गुण्डरदेही_SR</option>
    <option value="गंडई_SR">गंडई_SR</option>
    <option value="घरमजयगढ_SR">घरमजयगढ_SR</option>
    <option value="चॉंपा_SR">चॉंपा_SR</option>
    <option value="चौकी_SR">चौकी_SR</option>
    <option value="छुईखदान">छुईखदान</option>
    <option value="छुरा">छुरा</option>
    <option value="छुरिया_SR">छुरिया_SR</option>
    <option value="जगदलपुर_SR">जगदलपुर_SR</option>
    <option value="जशपुर_SR">जशपुर_SR</option>
    <option value="जांजगीर_SR">जांजगीर_SR</option>
    <option value="जैजैपुर_SR">जैजैपुर_SR</option>
    <option value="डभरा_SR">डभरा_SR</option>
    <option value="डमी रायपुर ई-पे">डमी रायपुर ई-पे</option>
    <option value="डोरंगरगॉंव_SR">डोरंगरगॉंव_SR</option>
    <option value="डोंगरगढ़">डोंगरगढ़</option>
    <option value="डोंडीलोहारा_SR">डोंडीलोहारा_SR</option>
    <option value="तखतपुर_SR">तखतपुर_SR</option>
    <option value="तिल्दा नेवरा">तिल्दा नेवरा</option>
    <option value="दल्लीराजहरा_SR">दल्लीराजहरा_SR</option>
    <option value="दुर्ग_SR1">दुर्ग_SR1</option>
    <option value="दुर्ग_SR2">दुर्ग_SR2</option>
    <option value="दुर्ग_SR3">दुर्ग_SR3</option>
    <option value="देवभोग_SR">देवभोग_SR</option>
    <option value="दंतेवाडा_SR">दंतेवाडा_SR</option>
    <option value="धमतरी_SR">धमतरी_SR</option>
    <option value="धमधा_SR">धमधा_SR</option>
    <option value="धरधोडा_SR">धरधोडा_SR</option>
    <option value="नगरी_SR">नगरी_SR</option>
    <option value="नवा रायपुर अटल नगर">नवा रायपुर अटल नगर</option>
    <option value="नवांगढ_SR">नवांगढ_SR</option>
    <!-- <option value="182">नवांगढ_SR</option> -->
    <option value="नारायणपुर_SR">नारायणपुर_SR</option>
    <option value="पखांजूर_SR">पखांजूर_SR</option>
    <option value="पत्थलगॉंव_SR">पत्थलगॉंव_SR</option>
    <option value="पथरिया_SR">पथरिया_SR</option>
    <option value="पलारी_SR">पलारी_SR</option>
    <option value="पाटन_SR">पाटन_SR</option>
    <option value="पामगढ_SR">पामगढ_SR</option>
    <option value="पाली_SR">पाली_SR</option>
    <option value="पिथौरा_SR">पिथौरा_SR</option>
    <option value="पेन्ड्रारोड_SR">पेन्ड्रारोड_SR</option>
    <option value="पंडरिया_SR">पंडरिया_SR</option>
    <option value="प्रतापपुर_SR">प्रतापपुर_SR</option>
    <option value="बगीचा_SR">बगीचा_SR</option>
    <option value="बलरामपुर_SR">बलरामपुर_SR</option>
    <option value="बलौदा बाजार_SR">बलौदा बाजार_SR</option>
    <option value="बसना_SR">बसना_SR</option>
    <option value="बालोद_SR">बालोद_SR</option>
    <option value="बिलाईगढ_SR">बिलाईगढ_SR</option>
    <option value="बिलासपुर_SR1">बिलासपुर_SR1</option>
    <option value="बिलासपुर_SR2">बिलासपुर_SR2</option>
    <option value="बिलासपुर_SR3">बिलासपुर_SR3</option>
    <option value="बिल्हा_SR">बिल्हा_SR</option>
    <option value="बीजापुर_SR">बीजापुर_SR</option>
    <option value="बेमेतरा_SR">बेमेतरा_SR</option>
    <option value="बेरला_SR">बेरला_SR</option>
    <option value="बैकुण्ठपुर_SR">बैकुण्ठपुर_SR</option>
    <option value="बोड़ला_SR">बोड़ला_SR</option>
    <option value="भरतपुर_SR">भरतपुर_SR</option>
    <option value="भाटापारा_SR">भाटापारा_SR</option>
    <option value="भानुप्रतापपुर_SR">भानुप्रतापपुर_SR</option>
    <option value="मनेन्द्रगढ_SR">मनेन्द्रगढ_SR</option>
    <option value="मरवाही_SR">मरवाही_SR</option>
    <option value="मस्तूरी_SR">मस्तूरी_SR</option>
    <option value="महासमुंद_SR">महासमुंद_SR</option>
    <option value="मालखरौदा_SR">मालखरौदा_SR</option>
    <option value="मुंगेली_SR">मुंगेली_SR</option>
    <option value="मोहला_SR">मोहला_SR</option>
    <option value="राजनंदगांव_SR1">राजनंदगांव_SR1</option>
    <option value="राजनंदगांव_SR2">राजनंदगांव_SR2</option>
    <option value="राजपुर_SR">राजपुर_SR</option>
    <option value="राजिम_SR">राजिम_SR</option>
    <option value="रामानुजगंज_SR">रामानुजगंज_SR</option>
    <option value="रायगढ_SR">रायगढ_SR</option>
    <option value="रायपुर SR1">रायपुर SR1</option>
    <option value="रायपुर SR2">रायपुर SR2</option>
    <option value="रायपुर SR3">रायपुर SR3</option>
    <option value="रायपुर SR4">रायपुर SR4</option>
    <option value="रायपुर SR5">रायपुर SR5</option>
    <option value="लोरमी_SR">लोरमी_SR</option>
    <option value="सक्ती_SR">सक्ती_SR</option>
    <option value="सरायपाली_SR">सरायपाली_SR</option>
    <option value="साजा_SR">साजा_SR</option>
    <option value="सारगंढ_SR">सारगंढ_SR</option>
    <option value="सिमगा_SR">सिमगा_SR</option>
    <option value="सीतापुर_SR">सीतापुर_SR</option>
    <option value="सुकमा_SR">सुकमा_SR</option>
    <option value="सूरजपुर_SR">सूरजपुर_SR</option>
    <option value="हरदीबाजार_SR">हरदीबाजार_SR</option>


</select>

                </td>
              </tr>
              <tr>
                <td><label>किस प्रकार की समस्या<i style="color: red;">*</i></label></td>
                <td>
                  <select name="problem_details" style="width: 100%;height: 1cm" required="">
    <option value="">Select </option>
    <option value="ई-पंजीयन व्यव्स्था">ई-पंजीयन व्यव्स्था</option>
    <option value="नेटवर्क सम्बन्धी">नेटवर्क सम्बन्धी</option>
    <option value="ऑपरेटर की व्यवहार">ऑपरेटर की व्यवहार</option>
    <option value="कर्मचारी / अधिकारी की सहयोगात्मक व्यवहार">कर्मचारी / अधिकारी की सहयोगात्मक व्यवहार</option>
    <option value="पक्षकारों को दी जा रही जन सुविधाएँ">पक्षकारों को दी जा रही जन सुविधाएँ</option>
    <option value="पंजीयन प्रणाली सम्बन्धी सुझाव">पंजीयन प्रणाली सम्बन्धी सुझाव</option>
    <option value="अन्य">अन्य</option>


</select>

                </td>
             
            </table>
          
            <br>
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