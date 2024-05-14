 

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="apple-touch-icon" href="CitezenDesignCode/theme/cgLogo.png" />
    <link rel="icon" href="CitezenDesignCode/theme/cgLogo.gif" />
    <title>Chhattisgarh Revenue and Disaster Management Dept</title>
    <!-- Custom styles for this template -->
    <link href="CitezenDesignCode/assets/css/base.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/base-responsive.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/grid.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/font.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/flexslider.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/megamenu.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/assets/css/print.css" rel="stylesheet" media="print" />
    <!-- Theme styles for this template -->
    <link href="CitezenDesignCode/assets/css/megamenu.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/theme/css/site.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/theme/css/site-responsive.css" rel="stylesheet" media="all" />
    <link href="CitezenDesignCode/theme/css/ma5gallery.css" rel="stylesheet" type="text/css" />
    <link href="CitezenDesignCode/theme/css/print.css" rel="stylesheet" type="text/css" media="print" />
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
    <!-- Custom JS for this template -->
    <noscript>
         <link href="CitezenDesignCode/theme/css/no-js.css" type="text/css" rel="stylesheet" />
      </noscript>

    <!-- <style>
            .page {
    display: none;
	  height:250px;
}
         </style>


      <script>

window.onhashchange=function(){    
    var targetDiv = $(location.hash);    
    if(!targetDiv.is(':visible')){$('.page').slideUp();targetDiv.slideDown();}
	else{$('.page').slideUp();}
};
if(window.hash!="") window.onhashchange();

      </script> -->
     <style>
      .blink {
          color:red;
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
      }
      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#linkIncrease').click(function () {
                modifyFontSize('increase');
            });

            $('#linkDecrease').click(function () {
                modifyFontSize('decrease');
            });

            $('#linkReset').click(function () {
                modifyFontSize('reset');
            })

            function modifyFontSize(flag) {
                var divElement = $('#divContent');
                var currentFontSize = parseInt(divElement.css('font-size'));

                if (flag == 'increase')
                    currentFontSize += 3;
                else if (flag == 'decrease')
                    currentFontSize -= 3;
                else
                    currentFontSize = 16;

                divElement.css('font-size', currentFontSize);
            }
        });
    </script>



    <asp:ContentPlaceHolder ID="head" runat="server">
    </asp:ContentPlaceHolder>
</head>
<body>
    <form id="form1" runat="server" >
        <div id="divContent">
            <div id="fb-root"></div>
            <header>
                <div class="region region-header-top">
                    <div id="block-cmf-content-header-region-block" class="block block-cmf-content first last odd">
                        <noscript class="no_scr">"JzavaScript is a standard programming language that is included to provide interactive features, Kindly enable Javascript in your browser. For details visit help page"
               </noscript>
                        <div class="wrapper common-wrapper">
                            <div class="container common-container four_content top-header">
                                <div class="common-left clearfix">
                                    <ul>
                                        <li class="gov-india"><span class="responsive_go_hindi" lang="hi"><a target="_blank" href="https://india.gov.in/hi" title="भारत सरकार ( बाहरी वेबसाइट जो एक नई विंडो में खुलती है)"></a></span></li>
                                        <li class="ministry"><span class="li_eng responsive_go_eng"><a target="_blank" href="https://india.gov.in/" title="Government of india,External Link that opens in a new window"></a></span></li>
                                    </ul>
                                </div>
                                <div class="common-right clearfix">
                                    <ul id="header-nav">
                                        <li class="ico-skip cf"><a href="#skipCont" title="">Skip to main content</a>
                                        </li>
                                        <!-- <li class="ico-site-search cf">
                              <a href="javascript:void(0);" id="toggleSearch" title="Site Search">
                              <img  src="CitezenDesignCode/assets/images/ico-site-search.png" alt="Site Search"/></a>
                              <div class="search-drop both-search">
                                 <div class="google-find">
                                    <form method="get" action="http://www.google.com/search" target="_blank">
                                       <label for="search_key_g" class="notdisplay">Search</label>
                                       <input type="text" name="q" value="" id="search_key_g"/> 
                                       <input type="submit" value="Search" class="submit" /> 
                                       <div class="">
                                          <input type="radio" name="sitesearch" value="" id="the_web"/> 
                                          <label for="the_web">The Web</label> 
                                          <input type="radio" name="sitesearch" value="india.gov.in" checked id="the_domain"/> <label for="the_domain"> INDIA.GOV.IN</label>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="find">
                                    <form name="searchForm">
                                       <label for="search_key" class="notdisplay">Search</label>
                                       <input type="text" name="search_key" id="search_key" onKeyUp="autoComplete()" autocomplete="off" required />
                                       <input type="submit" value="Search" class="bttn-search"/>
                                    </form>
                                    <div id="auto_suggesion"></div>
                                 </div>
                              </div>
                           </li>-->
                                        <li class="ico-accessibility cf">
                                            <a href="javascript:void(0);" id="toggleAccessibility" title="Accessibility Dropdown">
                                                <img src="CitezenDesignCode/assets/images/ico-accessibility.png" alt="Accessibility Dropdown" />
                                            </a>
                                            <ul style="visibility: hidden;">
                                                <li><a onclick="set_font_size(&#39;increase&#39;)" title="Increase font size" href="javascript:void(0);" id="linkIncrease">A<sup>+</sup>
                                                </a>
                                                </li>
                                                <li><a onclick="set_font_size()" title="Reset font size" href="javascript:void(0);" id="linkReset">A<sup>&nbsp;</sup></a> </li>
                                                <li><a onclick="set_font_size(&#39;decrease&#39;)" title="Decrease font size" id="linkDecrease" href="javascript:void(0);">A<sup>-</sup></a> </li>
                                                <!-- <li> <a href="javascript:void(0);" class="high-contrast dark" title="High Contrast">A</a> </li>
                                 <li> <a href="javascript:void(0);" class="high-contrast light" title="Normal Contrast" style="display: none;">A</a> </li>-->
                                            </ul>
                                        </li>
                                        <li class="ico-social cf">
                                            <a href="javascript:void(0);" id="toggleSocial" title="Social Medias">
                                                <img src="CitezenDesignCode/assets/images/ico-social.png" alt="Social Medias" /></a>
                                            <ul>
                                                <li><a target="_blank" title="External Link that opens in a new window" href="https://www.facebook.com/revenue.deptt.cg/">
                                                    <img alt="Facebook Page" src="CitezenDesignCode/assets/images/ico-facebook.png"></a></li>

                                                <li><a target="_blank" title="External Link that opens in a new window" href="https://www.youtube.com/channel/UCE7ZROmzp8xjpUDAWW_gfqw">
                                                    <img alt="youtube Page" src="CitezenDesignCode/assets/images/ico-youtube.png"></a></li>
                                            </ul>
                                        </li>
                                        <!--  <li class="ico-sitemap cf"><a href="" title="Sitemap">
                              <img  src="CitezenDesignCode/assets/images/ico-sitemap.png" alt="Sitemap" /></a>
                           </li>-->
                                        <li class="hindi cmf_lan d-hide">
                                            <label class="de-lag">
                                                <span style="display: none;">Language</span>
                                                <!--         <select title="Select Language">
                                    <option>हिन्दी</option>
                           <option>English</option>  -->
                                 </select>
                                            </label>
                                        </li>
                                        <!--  <li class="hindi cmf_lan m-hide">
                              <a href="javascript:;" title="Select Language">Language</a> 
                              <ul>
                                 <li><a target="_blank" href="" lang="hi" class="alink" title="Click here for हिन्दी version.">हिन्दी</a></li>
                              </ul>
                           </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p id="scroll" style="display: none;"><span></span></p>
                </div>
                <!--Top-Header Section end-->
                <section class="wrapper header-wrapper">
                    <div class="container common-container four_content  header-container">
                        <h2 class="logo">
                            <a href="/" title="Home" rel="home" class="header__logo" id="logo">
                                <img src="CitezenDesignCode/assets/images/emblem-dark.png" alt="national emblem">
                                <em><span>वाणिज्यकर विभाग (पंजीयन) </span>
                                    <span><h5>छत्तीसगढ़</h5></span>
                                </em>
                            </a>
                        </h2>
                        <!-- <div class="header-right clearfix">
                            <div class="right-content clearfix">
                                <div class="float-element">
                                    <a target="_blank" href="https://swachhbharat.mygov.in/" title="Swachh Bharat, External link that open in a new windows">
                                        <img src="https://epanjeeyan.cg.gov.in/IGRPortalWeb/images/logo.png" alt="Swachh Bharat"></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </section>
                <!--/.header-wrapper-->

                <div class="wrapper megamenu-wraper" style="background-color:#36486b">
                    <div class="container">
                        <a class="showhide" href="javascript:void(0)"><em></em><em></em><em></em></a>
                        <nav class="main-menu clearfix" id="main_menu">
                            <ul class="nav-menu">
                                 <li><a href="/" class="home"><i class="fa fa-home"></i>मुख्य पृष्ठ</a></li>
                               
                                <li><a href="pre_registration">प्री रजिस्ट्रेशन</a>
                                    <div class="sub-nav"> 
                                        <ul class="sub-nav-group ">
                                            <li><a href="https://revenue.cg.nic.in/bhuiyanuser/User/Selection_Report_For_KhasraDetail.aspx">प्री रजिस्ट्रेशन की प्रक्रिया</a></li>
                                           <!-- <li><a href="https://revenue.cg.nic.in/bhuiyanuser/User/Selection_Report_For_KhasraDetail.aspx">B1/PII प्राप्त करें</a></li> -->
                                             <li><a href="https://revenue.cg.nic.in/citizenui/" target="_blank">ऑनलाइन भुगतान की प्रक्रिया</a></li>
						<li><a href="https://bhuiyan.cg.nic.in/User/dsc_dwnload_report_foruser.aspx">यूजर गाइड</a></li> 

                                            <li><a href="http://revenue.cg.nic.in/bhuiyanreport/User/PropertyRegistration_Status_Citizen.aspx" target="_blank">प्री रजिस्ट्रेशन हेतू लॉग इन</a></li>
                                         <!--   <li><a href="https://revenue.cg.nic.in/bhuiyanreport/administrator/NamantranPanjiPrint_Citizen_New.aspx" target="_blank">नामांतरण पंजी की नक़ल</a></li> -->
                                                     <!-- <li><a href="https://revenue.cg.nic.in/bhuiyanuser/User/Selection_Report_For_KhasraDetail_withLanguage.aspx" target="_blank">पंजीयन की प्रक्रिया</a></li> -->
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="#">पंजीयन की प्रक्रिया</a>
                                   <div class="sub-nav">
                                      <ul class="sub-nav-group">
                                                <li><a href="https://revenue.cg.nic.in/bhuiyanreport/loginPage.aspx" target="_blank">कार्यालय में पंजीयन की प्रक्रिया</a></li>
                                             <li><a href="http://bhunaksha.cg.nic.in/" target="_blank">बंध पत्र की प्रक्रिया</a></li>
                                             <li><a href="https://revenue.cg.nic.in/revcase/" target="_blank">पंजीयन की प्रक्रिया </a></li>
                                             <!-- <li><a href="https://bhuiyan.cg.nic.in/loginPage.aspx">डिजिटल हस्ताक्षर</a></li>
                                             <li><a href="https://bhuiyan.cg.nic.in/MapUploadPdf/TNSlogin.aspx">नगर तथा ग्राम निवेश विभाग</a></li>
                                             <li><a href="https://bhuiyan.cg.nic.in/BankUpdated/Login.aspx">बैंक</a></li>
                                             <li><a href="https://revenue.cg.nic.in/gj/GirdwariLogin.aspx">गिरदावरी जाँच लॉगिन</a></li> -->
                                      </ul>
                                   </div>
                                </li>    

                               <!--  <li class="nav-item">
                                    <a class="nav-link text-white dropbtn" href="http://revenue.cg.nic.in/bhuiyanreport/User/PropertyRegistration_Status_NoticeAdvertisement.aspx">डाउनलोड</a>
                                </li> -->

                                 <li><a href="#">डाउनलोड</a>
                                    <div class="sub-nav">
                                        <ul class="sub-nav-group ">
                                            <li><a href="https://revenue.cg.nic.in/citizenrequest/" target="_blank">इनपुट फॉर्म</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/" target="_blank">विलेख नमूना</a></li>
                                            <li><a href="https://bhuiyan.cg.nic.in/User/dsc_selection_report_foruser.aspx" target="_blank">अभिलेख निरीक्षण</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">गाइड लाइन पंजी</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">विलेखवार मुद्रांक एवं पंजीयन शुल्क विवरणी</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">प्रमाणित प्रतिलिपि का आवेदन पत्र</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">छत्तीसगढ़  रजिस्ट्रेशनकारण नियम 1943</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">छत्तीसगढ़ स्टाम्प नियम</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">कंप्यूटरीकृत पंजीयन नियम</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">हिंदी सॉफ्टवेर</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">लोकसेवा गांरटी</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">ऑनलाइन दस्तावेज सर्च करने के संबंध में</a></li>
                                            <li><a href="https://revenue.cg.nic.in/revcase/sahukarilicapplication.aspx" target="_blank">भारमुक्त प्रमाण पत्र पाप्ति हेतु प्रक्रिया</a></li>

                                        </ul>
                                    </div>
                                </li>

                                
                                <li><a href="#">एमआईएस</a>
                                   <div class="sub-nav">
                                      <ul class="sub-nav-group">
                                      <li><a href="https://revenue.cg.nic.in/bhuiyanreport/administrator/cropWiseKhasraCountWithTotalArea_Citizen.aspx" target="_blank">एमआईएस</a></li>
                                      </div>
                                </li>
                                <li><a href="#">अन्य</a>
                                   <div class="sub-nav">
                                      <ul class="sub-nav-group">
                                      <li><a href="">ई-स्टांप खरीदें</a></li>
                                       <li><a href="">ई-चलान खरीदें</a></li> 
                                       <li><a href="">बैकलॉग इंट्</a></li> 

                                      </div>
                                </li>
                                <li><a href="#">प्रतिक्रिया</a>
                                   <div class="sub-nav">
                                      <ul class="sub-nav-group">
                                      <li><a href="">प्रतिक्रिया</a></li>
                                       <li><a href="">शिकायत</a></li> 
                                       <li><a href="">यूजर गाइड</a></li> 

                                      </div>
                                </li>
                               
                                 
                                          
          </ul>
       </nav>

       <nav class="main-menu clearfix" id="overflow_menu">
          <ul class="nav-menu clearfix"></ul>
       </nav>
        </div>
        </div>
      </header>

        <asp:ContentPlaceHolder ID="ContentPlaceHolder1" runat="server">
             <style>
        .minister-sub1 {
            width: 100%;
            float: left;
            text-align: center;
            height: auto;
            padding: 10px 10px;
            position: relative;
            background: #fff;
        }

        em {
            font-style: normal;
            font-weight: bold;
        }

        .zoom:hover {
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari 3-8 */
            transform: scale(1.1);
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,700');


        * {
            transition: all 0.3s ease-out;
        }

        html,
        body {
            height: 100%;
            font-family: "Nunito", sans-serif;
            font-size: 16px;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        h5 {
            color: #262626;
            font-size: 0px;
            line-height: 24px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        p {
            font-size: 17px;
            font-weight: 400;
            line-height: 20px;
            color: #666666;
            &.small;

        
            font-size: 14px;
        }

        }

        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 50px;
            height: 50px;
            overflow: hidden;
            top: 0;
            right: 0;
            background-color: #00838d;
            border-radius: 0 4px 0 32px;
        }

        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }

        .card1 {
            display: block;
            position: relative;
            max-width: 262px;
            background-color: #f2f8f9;
            border-radius: 4px;
            padding: 30px 24px;
            margin: 12px;
            text-decoration: none;
            z-index: 0;
            overflow: hidden;
            border: initial;
            height: 126px;
            &:before;

        
            content: "";
            position: absolute;
            z-index: -1;
            top: -16px;
            right: -16px;
            background: #00838d;
            height: 32px;
            width: 32px;
            border-radius: 32px;
            transform: scale(1);
            transform-origin: 50% 50%;
            transition: transform 0.25s ease-out;
        }

        &:hover:before {
            transform: scale(21);
        }

        }

        .card1:hover {
            p;

        
            transition: all 0.3s ease-out;
            color: rgba(255, 255, 255, 0.8);
        }

        h5 {
            transition: all 0.3s ease-out;
            color: #ffffff;
        }

        }

        .card2 {
            display: block;
            top: 0px;
            position: relative;
            max-width: 262px;
            background-color: #f2f8f9;
            border-radius: 4px;
            padding: 32px 24px;
            margin: 12px;
            text-decoration: none;
            z-index: 0;
            overflow: hidden;
            border: 1px solid #f2f8f9;
            &:hover;

        
            transition: all 0.2s ease-out;
            box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
            top: -4px;
            border: 1px solid #cccccc;
            background-color: white;
        }

        &:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: -16px;
            right: -16px;
            background: #00838d;
            height: 32px;
            width: 32px;
            border-radius: 32px;
            transform: scale(2);
            transform-origin: 50% 50%;
            transition: transform 0.15s ease-out;
        }

        &:hover:before {
            transform: scale(2.15);
        }

        }

        .card3 {
            display: block;
            top: 0px;
            position: relative;
            max-width: 262px;
            background-color: #f2f8f9;
            border-radius: 4px;
            padding: 32px 24px;
            margin: 12px;
            text-decoration: none;
            overflow: hidden;
            border: 1px solid #f2f8f9;
            .go-corner;

        
            opacity: 0.7;
        }

        &:hover {
            border: 1px solid #00838d;
            box-shadow: 0px 0px 999px 999px rgba(255, 255, 255, 0.5);
            z-index: 500;
        }

        }

        .card3:hover {
            p;

        
            color: #00838d;
        }

        .go-corner {
            transition: opactiy 0.3s linear;
            opacity: 1;
        }

        }

        .card4 {
            display: block;
            top: 0px;
            position: relative;
            max-width: 262px;
            background-color: #ffffff;
            border-radius: 4px;
            padding: 32px 24px;
            margin: 40px;
            text-decoration: none;
            overflow: hidden;
            border: 1px solid #cccccc;
            .go-corner;

        
            background-color: #00838d;
            height: 100%;
            width: 16px;
            padding-right: 9px;
            border-radius: 0;
            transform: skew(6deg);
            margin-right: -36px;
            align-items: start;
            background-image: linear-gradient(-45deg, #8F479A 1%, #DC2A74 100%);
        }

        .go-arrow {
            transform: skew(-6deg);
            margin-left: -2px;
            margin-top: 9px;
            opacity: 0;
        }

        &:hover {
            border: 1px solid #CD3D73;
        }

        h5 {
            margin-top: 8px;
        }

        }

        .card4:hover {
            .go-corner;

        
            margin-right: -12px;
        }

        .go-arrow {
            opacity: 1;
        }

        }
    </style>


    <style>
        body {
            font-family: "Libre Baskerville", serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            background-color: #0c0f15;
            overflow-x: hidden;
            color: #ababab;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #f90a23;
            background-image: -webkit-linear-gradient(45deg,rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        .heading-page {
            text-transform: uppercase;
            font-size: 43px;
            font-weight: bolder;
            letter-spacing: 3px;
            color: white;
        }

        a {
            color: inherit;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

            a:hover, a:focus {
                color: #ababab;
                text-decoration: none;
                outline: 0 none;
            }

        h1, h2, h3,
        h4, h5, h6 {
            color: #36486b;
            font-family: "Open Sans", sans-serif;
            margin: 0;
            line-height: 1.3;
        }

        p {
            margin-bottom: 20px;
        }

            p:last-child {
                margin-bottom: 0;
            }

        /*
 * Selection color
 */
        ::-moz-selection {
            background-color: #FA6862;
            color: #fff;
        }

        ::selection {
            background-color: #FA6862;
            color: #fff;
        }

        /*
 *  Reset bootstrap's default style
 */
        .form-control::-webkit-input-placeholder,
        ::-webkit-input-placeholder {
            opacity: 1;
            color: inherit;
        }

        .form-control:-moz-placeholder,
        :-moz-placeholder {
            /* Firefox 18- */
            opacity: 1;
            color: inherit;
        }

        .form-control::-moz-placeholder,
        ::-moz-placeholder {
            /* Firefox 19+ */
            opacity: 1;
            color: inherit;
        }

        .form-control:-ms-input-placeholder,
        :-ms-input-placeholder {
            opacity: 1;
            color: inherit;
        }

        button, input, select,
        textarea, label {
            font-weight: 400;
        }

        .btn {
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

            .btn:hover, .btn:focus, .btn:active:focus {
                outline: 0 none;
            }

        .btn-primary {
            background-color: #FA6862;
            border: 0;
            font-family: "Open Sans", sans-serif;
            font-weight: 700;
            height: 48px;
            line-height: 50px;
            padding: 0 42px;
            text-transform: uppercase;
        }

            .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary:active:focus {
                background-color: #f9423a;
            }

        .btn-border {
            border: 1px solid #d7d8db;
            display: inline-block;
            padding: 7px;
        }

        /*
 *  CSS Helper Class
 */
        .clear:before, .clear:after {
            content: " ";
            display: table;
        }

        .clear:after {
            clear: both;
        }

        .pt-table {
            display: table;
            width: 100%;
            height: -webkit-calc(100vh - 4px);
            height: -moz-calc(100vh - 4px);
            height: calc(100vh - 4px);
        }

        .pt-tablecell {
            display: table-cell;
            vertical-align: middle;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .relative {
            position: relative;
        }

        .primary,
        .link:hover {
            color: #FA6862;
        }

        .no-gutter {
            margin-left: 0;
            margin-right: 0;
        }

            .no-gutter > [class^="col-"] {
                padding-left: 0;
                padding-right: 0;
            }

        .flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .flex-middle {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-align-items: center;
            align-items: center;
        }

        .space-between {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            justify-content: space-between;
        }

        .nicescroll-cursors {
            background: #FA6862 !important;
        }

        .preloader {
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1000;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: flex;
        }

            .preloader.active.hidden {
                display: none;
            }

        .loading-mask {
            background-color: #FA6862;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 20%;
            -webkit-transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
            -moz-transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
            -o-transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
            transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
        }

            .loading-mask:nth-child(2) {
                left: 20%;
                -webkit-transition-delay: 0.1s;
                -moz-transition-delay: 0.1s;
                -o-transition-delay: 0.1s;
                transition-delay: 0.1s;
            }

            .loading-mask:nth-child(3) {
                left: 40%;
                -webkit-transition-delay: 0.2s;
                -moz-transition-delay: 0.2s;
                -o-transition-delay: 0.2s;
                transition-delay: 0.2s;
            }

            .loading-mask:nth-child(4) {
                left: 60%;
                -webkit-transition-delay: 0.3s;
                -moz-transition-delay: 0.3s;
                -o-transition-delay: 0.3s;
                transition-delay: 0.3s;
            }

            .loading-mask:nth-child(5) {
                left: 80%;
                -webkit-transition-delay: 0.4s;
                -moz-transition-delay: 0.4s;
                -o-transition-delay: 0.4s;
                transition-delay: 0.4s;
            }

        .preloader.active.done {
            z-index: 0;
        }

        .preloader.active .loading-mask {
            width: 0;
        }

        /*------------------------------------------------
    Start Styling
-------------------------------------------------*/
        .mt20 {
            margin-top: 20px;
        }

        .site-wrapper {
            border-top: 4px solid #ff0037;
        }

        .page-close {
            font-size: 30px;
            position: absolute;
            right: 30px;
            top: 30px;
            z-index: 100;
        }

        .page-title {
            margin-bottom: 75px;
        }

            .page-title img {
                margin-bottom: 20px;
            }

            .page-title h2 {
                font-size: 68px;
                margin-bottom: 25px;
                position: relative;
                z-index: 0;
                font-weight: 900;
                text-transform: uppercase;
            }

            .page-title p {
                font-size: 16px;
            }

            .page-title .title-bg {
                color: rgba(30, 37, 48, 0.07);
                font-size: 158px;
                left: 0;
                letter-spacing: 10px;
                line-height: 0.7;
                position: absolute;
                right: 0;
                top: 50%;
                z-index: -1;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
            }

        .section-title {
            margin-bottom: 20px;
        }

            .section-title h3 {
                display: inline-block;
                position: relative;
            }

                .section-title h3::before, .section-title h3::after {
                    content: "";
                    height: 2px;
                    position: absolute;
                    bottom: 8px;
                    left: -webkit-calc(100% + 14px);
                    left: -moz-calc(100% + 14px);
                    left: calc(100% + 14px);
                }

                .section-title h3::before {
                    background-color: #36486b;
                    width: 96px;
                    bottom: 14px;
                }

                .section-title h3::after {
                    background-color: #FA6862;
                    width: 73px;
                }

            .section-title.light h3 {
                color: #fff;
            }

                .section-title.light h3::before {
                    background-color: #fff;
                }

        .page-nav {
            bottom: 40px;
            left: 0;
            position: absolute;
            right: 0;
        }

            .page-nav span {
                font-family: "Open Sans", sans-serif;
                font-size: 14px;
                font-weight: 500;
                line-height: 0.9;
                text-transform: uppercase;
            }

        /*------------------------------------------------
    Home Page
-------------------------------------------------*/

        .hexagon-item:first-child {
            margin-left: 0;
        }

        .page-home {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            vertical-align: middle;
        }

            .page-home .overlay {
                background-color: rgba(14, 17, 24, 0.97);
            }

        /* End of container */
        .hexagon-item {
            cursor: pointer;
            width: 200px;
            height: 173.20508px;
            float: left;
            margin-left: -29px;
            z-index: 0;
            position: relative;
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -ms-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg);
        }

            .hexagon-item:first-child {
                margin-left: 0;
            }

            .hexagon-item:hover {
                z-index: 1;
            }

                .hexagon-item:hover .hex-item:last-child {
                    opacity: 1;
                    -webkit-transform: scale(1.3);
                    -moz-transform: scale(1.3);
                    -ms-transform: scale(1.3);
                    -o-transform: scale(1.3);
                    transform: scale(1.3);
                }

                .hexagon-item:hover .hex-item:first-child {
                    opacity: 1;
                    -webkit-transform: scale(1.2);
                    -moz-transform: scale(1.2);
                    -ms-transform: scale(1.2);
                    -o-transform: scale(1.2);
                    transform: scale(1.2);
                }

                    .hexagon-item:hover .hex-item:first-child div:before,
                    .hexagon-item:hover .hex-item:first-child div:after {
                        height: 5px;
                    }

                .hexagon-item:hover .hex-item div::before,
                .hexagon-item:hover .hex-item div::after {
                    /*manas*/
                    background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);
                }

                .hexagon-item:hover .hex-content svg {
                    -webkit-transform: scale(0.97);
                    -moz-transform: scale(0.97);
                    -ms-transform: scale(0.97);
                    -o-transform: scale(0.97);
                    transform: scale(0.97);
                }

        .page-home .hexagon-item:nth-last-child(1),
        .page-home .hexagon-item:nth-last-child(2),
        .page-home .hexagon-item:nth-last-child(3) {
            -webkit-transform: rotate(30deg) translate(87px, -80px);
            -moz-transform: rotate(30deg) translate(87px, -80px);
            -ms-transform: rotate(30deg) translate(87px, -80px);
            -o-transform: rotate(30deg) translate(87px, -80px);
            transform: rotate(30deg) translate(87px, -80px);
        }

        .hex-item {
            position: absolute;
            top: 0;
            left: 50px;
            width: 100px;
            height: 173.20508px;
        }

            .hex-item:first-child {
                z-index: 0;
                -webkit-transform: scale(0.9);
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -o-transform: scale(0.9);
                transform: scale(0.9);
                -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
                -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
                -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
                transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .hex-item:last-child {
                transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
                z-index: 1;
            }

            .hex-item div {
                box-sizing: border-box;
                position: absolute;
                top: 0;
                width: 100px;
                height: 173.20508px;
                -webkit-transform-origin: center center;
                -moz-transform-origin: center center;
                -ms-transform-origin: center center;
                -o-transform-origin: center center;
                transform-origin: center center;
            }

                .hex-item div::before, .hex-item div::after {
                    background-color: #36486b;
                    content: "";
                    position: absolute;
                    width: 100%;
                    height: 3px;
                    -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                    -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                    -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                }

                .hex-item div:before {
                    top: 0;
                }

                .hex-item div:after {
                    bottom: 0;
                }

                .hex-item div:nth-child(1) {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }

                .hex-item div:nth-child(2) {
                    -webkit-transform: rotate(60deg);
                    -moz-transform: rotate(60deg);
                    -ms-transform: rotate(60deg);
                    -o-transform: rotate(60deg);
                    transform: rotate(60deg);
                }

                .hex-item div:nth-child(3) {
                    -webkit-transform: rotate(120deg);
                    -moz-transform: rotate(120deg);
                    -ms-transform: rotate(120deg);
                    -o-transform: rotate(120deg);
                    transform: rotate(120deg);
                }

        .hex-content {
            color: #fff;
            display: block;
            height: 180px;
            margin: 0 auto;
            position: relative;
            text-align: center;
            transform: rotate(-30deg);
            width: 156px;
        }

            .hex-content .hex-content-inner {
                left: 50%;
                margin: -3px 0 0 2px;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                -moz-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                -o-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .hex-content .icon {
                display: block;
                font-size: 36px;
                line-height: 30px;
                margin-bottom: 11px;
            }

            .hex-content .title {
                display: block;
                font-family: "Open Sans", sans-serif;
                font-size: 14px;
                letter-spacing: 1px;
                line-height: 24px;
                text-transform: uppercase;
            }

            .hex-content svg {
                left: -7px;
                position: absolute;
                top: -13px;
                transform: scale(0.87);
                z-index: -1;
                -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
                transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            }

            .hex-content:hover {
                color: #fff;
            }

        .page-home .hexagon-item:nth-last-child(1), .page-home .hexagon-item:nth-last-child(2), .page-home .hexagon-item:nth-last-child(3) {
            -webkit-transform: rotate(30deg) translate(87px, -80px);
            -moz-transform: rotate(30deg) translate(87px, -80px);
            -ms-transform: rotate(30deg) translate(87px, -80px);
            -o-transform: rotate(30deg) translate(87px, -80px);
            transform: rotate(30deg) translate(87px, -80px);
        }
        /*------------------------------------------------
    Welcome Page
-------------------------------------------------*/
        .author-image-large {
            position: absolute;
            right: 0;
            top: 0;
        }

            .author-image-large img {
                height: -webkit-calc(100vh - 4px);
                height: -moz-calc(100vh - 4px);
                height: calc(100vh - 4px);
            }


        @media (min-width: 1200px) {
            .col-lg-offset-2 {
                margin-left: 16.66666667%;
            }
        }

        @media (min-width: 1200px) {
            .col-lg-8 {
                width: 66.66666667%;
            }
        }

        .hexagon-item:first-child {
            margin-left: 0;
        }

        .pt-table.desktop-768 .pt-tablecell {
            padding-bottom: 110px;
            padding-top: 60px;
        }



        .hexagon-item:hover .icon i {
            /*manas*/
            color: #87bdd8;
            transition: 0.6s;
        }


        .hexagon-item:hover .title {
            -webkit-animation: focus-in-contract 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: focus-in-contract 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }
        /***************************/

        @-webkit-keyframes focus-in-contract {
            0% {
                letter-spacing: 1em;
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        @keyframes focus-in-contract {
            0% {
                letter-spacing: 1em;
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }





        @media only screen and (max-width: 767px) {
            .hexagon-item {
                float: none;
                margin: 0 auto 50px;
            }

                .hexagon-item:first-child {
                    margin-left: auto;
                }

            .page-home .hexagon-item:nth-last-child(1), .page-home .hexagon-item:nth-last-child(2), .page-home .hexagon-item:nth-last-child(3) {
                -webkit-transform: rotate(30deg) translate(0px, 0px);
                -moz-transform: rotate(30deg) translate(0px, 0px);
                -ms-transform: rotate(30deg) translate(0px, 0px);
                -o-transform: rotate(30deg) translate(0px, 0px);
                transform: rotate(30deg) translate(0px, 0px);
            }
        }

        .fillcolor {
            background: linear-gradient(to top, rgb(9, 32, 63) 0%, rgb(83, 120, 149) 100%);
        }

        .service-card {
            position: relative;
            min-height: 190px;
            border: 1px solid #dee2e6;
            overflow: hidden;
            border-radius: 90px;
            border: 1px solid;
            background-color: #B9D9EB;
            cursor: pointer;
            position: relative;
            padding: 10px 20px;
            background: white;
            font-size: 28px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            transition: all 1s;
            &:after,&:before;

        
            content: " ";
            width: 10px;
            height: 10px;
            position: absolute;
            border: 0px solid #fff;
            transition: all 1s;
        }

        &:after {
            top: -1px;
            left: -1px;
            border-top: 5px solid black;
            border-left: 5px solid black;
        }

        &:before {
            bottom: -1px;
            right: -1px;
            border-bottom: 5px solid black;
            border-right: 5px solid black;
        }

        &:hover {
            background-color: aliceblue;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            // background:rgba(0,0,0,.5);
            // color:white;
            &:before,&:after;

        
            width: 100%;
            height: 100%;
            // border-color:white;
        }

        }
        }

        .service-card .body {
            padding: 10px;
        }

            .service-card .body img.icon {
                margin-top: 40px;
                width: 90px;
                margin-bottom: 25px;
                -webkit-transition: all, 0.3s;
                transition: all, 0.3s;
                margin-left: auto;
                margin-right: auto;
            }

        @media (prefers-reduced-motion: reduce) {
            .service-card .body img.icon {
                -webkit-transition: none;
                transition: none;
            }
        }

        .service-card .body .subtitle {
            position: absolute;
            bottom: -100%;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all, 0.3s;
            transition: all, 0.3s;
        }

        @media (prefers-reduced-motion: reduce) {
            .service-card .body .subtitle {
                -webkit-transition: none;
                transition: none;
            }
        }

        .service-card:hover .body img.icon {
            margin-top: 5px;
            width: 45px;
            margin-bottom: 15px;
        }

        /*.service-card:hover .body .subtitle {
  bottom: 7px;
  opacity: 1;
  visibility: visible;
    background-color:#d7d8db;
    font:bold;
}*/

        .icon, .text-cont {
            padding: 1px;
            display: table-cell;
            vertical-align: middle;
            color: #fff;
        }
    </style>

    <style>
        .about {
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: left;
        }

        .about-img-holder {
            min-width: 400px;
            max-width: 400px;
            margin-right: 20px;
        }

            .about-img-holder .about-img {
                width: 100%;
                margin-bottom: 15px;
            }

        .about-caption {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        @media (max-width: 767.98px) {
            .about {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                text-align: center;
            }

            .about-img-holder {
                max-width: 220px;
                min-width: 100%;
                width: 100%;
                margin: auto;
                margin-bottom: 20px;
            }
        }
    </style>

    <style>
        h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
    </style>

    <script>
        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <link href="CitezenDesignCode/Revenue_contentCss/assets/manas/bootstrap.min.css" rel="stylesheet" />
    <link href="CitezenDesignCode/Revenue_contentCss/theme/css/site.css" rel="stylesheet" />
    <link href="CitezenDesignCode/Revenue_contentCss/theme/css/site-responsive.css" rel="stylesheet" />
    <link href="NewTry/material-dashboard.css" rel="stylesheet" />
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->

    <!-- <script>

        document.getElementById("toggleBtn").onclick = function () {
            var secondDiv = document.getElementById("secondDiv");
            if (secondDiv.style.display === "none") {
                secondDiv.style.display = "block";
            } else {
                secondDiv.style.display = "none";
            }
        };
    </script>-->



<script>
        /** 
         * Disable right-click of mouse, F12 key, and save key combinations on page 
         */
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function (e) {
            //document.onkeydown = function(e) { 
            // "I" key 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            // "J" key 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            // "S" key + macOS 
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            // "U" key 
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            // "F12" key 
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
            // "C" key 
            if (e.ctrlKey && event.keyCode == 67) {
                disabledEvent(e);
            }
        }, false);
        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }</script> 

</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <section class="wrapper banner-wrapper" style="background-color: #fff">
        <div id="flexSlider" class="flexslider">
            <ul class="slides">


               

 <li>
                    <img src="CitezenDesignCode/theme/images/banner/new_epanjiyan/1.png" alt="banner1" /></li>
 <li>
                    <img src="CitezenDesignCode/theme/images/banner/new_epanjiyan/2.png" alt="banner2" /></li>
 <li>
                    <img src="CitezenDesignCode/theme/images/banner/new_epanjiyan/3.png" alt="banner3" /></li>
 <li>
                    <img src="CitezenDesignCode/theme/images/banner/new_epanjiyan/4.png" alt="banner4" /></li>
 <li>
                    <img src="CitezenDesignCode/theme/images/banner/new_epanjiyan/5.png" alt="banner5" /></li>
<!--  <li>
                    <img src="CitezenDesignCode/theme/images/banner/new_epanjiyan/6.png" alt="banner6" /></li> -->






                 



            </ul>
        </div>
    </section>
    <div class="wrapper" id="skipCont"></div>

    <!-- about section -->
    <div class="col-md-12">
        <div class="row">
              <div class="col-sm-2">
                             <center><img src="CitezenDesignCode/theme/images/banner/NEW/cm.png" /></center>
                             <center><div style="font:25px bold;color:black">मान. श्री विष्णुदेव साय जी</div></center>
                            <center><div style="font:20px bold;padding-top:10px;color:black">मुख्यमंत्री - छ.ग.शासन</div></center>
                        </div>
          <div class="col-md-8 position-relative z-index-2">
              <br>
            <div class="card card-plain mb-4">
                 <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">छत्तीसगढ़ ई-पंजीयन सेवा जानकारी</h2>
                                <p style="font:15px ;color:black;word-spacing: 5px;">ई पंजीयन (संपत्ति की पंजीकरण एप्लीकेशन) सॉफ्टवेयर, नागरिक-केंद्रित सेवाओं को अधिक तेज़ी से और समय पर प्रदान करने के अवसर प्रदान करता है। छत्तीसगढ़ सरकार के उप-पंजीयक कार्यालयों में इसे उपयोग किया गया हैंI इसके तहत सरकार नागरिको को निश्चित समयाबधि के भीतर कोम्पुत्रिकित पंजीकृत दस्ताबेज उपलब्ध कराने में बचनबध्य हैंI</p>
                                <br>
                                <p style="color:green;">डैशबोर्ड दैनिक आधार पर अपडेट होता है। नीचे दिखाया गया डाटा पिछले कार्य दिवस का है। किसी अन्य कार्य दिवस का विवरण देखने के लिए डेट विंडोज़ को सेलेक्ट करे |</p>
                                <ul style="font:15px ;color:black;word-spacing: 5px;">
                                    <li>स्थल निरिक्षण आवश्यक न हो : 01 दिवस</li>
                                    <li>स्थल निरिक्षण आवश्यक  हो : 07 दिवस</li>
                                </ul><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            

            <div class="col-md-2">
                             <center><img src="CitezenDesignCode/theme/images/banner/NEW/minister.png" /></center>
                            <center><div style="font:25px bold;color:black">मान. श्री टंकराम वर्मा जी</div></center>
                            <center><div style="font:20px bold;padding-top:0px;color:black"> राजस्व मंत्री - छ.ग.शासन</div></center>
                        </div><br>
            </div>

        </div>
        <section class="section">

            <!-- <div class="col-md-12">
                <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">खसरा सम्बंधित जानकारी</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div> -->
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                    <div class="card  mb-2 bg-warning">
                        <div class="card-header p-3 pt-2">
                            <!-- <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div> -->
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize text-dark">कुल अपॉइंटमेंट प्राप्त</p>
                                <!-- <h4 class="mb-0"><asp:Label ID="lblKhasra" runat="server"></asp:Label></h4> -->
                            </div>
                        </div>

                        <!-- <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date3" runat="server"></asp:Label></span></p>
                        </div> -->
                    </div>

                   
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="card  mb-2 bg-info">
                        <div class="card-header p-3 pt-2 bg-success">
                            <!-- <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div> -->
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize text-dark">कुल दस्तावेज प्राप्त</p>
                                <h4 class="mb-0 "><asp:Label ID="lblShashkiyKhasra" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <!-- <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date4" runat="server"></asp:Label></span></p>
                        </div> -->
                    </div>

                   

                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="card  mb-2 bg-danger">
                        <div class="card-header p-3 pt-2">
                           <!--  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div> -->
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize text-dark">कुल दस्तावेज पंजीकृत</p>
                                <h4 class="mb-0"><asp:Label ID="lblBandhak" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                       <!--  <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date5" runat="server"></asp:Label></span></p>
                        </div> -->
                    </div>


                </div>
             
               
                  
                </div>

            <div class="row ">
                   <div class="col-lg-4 col-sm-5">
                    <div class="card  mb-2 bg-primary">
                        <div class="card-header p-3 pt-2">
                            <!-- <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div> -->
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize text-dark">औसतन पंजीकरण समय</p>
                                <h4 class="mb-0"><asp:Label ID="lblDsign" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <!-- <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date6" runat="server"></asp:Label></span></p>
                        </div> -->
                    </div>

                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="card  mb-2 bg-info">
                        <div class="card-header p-3 pt-2">
                           <!--  <div class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute" style="background-color:#4040a1">
                                   <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div> -->
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize text-dark">मीडियन पंजीकरण समय</p>
                                <h4 class="mb-0"><asp:Label ID="lblnazool" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <!-- <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="Label10" runat="server"></asp:Label> </span></p>
                        </div> -->
                    </div>

                   
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="card  mb-2 bg-secondary">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <!-- <div class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute" style="background-color:#622569">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div> -->
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize text-dark">न्युनतम पंजीकरण समय</p>
                                <h4 class="mb-0 "><asp:Label ID="lbldiverted" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                       <!--  <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder"><asp:Label ID="Label12" runat="server"></asp:Label> </span></p>
                        </div> -->
                    </div>
                </div>
                
                </div>
                
            </div>
            <div class="col-md-1"></div></div>

             

            </div>
            </div>

        </section>

    <!-- end of about section -->
    <!--      <section  class="section">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">                
                        <div class="ag-offer-block"  style="padding:0">
                    <div class="ag-format-container" style="padding:0">
                    <ul class="ag-offer_list" style="padding:0">
                        
                      <li class="ag-offer_item" style="background-color:#c1502e;border:10px solid white;">
                          <a href="https://bhuiyan.cg.nic.in/" style="color:black">
                        <div class="ag-offer_visible-item">
                          <div class="ag-offer_img-box">
                            <img src="RevenueSiteStyleCode/IMAGENEW/ico1.png" class="ag-offer_img" alt="" />
                          </div>
                          <div class="ag-offer_title">
                            भुइयाँ
                          </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                          <p class="ag-offer_text">
                            जमीन सम्बंधित जानकारी हेतु!
                          </p>
                        </div>
                              </a>
                      </li>
                      <li class="ag-offer_item"  style="background-color:#ffcc5c;border:10px solid white;">
                           <a href="http://bhunaksha.cg.nic.in/" style="color:black">
                        <div class="ag-offer_visible-item">
                          <div class="ag-offer_img-box">
                            <img src="RevenueSiteStyleCode/IMAGENEW/ico6.png" class="ag-offer_img" alt="" />
                          </div>
                          <div class="ag-offer_title">
                            भू-नक्शा
                          </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                          <p class="ag-offer_text">
                            सम्बंधित जमीन का नजरीय देंखें/ प्राप्त करें!
                          </p>
                        </div>
                               </a>
                      </li>
                      <li class="ag-offer_item"  style="background-color:#5b9aa0;border:10px solid white;">
                           <a href="https://revenue.cg.nic.in/revcase/" style="color:black">
                        <div class="ag-offer_visible-item">
                          <div class="ag-offer_img-box">
                            <img src="RevenueSiteStyleCode/IMAGENEW/ico5.png" class="ag-offer_img" alt="" />
                          </div>
                          <div class="ag-offer_title">
                            राजस्व न्यायालय
                          </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                          <p class="ag-offer_text">
                            राजस्व न्यायालय में प्रस्तुत  प्रकरणों की जानकारी!
                          </p>
                        </div>
                               </a>
                      </li>
                      <li class="ag-offer_item"  style="background-color:#34A853;border:10px solid white;">
                           <a href="https://revenue.cg.nic.in/varsha/" style="color:black">
                        <div class="ag-offer_visible-item">
                          <div class="ag-offer_img-box">
                            <img src="RevenueSiteStyleCode/IMAGENEW/ico4.png" class="ag-offer_img" alt="" />
                          </div>
                          <div class="ag-offer_title">
                            वर्षा के आंकड़े 
                          </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                          <p class="ag-offer_text">
                             वर्षा के आकड़ों की जानकारी!
                          </p>
                        </div>
                               </a>
                      </li>
                      <li class="ag-offer_item"   style="background-color:#838060;border:10px solid white;">
                           <a href="https://revenue.cg.nic.in/cropcut/" style="color:black">
                        <div class="ag-offer_visible-item">
                          <div class="ag-offer_img-box">
                            <img src="RevenueSiteStyleCode/IMAGENEW/ico3.png" class="ag-offer_img" alt="" />
                          </div>
                          <div class="ag-offer_title">
                            फसल प्रयोग
                          </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                          <p class="ag-offer_text">
                            फसल सम्बंधित जानकारी!
                          </p>
                        </div>
                               </a>
                      </li>
                      <li class="ag-offer_item"   style="background-color:#034f84;border:10px solid white;">
                           <a href="https://revenue.cg.nic.in/relief/" style="color:black">
                        <div class="ag-offer_visible-item">
                          <div class="ag-offer_img-box">
                            <img src="RevenueSiteStyleCode/IMAGENEW/ico2.png" class="ag-offer_img" alt="" />
                          </div>
                          <div class="ag-offer_title">आपदा सहायता</div>
                        </div>
                        <div class="ag-offer_hidden-item">
                            <p class="ag-offer_text">
                            राजस्व आपदा सम्बंधित जानकारी!
                          </p>
                        </div>
                               </a>
                      </li>
                    </ul>
                  </div>
                </div></div>
                    <div class="col-md-4">
                         <div class="waviy">
                           <span style="--i:1">म</span>
                           <span style="--i:3">ह</span>
                           <span style="--i:4">त्व</span>
                           <span style="--i:5">पू</span>
                           <span style="--i:6">र्ण</span>
                           <span style="--i:7;color:red">!</span>
                           <span style="--i:8;color:red">!</span>
                           <span style="--i:9;color:red">!</span>

                          </div>
                        <h6>तहसीलदार लॉग इन में नोटिस इश्तेहार को डिजिटल हस्ताक्षर की सविधा प्रदान की गई है</h6>
                        <h6>गिरदावरी प्रविष्टि तहसीलदार स्वीकृति के माध्यम से कर सकतें हैं.</h6>
                    </div>
                </div>
            </div>

        </section>-->
    <section class="section" id="service">
        <div class="container-fluid text-center" style="padding-top: 10px;">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
 <div class="col-md-6 col-lg-2">
                        <a href="https://revenue.cg.nic.in/revcase/" target="_blank">
                        <div class="service-card">
                            <div class="body">
                                <img src="NewTry/assets1/imgs/RGGBKMNY.png"
                                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                    class="icon">
                                <h6 class="title">राजस्व न्यायालय </h6>
                                <p class="subtitle">
                                    Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.
                                </p>
                            </div>
                        </div>
                             </a>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <a href="https://revenue.cg.nic.in/najool/Login.aspx" target="_blank">
                        <div class="service-card">
                            <div class="body">
                                
                                <img src="NewTry/assets1/imgs/Najool.png" class="icon" />
                                <h6 class="title">नजूल भूमि संधारण खसरा</h6>
                                <p class="subtitle">
                                    Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.
                                </p>
                                   
                            </div>
                        </div>
                            </a>
                    </div>
                    <div class="col-md-6 col-lg-2">
                         <a href="https://revenue.cg.nic.in/diversion/" target="_blank">
                        <div class="service-card">
                            <div class="body">
                                <img src="NewTry/assets1/imgs/diversion.png"
                                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                    class="icon">
                                <h6 class="title">परिवर्तित भूमि संधारण खसरा</h6>
                                <p class="subtitle">
                                    Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.
                                </p>
                            </div>
                        </div>
                              </a>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <a href="https://revenue.cg.nic.in/varsha/" target="_blank">
                        <div class="service-card">
                            <div class="body">
                                <img src="NewTry/assets1/imgs/varsha.png"
                                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                    class="icon">
                                <h6 class="title">वर्षा की जानकारी</h6>
                                <p class="subtitle">
                                    Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.
                                </p>
                            </div>
                        </div>
                             </a>
                    </div>

                    <div class="col-md-6 col-lg-2">
                        <a href="https://revenue.cg.nic.in/cropcut/" target="_blank">
                        <div class="service-card">
                            <div class="body">
                                <img src="NewTry/assets1/imgs/PhasalKattai.png"
                                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                    class="icon">
                                <h6 class="title">फसल कटाई प्रयोग</h6>
                                <p class="subtitle">
                                    Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.
                                </p>
                            </div>
                        </div>
                             </a>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <a href="https://revenue.cg.nic.in/CropRandomNumber/Home.aspx" target="_blank">
                        <div class="service-card">
                            <div class="body">
                                <img src="NewTry/assets1/imgs/RandomNumber.png"
                                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                    class="icon">
                                <h6 class="title">रैंडम नंबर फ़सल कटाई</h6>
                                <p class="subtitle">
                                    Labore velit culpa adipisci excepturi consequuntur itaque in nam
                                molestias dolorem iste quod.
                                </p>
                            </div>
                        </div>
                             </a>
                    </div>
                   

                </div>
                <!-- end of row -->

            </div>
        </div>



    </section>


    
<!--/.carousel-wrapper-->

<!--    <section style="padding-top:10px;">
       <div class="row">
            <div class="col-lg-6 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">भुइयां सम्बंधित जानकारी</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">कुल भू-स्वामी</p>
                                <h4 class="mb-0"><asp:Label ID="lblTotalOwner" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span><asp:Label ID="date1" runat="server"></asp:Label></p>
                        </div>
                    </div>

                </div>
               
              
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">माजूदा बैंक</p>
                                <h4 class="mb-0"><asp:Label ID="lblBank" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date2" runat="server"></asp:Label> </span></p>
                        </div>
                    </div>

                </div>
                <!-- 
                     <div class="col-lg-3 col-sm-5">
                    <div class="card ">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">कुल आधार एंट्री</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 ">Just updated</p>
                        </div>
                    </div>

                </div>

                     <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
            </div>
            </div>

            <div class="col-lg-6 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">खसरा सम्बंधित जानकारी</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">कुल खसरा</p>
                                <h4 class="mb-0"><asp:Label ID="lblKhasra" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date3" runat="server"></asp:Label></span></p>
                        </div>
                    </div>

                   
                </div>
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">शाशकीय खसरा</p>
                                <h4 class="mb-0 "><asp:Label ID="lblShashkiyKhasra" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date4" runat="server"></asp:Label></span></p>
                        </div>
                    </div>

                   

                </div>
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">बंधक खसरा</p>
                                <h4 class="mb-0"><asp:Label ID="lblBandhak" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date5" runat="server"></asp:Label></span></p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">डिजिटल सिग्नेचर<br/> युक्त खसरे</p>
                                <h4 class="mb-0"><asp:Label ID="lblDsign" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date6" runat="server"></asp:Label></span></p>
                        </div>
                    </div>

                </div>
               
                  
                </div>

            <div class="row">
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                   <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">नजूल खसरे</p>
                                <h4 class="mb-0"><asp:Label ID="lblNajool" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date7" runat="server"></asp:Label> </span></p>
                        </div>
                    </div>

                   
                </div>
                <div class="col-lg-3 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">डायवरटेड खसरे</p>
                                <h4 class="mb-0 "><asp:Label ID="lblDiverted" runat="server"></asp:Label></h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder"><asp:Label ID="date8" runat="server"></asp:Label> </span></p>
                        </div>
                    </div>
                </div>
                </div>

            <!--<div class="row">
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                 <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">कुल उपयोगकर्ता</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card ">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person_add</i>
                                <i class="material-icons opacity-10">store</i>

                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">डिजिटल सिग्नेचर युक्त खसरे</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 ">Just updated</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </div>

    <!--   <div class="row">
        <div class="col-lg-10 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">खसरा सम्बंधित जानकारी</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">कुल खसरा</p>
                                <h4 class="mb-0">281</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                        </div>
                    </div>

                   
                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">शाशकीय खसरा</p>
                                <h4 class="mb-0 ">34k</h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
                        </div>
                    </div>

                   

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">बंधक खसरा</p>
                                <h4 class="mb-0">281</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">डिजिटल सिग्नेचर युक्त खसरे</p>
                                <h4 class="mb-0">281</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                        </div>
                    </div>

                </div>
               
                  
                </div>

            <div class="row">
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                   <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">नजूल खसरे</p>
                                <h4 class="mb-0">281</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                        </div>
                    </div>

                   
                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">डायवरटेड खसरे</p>
                                <h4 class="mb-0 ">34k</h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
                        </div>
                    </div>
                </div>
                </div>

            <!--<div class="row">
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                 <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">कुल उपयोगकर्ता</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card ">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person_add</i>
                                <i class="material-icons opacity-10">store</i>

                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">डिजिटल सिग्नेचर युक्त खसरे</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                            <p class="mb-0 ">Just updated</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">शाशकीय खसरा</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </section>-->

    <!--    <section >
          <div style="background-color:#fff;padding:30px 0;" >
    <div class=" page-home relative"  background-position: center; background-size: cover;">
       
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="hexagon-menu clear">
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://revenue.cg.nic.in/najool/Login.aspx">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-area-chart"></i>
                                                </span>
                                                <span class="title">नजूल भूमि संधारण खसरा</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://revenue.cg.nic.in/diversion/">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-line-chart"></i>
                                                </span>
                                                <span class="title">परिवर्तित भूमि संधारण खसरा</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://revenue.cg.nic.in/varsha/">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-tint"></i>
                                                </span>
                                                <span class="title">वर्षा की जानकारी</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>    
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://revenue.cg.nic.in/cropcut/">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-scissors"></i>
                                                </span>
                                                <span class="title">फसल कटाई प्रयोग</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://revenue.cg.nic.in/CropRandomNumber/Home.aspx">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-sort-numeric-desc"></i>
                                                </span>
                                                <span class="title">रैंडम नंबर फ़सल कटाई</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://rggbkmny.cg.nic.in/">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                </span>
                                                <span class="title">राजीव गांधी भूमिहीन कृषक मजदूर न्याय योजना</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content" href="https://revenue.cg.nic.in/svamitva/">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                </span>
                                                <span class="title">स्वामित्व योजना</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" ><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#36486b"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>-->



    <!--<section>
        <div class="container-fluid" style="padding-top: 20px; padding-bottom: 20px;">
           <div class="row">
               <div class="col-sm-5" style="background-color:lavender;">
                   <div>

                       <div class="col-sm-6" style="background-color:lavender;">
                           <div class="minister-box clearfix"  style="padding-top:10px;padding-bottom:10px;">
                               <div class="minister-sub1" style="padding-bottom:4px;">
                                   <div class="minister-image" ><img src="CitezenDesignCode/Revenue_contentCss/Images/cm.png" alt="minister"></div>
                                   <div class="minister-image">
                                        <h5>Hon'ble Chief Minister </h5>
                                    <h7>Shri Bhupesh Baghel </h7>
                    
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div>

                           <div class="col-sm-6" style="background-color:lavender;">
                               <div class="minister-box clearfix"  style="padding-top:10px;padding-bottom:10px;">
                                   <div class="minister-sub1" style="padding-bottom:4px;">
                                       <div class="minister-image"><img src="CitezenDesignCode/Revenue_contentCss/Images/m.png" alt="minister"></div>
                                       <div class="minister-image">
                                            <h5>Hon'ble Minister</h5>
                                    <h7>Shri Jai Singh Agrawal</h7>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>


               <div class="col-sm-7" style="background-color:lavender; padding-top:25px;">
                   <h2><em>धान के कटोरे में आपका स्वागत है ....</em><span>राजस्व एवं आपदा प्रबंधन विभाग</span></h2>
                   <p>
                       An informative text section that outlines the work portfolio of the ministry and the initiatives/ schemes and other useful purpose that the ministry website serves.
                       An informative text section that outlines the work portfolio of the ministry and the initiatives/ schemes and other useful purpose that the ministry website serves.
                   </p>
                   <p>
                       An informative text section that outlines the work portfolio of the ministry and the initiatives/ schemes and other useful purpose that the ministry
                       website serves.
                   </p>
               </div>

           </div>-->

    <!-- <div class="row">
               <div class="col-sm-12" style="background-color:lavender;">
                   <div>

                       <div class="col-sm-4" style="background-color:lavender;">
                           <div class="minister-box clearfix"  style="padding-top:10px;padding-bottom:10px;">
                               <div class="minister-sub1" style="padding-bottom:4px;">
                                   <div class="minister-image" ></div>
                                   <div class="minister-image">
                                        
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div>

                           <div class="col-sm-4" style="background-color:lavender;">
                               <div class="minister-box clearfix"  style="padding-top:10px;padding-bottom:10px;">
                                   <div class="minister-sub1" style="padding-bottom:4px;">
                                       <div class="minister-image"></div>
                                       <div class="minister-image">
                                            
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                      <div>

                           <div class="col-sm-4" style="background-color:lavender;">
                               <div class="minister-box clearfix"  style="padding-top:10px;padding-bottom:10px;">
                                   <div class="minister-sub1" style="padding-bottom:4px;">
                                       <div class="minister-image"></div>
                                       <div class="minister-image">
                                            <h5><b></b></h5>
                                    <h7></h7>
                
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>-->

    <!-- <div class="row">
               <div class="col-sm-12" style="background-color:lavender;">
                    <div class="col-sm-12" style="background-color:lavender; padding-top:25px;">
                   <h2><em>धान के कटोरे में आपका स्वागत है ....</em><span>राजस्व एवं आपदा प्रबंधन विभाग, छत्तीसगढ़</span></h2>
                   <p>

01 नवम्बर, 2000 को छत्तीसगढ़ राज्य के अस्तित्व में आने के बाद राज्य में चहुंमुखी विकास हुआ है। छोटा राज्य तथा छोटी-छोटी प्रशासनिक इकाईयों की अवधारणा के अनुसार प्रथमतः राज्य में जहाँ रायपुर बस्तर तथा बिलासपुर तीन संभाग थे, वहीं बाद में सरगुजा संभाग तथा हाल ही में दुर्ग संभाग जनवरी, 2014 को अस्तित्व में आया है निःसंदेह बदलाव के इस दौर से राजस्व विभाग भी अछूता नहीं रहा है । 
आज राज्य में 5 संभाग व 33 जिले हैं तथा इसी तरह पूर्व में राज्य में 3-पंचायतों को मिलाकर 1 पटवारी हल्के बनाए गए थे । ग्रामीण जन/ कृषकों की सुविधा तथा समयोचित कार्य निष्पादन की दृष्टि से प्रत्येक 2 ग्राम पंचायत पर एक पटवारी हल्का बनाने का निर्णय लिया जाकर जमीनी स्तर पर राजस्व विभाग की सबसे छोटी इकाई को पहले से ज्यादा सशक्त तथा जनोपयोगी बनाने का कार्य किया गया है। नगरीय क्षेत्रों में कार्यभार की अधिकता को देखते हुए नगर निगम क्षेत्रों में प्रति ग्राम एक पटवारी हल्का तथा 3 पटवारी हल्कों के लिए एक राजस्व निरीक्षक मंडल बनाने का कार्य किया गया है।                       
                   </p>
                   <p>
                       छत्तीसगढ़ भारत के नवगठित राज्यों में से एक है। इसकी स्थापना 1 नवम्बर 2000 में हुई है। छत्तीसगढ़ 17°46 से 24º5' उत्तर अक्षांश तथा 80°15 से 84°20" पूर्व देशान्तर के बीच स्थित है। इसकी सीमा देश के 6 राज्यों से लगी है, उत्तर में उत्तर प्रदेश उत्तर-पूर्व में झारखण्ड, पूर्व में उडिसा, पश्चिम में मध्यप्रदेश, दक्षिण पश्चिम में महाराष्ट्र तथा दक्षिण-पूर्व में आन्ध्रप्रदेश स्थित है। भौगोलिक भू-भाग 1:37 लाख वर्ग किलोमीटर में फैला हुआ है। कर्क रेखा राज्य के ऊपरी चतुष्कोण से गुजरती है । छत्तीसगढ़ भारत के 16 अन्य राज्यों से बड़ा है, जो कि देश के कुल भू-भाग का 4.4 प्रतिशत् है। राज्य के 0.59 लाख वर्ग किलो मीटर भू-भाग में वन है, जो कि कुल क्षेत्रफल का 44 प्रतिशत

है।
                   </p>
               </div>
               </div>


               

           </div>
        </div>


    </section>-->

    <!-- <section style="padding-top: 1px;">
        <div class="links-wrapper">
            <h6 style="text-align:right;padding-right:10PX;font:bold">IMAGES COURTESY : CANVA.COM</h6>
            <div class="container">
                <div class="icon-box">
                    <a href="https://bhuiyan.cg.nic.in" class="zoom" target="_blank">
                        <span class="icon-box-ico budget"></span>
                        <span class="icon-box-text">भुइयाँ</span>




                    </a>
                </div>

                <div class="icon-box">
                    <a href="http://bhunaksha.cg.nic.in" class="zoom" target="_blank">
                        <span class="icon-box-ico charter"></span>
                        <span class="icon-box-text">भू-नक्शा</span>

                    </a>
                </div>

                <div class="icon-box">
                    <a href="https://revenue.cg.nic.in/revcase" class="zoom" target="_blank">
                        <span class="icon-box-ico book"></span>
                        <span class="icon-box-text">राजस्व न्यायालय</span>

                    </a>
                </div>

                <div class="icon-box">
                    <a href="https://bhuiyan.cg.nic.in/loginPage.aspx" class="zoom" target="_blank">
                        <span class="icon-box-ico sign"></span>
                        <span class="icon-box-text">डिजिटल हस्ताक्षर</span>
                    </a>
                </div>

                <div class="icon-box">
                    <a href="https://bhuiyan.cg.nic.in/BankUpdated/Login.aspx" class="zoom" target="_blank">
                        <span class="icon-box-ico Bank"></span>
                        <span class="icon-box-text">बैंक</span>
                    </a>
                </div>

                <div class="icon-box">
                    <a href="https://revenue.cg.nic.in/cropcut/" class="zoom" target="_blank">
                        <span class="icon-box-ico act-rules"></span>
                        <span class="icon-box-text">गिरदावरी जाँच</span>
                    </a>
                </div>

               
            </div>
        </div>

    </section>-->
    <!-- <div class="icon-box">
               <a href="https://revenue.cg.nic.in/relief" class="zoom" target="_blank">
                  <span class="icon-box-ico sms"></span>
                  <span class="icon-box-text">आपदा सहायता</span>
               </a>
            </div>-->
    <!--  <section id="Section1" class="wrapper body-wrapper" style="padding-top: 2px;">
        <!-- &nbsp; -->
        <div class="links-wrapper">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">नजूल भूमि संधारण खसरा</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">परिवर्तित भूमि संधारण खसरा</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">वर्षा की जानकारी</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">फसल कटाई प्रयोग</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">रैंडम नंबर फ़सल कटाई</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">राजीव गांधी भूमिहीन कृषक मजदूर न्याय योजना</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--        <section style="padding-top: 2px;">
    <div class="container-fluid">
        <div class="row">
             <div class="col-sm-2">
  <a class="card1" href="#">
    <h5>नजूल भूमि संधारण खसरा</h5>
   
    <div class="go-corner" href="#">
      <div class="go-arrow">
        <i class="fa fa-area-chart" aria-hidden="true"></i>
      </div>
    </div>
  </a>
                 </div>
  <div class="col-sm-2">
  <a class="card1" href="#">
    <h5>परिवर्तित भूमि संधारण खसरा</h5>    
    <div class="go-corner" href="#">
      <div class="go-arrow">
       <i class="fa fa-line-chart" aria-hidden="true"></i>
      </div>
    </div>
  </a>
   </div>
  <div class="col-sm-2">
  <a class="card1" href="#">
    <h5>वर्षा की जानकारी</h5>
    <div class="dimmer"></div>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        <i class="fa fa-tint" aria-hidden="true"></i>
      </div>
    </div>
  </a>
       </div>
  <div class="col-sm-2">
             <a class="card1" href="#">
    <h5>फसल कटाई प्रयोग</h5>
   
    <div class="go-corner" href="#">
      <div class="go-arrow">
        <i class="fa fa-scissors" aria-hidden="true"></i>
      </div>
    </div>
  </a>
   </div>
  <div class="col-sm-2">
  <a class="card1" href="#">
    <h5>रैंडम नंबर फ़सल कटाई</h5>    
    <div class="go-corner" href="#">
      <div class="go-arrow">
        <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
      </div>
    </div>
  </a>
   </div>
  <div class="col-sm-2">
  <a class="card1" href="#">
    <h5>राजीव गांधी भूमिहीन कृषक मजदूर न्याय योजना</h5>
   
    <div class="dimmer"></div>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        <i class="fa fa-align-justify" aria-hidden="true"></i>
      </div>
    </div>
  </a>
   </div>

  
  </div>
</div>
            </section>-->
        </asp:ContentPlaceHolder>


        <footer class="wrapper footer-wrapper">
            <div class="footer-top-wrapper">
                <div class="container common-container four_content footer-top-container">
                    <ul>
                        <li><a href="#">Website policies</a></li>
                        <li><a href="#">Web Information Manager</a></li>


                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>
        </div>
                    <div class="footer-bottom-wrapper">
                        <div class="container common-container four_content footer-bottom-container">
                            <div class="footer-content clearfix">
                                <div class="copyright-content">
                                    Website Designed, Developed, Hosted and Managed by National Informatics Centre (NIC), Chhattisgarh</strong><span>Content Provided and Managed by Revenue & Disaster Management Department, Chhattisgarh</span>
                                </div>
                                <!--<div> <a target="_blank" href="http://cmf.gov.in/" title="External link that opens in new tab, cmf"><img alt="cmf logo" src="CitezenDesignCode/assets/images/cmf-logo.png"></a> </div>-->
                            </div>
                        </div>
                    </div>
                    </footer>
        
                    <script src="CitezenDesignCode/assets/js/jquery-accessibleMegaMenu.js"></script>
                    <script src="CitezenDesignCode/assets/js/framework.js"></script>
                    <script src="CitezenDesignCode/assets/js/jquery.flexslider.js"></script>
                    <script src="CitezenDesignCode/assets/js/font-size.js"></script>
                    <script src="CitezenDesignCode/assets/js/swithcer.js"></script>
                    <script src="CitezenDesignCode/theme/js/ma5gallery.js"></script>
                    <script src="CitezenDesignCode/assets/js/megamenu_New.js"></script>
                    <script src="CitezenDesignCode/theme/js/easyResponsiveTabs.js"></script>
                    <script src="CitezenDesignCode/theme/js/custom.js"></script>
                </div>
    </form>
</body>
</html>
