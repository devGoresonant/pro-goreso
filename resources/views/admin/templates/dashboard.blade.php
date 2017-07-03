@extends("admin.layouts.default")     
@section("content")
<!--main content start-->
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Enquiries</a></li>
                        <li><a href="#tabs-2">Contacted</a></li>
                        <li><a href="#tabs-3">Students</a></li>
                        <li><a href="#tabs-4">Stand out</a></li>
                    </ul>
                    <div id="tabs-1">
                        <div class="detailContainer shadow_box" style="width: 100%; left: 0px;">
                            <div class="dashBoardDetail dashBoardDetail1" id="enquries_detail" style="width: 100%; display: block;">

                                <input class="index" value="1" type="hidden">
                                <div class="detailCount">
                                    <p class="float-left color333 ft-600 detailCountLeft" id="totalEnquiryCount">19 Enquiries</p>
                                    <p class="detailCountRight color333 float-right ft-600 pos-rel mt-3" id="totalEnquiryCountNew"><span class="newRedDot"></span>13 New</p>
                                    <div class="clear-fix"></div>
                                </div>
                                <div>
                                    <!--       Download UrbanPro App      -->
                                    <a href="https://play.google.com/store/apps/details?id=com.urbanpro.providerApp&amp;referrer=utm_source%3DappPromo%26utm_medium%3Dmobile-web%26utm_term%3Dindividual-myAccount%26utm_campaign%3D%2520" rel="external" target="_blank" style="text-decoration: none;display:none" class="addblock_small">
                                        <span class="close-member-small"><img src="https://c.urbanpro.com/assets/cross-49194d61388238e5b9be5f6c1c35ba1a.png" style="
                                                                              margin-left: 10px;"></span>
                                        <div class="membership-icon">
                                            <img src="https://c.urbanpro.com/assets/new-ui/download-app-a350d19d3cb8980d51710c9ab1bffeed.png" alt="" width="58px" height="58px">
                                        </div>
                                        <div class="membership-details">
                                            <p class="membership-head">Download UrbanPro App</p>
                                            <p class="sub-text">Respond to requirements faster with UrbanPro App</p>
                                        </div>
                                        <div class="membership-status">
                                            <p class="status-btn">
                                                DOWNLOAD
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="detailInner">
                                    <div id="enquries_detail1">
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3046710&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter8">
                                                    A
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Arun</p>
                                                    <p class="detailSecondTxt">
                                                        Java Script Training classes
                                                    </p>
                                                    <p class="detailSecondTxt">Gachibowli, Hyderabad - Online Class</p>



                                                    <div class="extraTagCont" style="top:23px;">	


                                                        <p class="provTime">1d left</p>
                                                    </div>	
                                                </div>	
                                                <div>
                                                </div>	
                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3045195&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter10">
                                                    B
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Bindu</p>
                                                    <p class="detailSecondTxt">
                                                        Java Script Training classes
                                                    </p>
                                                    <p class="detailSecondTxt">Banjara Hills, Hyderabad - Online Class</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime">1d left</p>
                                                    </div>	
                                                </div>	
                                                <div>
                                                </div>	
                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3045386&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter3">
                                                    V
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Vishnu</p>
                                                    <p class="detailSecondTxt">
                                                        Web Development Classes
                                                    </p>
                                                    <p class="detailSecondTxt">Vijayawada, Vijayawada - Online Class</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime">1d left</p>
                                                    </div>	
                                                </div>	
                                                <div>
                                                </div>	
                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3044534&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter8">
                                                    B
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Bhuvanesh</p>
                                                    <p class="detailSecondTxt">
                                                        Tally Software classes
                                                    </p>
                                                    <p class="detailSecondTxt">Tarnaka, Hyderabad - Online Class</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime">1d left</p>
                                                    </div>	
                                                </div>	
                                                <div>
                                                </div>	
                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3044461&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter10">
                                                    D
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Dhananjay Pingale</p>
                                                    <p class="detailSecondTxt">
                                                        Java Script Training classes
                                                    </p>
                                                    <p class="detailSecondTxt">Viman Nagar, Pune</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="enqTag greyTag free">Closed</p>
                                                    </div>	
                                                </div>	
                                                <div>

                                                </div>	

                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3041566&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter2">
                                                    I
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Irfan</p>
                                                    <p class="detailSecondTxt">
                                                        PHP  Classes
                                                    </p>
                                                    <p class="detailSecondTxt">Janakpuri, Delhi</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="enqTag greyTag free">Closed</p>


                                                    </div>	
                                                </div>	

                                                <div>

                                                </div>	

                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3038172&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter6">
                                                    R
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Ravi</p>
                                                    <p class="detailSecondTxt">
                                                        Web Development Classes
                                                    </p>
                                                    <p class="detailSecondTxt">Kota, Kota</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime"></p>
                                                    </div>	
                                                </div>	

                                                <div>

                                                </div>	

                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3036769&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter1">
                                                    K
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Krishna</p>
                                                    <p class="detailSecondTxt">
                                                        Tally Software classes
                                                    </p>
                                                    <p class="detailSecondTxt">Alagapuram, Salem</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime"></p>
                                                    </div>	
                                                </div>	

                                                <div>

                                                </div>	

                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3037729&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter0">
                                                    T
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Thallada Sai Mounika</p>
                                                    <p class="detailSecondTxt">
                                                        Web Development Classes
                                                    </p>
                                                    <p class="detailSecondTxt">Mehdipatnam, Hyderabad - Online Class</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime"></p>
                                                    </div>	
                                                </div>	

                                                <div>

                                                </div>	

                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3037513&amp;isFree=false&amp;branchId=" class="no-href-color">
                                            <div class="detailList unreadMsg viewed_enquiry">
                                                <div class="detailFirstLetter detailFirstLetter8">
                                                    S
                                                </div>
                                                <div class="detailText">
                                                    <p class="detailFirstTxt">Sanjeev</p>
                                                    <p class="detailSecondTxt">
                                                        Web Development Classes
                                                    </p>
                                                    <p class="detailSecondTxt">Kavi Nagar, Ghaziabad</p>
                                                    <div class="extraTagCont" style="top:23px;">	
                                                        <p class="provTime"></p>
                                                    </div>	
                                                </div>	

                                                <div>

                                                </div>	

                                                <div class="clear-fix"></div>
                                            </div>
                                        </a>	
                                        <!-- recent enquiries loop -->
                                    </div>	
                                    <div class="whiteOverlay" style="display: none;">
                                        <div class="loader" style="bottom: 0px; top: 65px; position: absolute;"></div>				
                                    </div>
                                </div>


                                <div class="suggestBlockContainer">
                                    <div class="suggestLeftBlock">
                                        <p>Not getting enough Enquiries?</p>
                                        <p>Get Suggestions for getting more number of enquiries</p>
                                    </div>
                                    <div class="suggestRightBlock">
                                        <a href="/branch/suggestionsForYou" class="tertiaryButton">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-2">
                        <div class="dashBoardDetail dashBoardDetail2" id="contacted_detail" style="width: 100%; display: block;">


                            <input class="index" value="2" type="hidden">
                            <div class="detailCount">
                                <p class="float-left color333 ft-600 detailCountLeft" id="totalContactedCount">34 Contacted</p>
                                <p class="detailCountRight color333 float-right ft-600 pos-rel mt-3" id="totalContactedCountNew"><span class="newRedDot"></span>1 New</p>
                                <div class="clear-fix"></div>
                            </div>




                            <div>


                                <!--       Download UrbanPro App      -->
                                <a href="https://play.google.com/store/apps/details?id=com.urbanpro.providerApp&amp;referrer=utm_source%3DappPromo%26utm_medium%3Dmobile-web%26utm_term%3Dindividual-myAccount%26utm_campaign%3D%2520" rel="external" target="_blank" style="text-decoration: none;display:none" class="addblock_small">
                                    <span class="close-member-small"><img src="https://c.urbanpro.com/assets/cross-49194d61388238e5b9be5f6c1c35ba1a.png" style="
                                                                          margin-left: 10px;"></span>
                                    <div class="membership-icon">
                                        <img src="https://c.urbanpro.com/assets/new-ui/download-app-a350d19d3cb8980d51710c9ab1bffeed.png" alt="" width="58px" height="58px">
                                    </div>
                                    <div class="membership-details">
                                        <p class="membership-head">Download UrbanPro App</p>
                                        <p class="sub-text">Respond to requirements faster with UrbanPro App</p>
                                    </div>
                                    <div class="membership-status">
                                        <p class="status-btn">
                                            DOWNLOAD
                                        </p>
                                    </div>
                                </a>

                            </div>




                            <div class="needNote">
                                <img src="https://c.urbanpro.com/assets/new-ui/grey-bulb-4c019abe7ed0fd3c129cf9681c971b4d.png">
                                <p>Earn FREE coins &amp; boost your ProScore by letting us know whenever student has agreed to start classes with you</p>
                            </div>
                            <div class="detailInner">
                                <div id="contacted_detail1">


































                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3042473&amp;messageThreadId=12213694" class="no-href-color">

                                    </a><div class="detailList viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3042473&amp;messageThreadId=12213694" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter5">
                                                P
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3042473&amp;messageThreadId=12213694" class="no-href-color">
                                                <p class="detailFirstTxt">Pankaj</p>
                                                <p class="detailSecondTxt">
                                                    Tally Software classes
                                                </p>
                                                <p class="detailSecondTxt">Sector-17, Chandigarh</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Pankaj ,

                                                    New batch started to learn Tally(ERP 9) .

                                                    Duration: 2 Months

                                                    Fee: 3500 (Complete course)
                                                    Demo classes: Four

                                                    Class
                                                    Timing: 7:00am to 8:30am , 7:00pm to 8:30pm

                                                    Call on 8054684430 to join or drop email at info@devexhub.in .


                                                    Thanks !

                                                </p>


 <!-- <p class="provTime">20h left</p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3042473&amp;messageThreadId=12213694" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12213694&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3042473" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3036060&amp;messageThreadId=12186772" class="no-href-color">

                                    </a><div class="detailList unreadMsg viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3036060&amp;messageThreadId=12186772" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter3">
                                                A
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3036060&amp;messageThreadId=12186772" class="no-href-color">
                                                <p class="detailFirstTxt">Ankur</p>
                                                <p class="detailSecondTxt">
                                                    Tally Software classes
                                                </p>
                                                <p class="detailSecondTxt">Sector-36, Chandigarh</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi ankur ,

                                                    New batch started to learn Tally(ERP 9) .

                                                    Duration: 2 Months

                                                    Fee: 3500 (Complete course)
                                                    Demo classes: Four
                                                    Class
                                                    Timing: 7:00am to 8:30am


                                                    Call on 8054684430 to join.

                                                    For more information visit on www.devexhub.in

                                                    Thanks !

                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3036060&amp;messageThreadId=12186772" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12186772&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3036060" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002483&amp;messageThreadId=12088452" class="no-href-color">

                                    </a><div class="detailList viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002483&amp;messageThreadId=12088452" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter10">
                                                H
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002483&amp;messageThreadId=12088452" class="no-href-color">
                                                <p class="detailFirstTxt">Harry</p>
                                                <p class="detailSecondTxt">
                                                    WordPress Training
                                                </p>
                                                <p class="detailSecondTxt">Sector-71 Mohali, Chandigarh</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Harry,

                                                    Below are my courses &amp; Fees .
                                                    1. Core php &amp; mysql - 6000

                                                    2. Php MVC &amp; Codeigniter - 6500
                                                    3. Wordpress - 6000
                                                    4. Advance jQuery &amp; Javascript - 6500
                                                    5. AngularJs &amp; Javascript - 7500

                                                    Contact me on my mobile number(8054684430) for any query .

                                                    Thanks !

                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002483&amp;messageThreadId=12088452" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12088452&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3002483" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3020392&amp;messageThreadId=12141701" class="no-href-color">

                                    </a><div class="detailList viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3020392&amp;messageThreadId=12141701" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter10">
                                                N
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3020392&amp;messageThreadId=12141701" class="no-href-color">
                                                <p class="detailFirstTxt">Nancy</p>
                                                <p class="detailSecondTxt">
                                                    Web Development Classes
                                                </p>
                                                <p class="detailSecondTxt">Bhattarahalli, Bangalore - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Below are my courses and fee for complete course.

                                                    1. Core Php &amp; Mysql 

                                                    Fee : Rs 35000
                                                    Duration: 3 Months



                                                    2. Php MVC &amp; Codeigniter

                                                    Fee : Rs. 36000

                                                    Duration: 3 Months



                                                    3. Wordpress

                                                    Fee : Rs 35000

                                                    Duration: 3 Months



                                                    4. Advance Jquery &amp; javascript

                                                    Fee: Rs 36000

                                                    Duration: 3 Months



                                                    5. AngularJs &amp; Javascript

                                                    Fee: Rs. 36000
                                                    Duration: 3 Months

                                                    Drop email at info@devexhub.in for any query or visit on www.devexhub.in for more information .

                                                    Thanks !

                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3020392&amp;messageThreadId=12141701" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12141701&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3020392" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3001093&amp;messageThreadId=12137626" class="no-href-color">

                                    </a><div class="detailList viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3001093&amp;messageThreadId=12137626" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter1">
                                                J
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3001093&amp;messageThreadId=12137626" class="no-href-color">
                                                <p class="detailFirstTxt">Jai kaushik</p>
                                                <p class="detailSecondTxt">
                                                    PHP  Classes
                                                </p>
                                                <p class="detailSecondTxt">Patpar Ganj, Delhi - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Jai ,

                                                    Below are my courses and fee for complete course. 

                                                    1. Core Php &amp; Mysql  
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    2. Php MVC &amp; Codeigniter 
                                                    Fee : Rs. 36000
                                                    Duration: 3 Months

                                                    3. Wordpress 
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    4. Advance Jquery &amp; javascript 
                                                    Fee: Rs 36000
                                                    Duration: 3 Months

                                                    5. AngularJs &amp; Javascript 
                                                    Fee: Rs. 36000
                                                    Duration: 3 Months 

                                                    Drop email at info@devexhub.in for any query or visit on www.devexhub.in for more information  . 

                                                    Thanks !


                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3001093&amp;messageThreadId=12137626" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12137626&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3001093" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3017261&amp;messageThreadId=12141642" class="no-href-color">

                                    </a><div class="detailList viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3017261&amp;messageThreadId=12141642" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter5">
                                                P
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3017261&amp;messageThreadId=12141642" class="no-href-color">
                                                <p class="detailFirstTxt">Pooja radkar</p>
                                                <p class="detailSecondTxt">
                                                    Java Script Training classes
                                                </p>
                                                <p class="detailSecondTxt">Karve Road Kothrud, Pune - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Pooja  , 

                                                    Below are my courses &amp; Fees for 3 Months .

                                                    1. Core php &amp; mysql - 26000

                                                    2. Php MVC &amp; Codeigniter - 26000

                                                    3. Wordpress - 26000
                                                    4. Advance jQuery &amp; Javascript - 26000

                                                    5. AngularJs &amp; Javascript - 36000

                                                    For any query visit on www.devexhub.in  or drop email at info@devexhub.in .

                                                    Thanks !


                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3017261&amp;messageThreadId=12141642" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12141642&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3017261" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019804&amp;messageThreadId=12137608" class="no-href-color">

                                    </a><div class="detailList unreadMsg viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019804&amp;messageThreadId=12137608" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter5">
                                                S
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019804&amp;messageThreadId=12137608" class="no-href-color">
                                                <p class="detailFirstTxt">Soumya rout</p>
                                                <p class="detailSecondTxt">
                                                    PHP  Classes
                                                </p>
                                                <p class="detailSecondTxt">Kadubeesanahalli, Bangalore - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greenTick-ec690255b6a35d1c29089fb78c6f4f47.png" style="vertical-align:sub;">


                                                    Hi Soumya ,

                                                    Below are my courses and fee for complete course. 

                                                    1. Core Php &amp; Mysql  
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    2. Php MVC &amp; Codeigniter 
                                                    Fee : Rs. 36000
                                                    Duration: 3 Months

                                                    3. Wordpress 
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    4. Advance Jquery &amp; javascript 
                                                    Fee: Rs 36000
                                                    Duration: 3 Months

                                                    5. AngularJs &amp; Javascript 
                                                    Fee: Rs. 36000
                                                    Duration: 3 Months 

                                                    Drop email at info@devexhub.in for any query or visit on www.devexhub.in for more information  . 

                                                    Thanks !


                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019804&amp;messageThreadId=12137608" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12137608&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3019804" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019846&amp;messageThreadId=12137603" class="no-href-color">

                                    </a><div class="detailList unreadMsg viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019846&amp;messageThreadId=12137603" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter3">
                                                K
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019846&amp;messageThreadId=12137603" class="no-href-color">
                                                <p class="detailFirstTxt">Kasturi</p>
                                                <p class="detailSecondTxt">
                                                    PHP  Classes
                                                </p>
                                                <p class="detailSecondTxt">Whitefield, Bangalore - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Kasturi ,

                                                    Below are my courses and fee for complete course. 

                                                    1. Core Php &amp; Mysql  
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    2. Php MVC &amp; Codeigniter 
                                                    Fee : Rs. 36000
                                                    Duration: 3 Months

                                                    3. Wordpress 
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    4. Advance Jquery &amp; javascript 
                                                    Fee: Rs 36000
                                                    Duration: 3 Months

                                                    5. AngularJs &amp; Javascript 
                                                    Fee: Rs. 36000
                                                    Duration: 3 Months 

                                                    Drop email at info@devexhub.in for any query or visit on www.devexhub.in for more information  . 

                                                    Thanks !


                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019846&amp;messageThreadId=12137603" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12137603&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3019846" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019829&amp;messageThreadId=12137599" class="no-href-color">

                                    </a><div class="detailList unreadMsg viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019829&amp;messageThreadId=12137599" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter9">
                                                V
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019829&amp;messageThreadId=12137599" class="no-href-color">
                                                <p class="detailFirstTxt">Vikram</p>
                                                <p class="detailSecondTxt">
                                                    PHP  Classes
                                                </p>
                                                <p class="detailSecondTxt">Marathahalli, Bangalore - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Vikram ,

                                                    Below are my courses and fee for complete course. 

                                                    1. Core Php &amp; Mysql  
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    2. Php MVC &amp; Codeigniter 
                                                    Fee : Rs. 36000
                                                    Duration: 3 Months

                                                    3. Wordpress 
                                                    Fee : Rs 35000
                                                    Duration: 3 Months

                                                    4. Advance Jquery &amp; javascript 
                                                    Fee: Rs 36000
                                                    Duration: 3 Months

                                                    5. AngularJs &amp; Javascript 
                                                    Fee: Rs. 36000
                                                    Duration: 3 Months 

                                                    Drop email at info@devexhub.in for any query or visit on www.devexhub.in for more information  . 

                                                    Thanks !


                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3019829&amp;messageThreadId=12137599" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12137599&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3019829" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>


















                                    <a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002746&amp;messageThreadId=12131874" class="no-href-color">

                                    </a><div class="detailList unreadMsg viewed_enquiry"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002746&amp;messageThreadId=12131874" class="no-href-color">
                                            <div class="detailFirstLetter detailFirstLetter11">
                                                B
                                            </div>
                                        </a><div class="detailText"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002746&amp;messageThreadId=12131874" class="no-href-color">
                                                <p class="detailFirstTxt">Bharath</p>
                                                <p class="detailSecondTxt">
                                                    Java Script Training classes
                                                </p>
                                                <p class="detailSecondTxt">Ameerpet, Hyderabad - Online Class</p>

                                                <p class="detailSecondTxt">




                                                    <img src="https://c.urbanpro.com/assets/new-ui/greyTick-1344a0d03cba4e859717c6e168adc7fb.png" style="vertical-align:sub;">


                                                    Hi Bharath  , 

                                                    Below are my courses &amp; Fees for 3 Months .

                                                    1. Core php &amp; mysql - 26000

                                                    2. Php MVC &amp; Codeigniter - 26000

                                                    3. Wordpress - 26000
                                                    4. Advance jQuery &amp; Javascript - 26000

                                                    5. AngularJs &amp; Javascript - 36000

                                                    For any query visit on www.devexhub.in  or drop email at info@devexhub.in .

                                                    Thanks !


                                                </p>


 <!-- <p class="provTime"></p>

                                                -->

                                            </a><div class="detailRightFixed"><a href="https://www.urbanpro.com/need/needDetailProviderAccount?id=3002746&amp;messageThreadId=12131874" class="no-href-color">




                                                    <span class="convertedNote txt"><span class="onlyBig">Student </span>Converted?<span>

                                                        </span></span></a><a href="https://www.urbanpro.com/message/seekerHired?id=12131874&amp;branchId=696522" class="hireBtn blueLink newYesNo isHired">YES</a>

                                                <a href="#" data-id="3002746" class="notIntMsg notIntLink showSlide noBtn newYesNo ml-5 blueLink" id="notInterested">NO</a>

                                            </div>
                                        </div>	
                                        <div class="clear-fix"></div>
                                    </div>











                                    <div id="notInterested-detail" class="dis-none"> 
                                        <h3 class="fontSize20 color333 text-center mb-20">Not Hired</h3>
                                        <p class="fontSize14 textAlignCen">Please tell us why</p>
                                        <p class="reportError2" style="display:none;color:red;margin-left: 97px;">Please select the options</p>
                                        <form action="/need/providerNotInterested" method="post" onsubmit="return reportIssueValidation()" class="notInterestedForm">
                                            <div class="needRadioBlock ml-0 mt-20">
                                                <input name="id" value="3002746" id="id" type="hidden">
                                                <input name="tab" value="contacted" id="tab" type="hidden">

                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="NOT_AVAILABLE" type="radio"><span></span>I'm not available
                                                </label>
                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="NOT_MATCHED" type="radio"><span></span>Does not match my Profile
                                                </label>
                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="NO_PARTICULAR_BY_STUDENT" type="radio"><span></span>No particular reason given by Student
                                                </label>
                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="STUDENT_HAS_NO_INTENT_TO_START_CLASS" type="radio"><span></span>Student has no intention to start classes now
                                                </label>	
                                                <label class="contctSeeker ">
                                                    <input name="reason" class="dis-none" value="NOT_ENOUGH_INFO" type="radio"><span></span> Not enough Information
                                                </label>
                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="I_DONT_TEACH_ONLINE" type="radio"><span></span> I don't teach online
                                                </label>
                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="STUDENT_LOCATION_IS_FAR" type="radio"><span></span> Student Location is far
                                                </label> 
                                                <label class="contctSeeker">
                                                    <input name="reason" class="dis-none" value="OTHER" type="radio"><span></span> Other
                                                </label>

                                                <div class="clear-fix"></div>
                                            </div>

                                            <div style="float:left;width:100%;margin-top:30px">
                                                <div class="float-left "><input class="display-IB border-0 blueBGColor contctBtn mr-10 submitBtnNeed" value="Submit" type="submit"></div>
                                                <a href="" class="display-IB blueOutlineBtn notIntLink" style="margin-top:-2px;">Close</a>
                                            </div>
                                        </form>

                                    </div>



                                </div>
                                <div class="whiteOverlay" style="display: none;">
                                    <div class="loader" style="bottom: 0px; top: 65px; position: absolute;"></div>				
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-3">
                        <div class="dashBoardDetail dashBoardDetail3" id="hired_detail" style="width: 100%; display: block;">


                            <input class="index" value="3" type="hidden">
                            <div class="detailCount">
                                <p class="float-left color333 ft-600 detailCountLeft" id="totalHiredCount">0 Hired</p>
                                <p class="detailCountRight color333 float-right ft-600 pos-rel mt-3" id="totalHiredCountNew"></p>
                                <div class="clear-fix"></div>
                            </div>




                            <div>


                                <!--       Download UrbanPro App      -->
                                <a href="https://play.google.com/store/apps/details?id=com.urbanpro.providerApp&amp;referrer=utm_source%3DappPromo%26utm_medium%3Dmobile-web%26utm_term%3Dindividual-myAccount%26utm_campaign%3D%2520" rel="external" target="_blank" style="text-decoration: none;display:none" class="addblock_small">
                                    <span class="close-member-small"><img src="https://c.urbanpro.com/assets/cross-49194d61388238e5b9be5f6c1c35ba1a.png" style="
                                                                          margin-left: 10px;"></span>
                                    <div class="membership-icon">
                                        <img src="https://c.urbanpro.com/assets/new-ui/download-app-a350d19d3cb8980d51710c9ab1bffeed.png" alt="" width="58px" height="58px">
                                    </div>
                                    <div class="membership-details">
                                        <p class="membership-head">Download UrbanPro App</p>
                                        <p class="sub-text">Respond to requirements faster with UrbanPro App</p>
                                    </div>
                                    <div class="membership-status">
                                        <p class="status-btn">
                                            DOWNLOAD
                                        </p>
                                    </div>
                                </a>

                            </div>




                            <div class="detailInner">	
                                <div id="hired_detail1">
























                                    <div class="emptyEnq">
                                        <h2 class="fontSize19 text-center mt-40 color000 mb-10">Get hired by going through the</h2>
                                        <a href="" class="emptyBlockBtn blueColor text-deco-none" id="contacted-btn">contacted</a>
                                        <p class="text-center fontSize15 color666 mt-20">section and following up with the customers for fresh leads.</p>
                                    </div>



                                </div>
                                <div class="whiteOverlay" style="display: none;">
                                    <div class="loader" style="bottom: 0px; top: 65px; position: absolute;"></div>				
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-4">
                        <div class="dashBoardDetail" id="standout_detail" style="width: 100%; display: block;">

                            <div class="emptyEnq text-center">

                            </div>
                            <div class="detailCount proScoreHead">
                                <input value="3176564" id="titleName" type="hidden">
                                <p class="fontSize18 color000 proHeadp2 ft-wt-600 floatLeft">You rank at <span>#1</span> out of 89 as 
                                    <span class="inMobileBlock">
                                        <span class="posRel">
                                            <select id="to_be_resized" onchange="changeProfileRankFromSelect(816279, 2437605, this)" style="width: 58px;">

                                                <option value="3176595"> CakePHP</option>

                                                <option value="3176593"> CodeIgniter</option>

                                                <option value="3176591"> Java Script Training</option>

                                                <option value="3176590"> MySQL</option>

                                                <option value="3176564" selected="selected"> PHP </option>

                                                <option value="3842533"> Tally Software</option>

                                                <option value="3821204"> Web Development</option>

                                                <option value="3176592"> WordPress</option>

                                                <option value="3176594"> jQuery</option>

                                            </select>
                                            <span class="icon-blue-dropdown"></span>
                                        </span>
                                        <select id="compute_select" style="display: none;">
                                            <option id="compute_option"> PHP </option>
                                        </select>
                                        in Chandigarh
                                    </span>
                                </p>
                                <a href="/register/proScoreLog?id=3176564" class="float-right proRightico">
                                    Pro Score Details
                                    <span class="icon-ic-chevron-right-24px"></span></a>
                                <div class="clear-fix"></div>
                            </div>

                            <div class="provAcctBlueBg detailList proList ">
                                <div class="proRank">
                                    1
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/2437605-thumbnail50.jpg" width="38" height="40">

                                    <a href="#" id="increaseProScore" class="showSlide provAcctBlueBg proBlockBadgeContainer">
                                    </a>

                                    <a href="#" id="increaseProScore" class="showSlide loggedInProv">
                                        <p class="proName ml-10 mt-10">Devex Hub, Sector-65 Mohali</p>
                                        <p class="incProScore">Increase Pro Score <span class="hideOnMobile">&amp; Ranking</span>
                                        </p>				
                                    </a>


                                    <a href="/register/proScoreLog?id=3176564" class="blueLink text-deco-none"><p class="proScore">2590<span>Score</span></p></a>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>

                            <div class="
                                 detailList proList 
                                 ">
                                <div class="proRank">
                                    2
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/1441784-thumbnail50.jpg" width="38" height="40">

                                    <a href="/chandigarh/karan-vatsayan/3830525" class="proBlockBadgeContainer"> 
                                        <p class="proName">Karan Vatsayan, Mohali</p>
                                        <p class="badgeHolderStandout">
                                            <span><i class="icon-reviews"></i> 4 Reviews</span>
                                            <span><i class="icon-answers"></i> 0 Answers</span>
                                            <span><i class="icon-platinum fontSize18"></i> Gold</span>

                                        </p>

                                    </a>


                                    <p class="proScore">1320<span>Score</span></p>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>

                            <div class="
                                 detailList proList 
                                 ">
                                <div class="proRank">
                                    3
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/2256082-thumbnail50.jpg" width="38" height="40">

                                    <a href="/chandigarh/dharmendra-kumar-singh/5077402" class="proBlockBadgeContainer"> 
                                        <p class="proName">Dharmendra Kumar Singh, Mohali SAS Nagar</p>
                                        <p class="badgeHolderStandout">
                                            <span><i class="icon-reviews"></i> 0 Reviews</span>
                                            <span><i class="icon-answers"></i> 0 Answers</span>


                                        </p>

                                    </a>


                                    <p class="proScore">1300<span>Score</span></p>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>

                            <div class="
                                 detailList proList 
                                 ">
                                <div class="proRank">
                                    4
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/2830572-thumbnail50.jpg" width="38" height="40">

                                    <a href="/chandigarh/karamvir-singh/6302160" class="proBlockBadgeContainer"> 
                                        <p class="proName">Karamvir Singh, Sector-36</p>
                                        <p class="badgeHolderStandout">
                                            <span><i class="icon-reviews"></i> 1 Review</span>
                                            <span><i class="icon-answers"></i> 0 Answers</span>
                                            <span><i class="icon-platinum fontSize18"></i> Silver</span>

                                        </p>

                                    </a>


                                    <p class="proScore">1260<span>Score</span></p>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>

                            <div class="
                                 detailList proList 
                                 ">
                                <div class="proRank">
                                    5
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/2842753-thumbnail50.jpg" width="38" height="40">

                                    <a href="/chandigarh/inderdeep-k/6322351" class="proBlockBadgeContainer"> 
                                        <p class="proName">Inderdeep K., Mohali</p>
                                        <p class="badgeHolderStandout">
                                            <span><i class="icon-reviews"></i> 0 Reviews</span>
                                            <span><i class="icon-answers"></i> 0 Answers</span>


                                        </p>

                                    </a>


                                    <p class="proScore">1158<span>Score</span></p>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>

                            <div class="
                                 detailList proList 
                                 ">
                                <div class="proRank">
                                    6
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/3260006-thumbnail50.jpg" width="38" height="40">

                                    <a href="/chandigarh/ankush/6856466" class="proBlockBadgeContainer"> 
                                        <p class="proName">Ankush, Sector-44 C</p>
                                        <p class="badgeHolderStandout">
                                            <span><i class="icon-reviews"></i> 0 Reviews</span>
                                            <span><i class="icon-answers"></i> 0 Answers</span>
                                            <span><i class="icon-platinum fontSize18"></i> Silver</span>

                                        </p>

                                    </a>


                                    <p class="proScore">1100<span>Score</span></p>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>

                            <div class="
                                 detailList proList 
                                 ">
                                <div class="proRank">
                                    7
                                </div>
                                <div class="proBlockDetail">

                                    <img class="proPic" src="https://s3-ap-southeast-1.amazonaws.com/tv-prod/member/photo/547908-thumbnail50.jpeg" width="38" height="40">

                                    <a href="/chandigarh/naveen-kalra/1851426" class="proBlockBadgeContainer"> 
                                        <p class="proName">Naveen Kalra, Sector-20</p>
                                        <p class="badgeHolderStandout">
                                            <span><i class="icon-reviews"></i> 17 Reviews</span>
                                            <span><i class="icon-answers"></i> 1 Answer</span>
                                            <span><i class="icon-platinum fontSize18"></i> Silver</span>

                                        </p>

                                    </a>


                                    <p class="proScore">1088<span>Score</span></p>

                                </div>	
                                <div class="clear-fix"></div>
                            </div>


                            <div class="detailList proDivider">
                                <div class="proRank mt-8"><span class="proDiv icon-ic-more-24-px"></span></div>
                                <div class="clear-fix"></div>
                            </div>



                            <div class="only-for-small mobileProLink">




                                Your Pro Score in PHP Trainer is 2590 <br> <a href="/register/proScoreLog?id=3176564" class="blueLink text-deco-none">View Details</a>
                            </div>
                            <div class="emptyEnq">
                                <p class="text-left mb-20 fontSize12 color666 mt-20" style="background-color: #F7F7F7;padding: 20px;margin: 0px 0 0 0px !important;">Pro Score and Ranking will take 24 hrs to get updated. Scoring methods and Ranking are subject to change by UrbanPro.</p>
                            </div>


                            <div id="increaseProScore-detail" class="dis-none">
                                <h3 class="fontSize20 text-center mt-10 color000 lineHeight24 width100p mb-10">Great! You are at 1st position.
                                    Increase your Pro Score &amp; Ranking right now:</h3>






                                <div id="slider">
                                    <ul id="sliderul">





                                        <li class="improveBlock highZindex firstChild" id="impBlock-0" style="width: 397px;">

                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/provider/introVideo?from=profile"> Upload your Intro Video</a>

                                                </p>

                                                <p class="impP">(Adds 200 to Pro score)</p>

                                            </div>	





                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="https://play.google.com/store/apps/details?id=com.urbanpro.providerApp">  Download UrbanPro App</a>

                                                </p>

                                                <p class="impP">(Adds 100 to Pro score)</p>

                                            </div>	





                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/provider/providerGallery?id=816279&amp;galleryType=galleryVideosList"> Upload a video related to your service</a>

                                                </p>

                                                <p class="impP">(Adds 20 to Pro score)</p>

                                            </div>	





                                        </li><li class="improveBlock" id="impBlock-3" style="width: 397px;">

                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/provider/providerGallery?id=816279&amp;galleryType=galleryDocumentsList"> Upload a document related to your service</a>

                                                </p>

                                                <p class="impP">(Adds 10 to Pro score)</p>

                                            </div>	





                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/provider/providerGallery?id=816279&amp;galleryType=galleryPhotosList"> Upload a photo related to your service </a>

                                                </p>

                                                <p class="impP">(Adds 10 to Pro score)</p>

                                            </div>	





                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/comment/myRecentQuestionPage"> Answer one of the Questions asked by Students</a>

                                                </p>

                                                <p class="impP">(Adds 2 to Pro score)</p>

                                            </div>	





                                        </li><li class="improveBlock lastChild" id="impBlock-6" style="width: 397px;">

                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/comment/createLearningTip"> Post a Lesson</a>

                                                </p>

                                                <p class="impP">(Adds 10 to Pro score)</p>

                                            </div>	





                                            <div class="improveOne">
                                                <p class="impH3">

                                                    <a class="impA" target=" " href="/comment/myRecentQuestionPage"> Get likes on your Answer or Lesson</a>

                                                </p>

                                                <p class="impP">(Adds 5 to Pro score)</p>

                                            </div>	




















                                        </li></ul>
                                </div>
                                <a href="#" class="blueOutlineBtn control_prev mb-10 float-left">Previous</a>
                                <a href="#" class="blueOutlineBtn control_next mb-10 float-right">Next</a>
                                <div class="clear-fix"></div>	

                            </div>







                            <script>
                                function changeProfileRankFromSelect(providerInstance, person, select) {
                                    var currentID = $(select).val();
                                    console.log(currentID);
                                    $("#compute_option").html($('#to_be_resized option:selected').text());
                                    $('#to_be_resized').width($("#compute_select").width());
                                    $.ajax({
                                        type: "POST",
                                        url: "/register/renderRankAjax",
                                        data: {index: currentID, providerInstance: providerInstance, person: person},
                                        success: function (data) {
                                            $('#standout_detail').innerHTML = "";
                                            $('#standout_detail').html(data.rankingFactorCode)
                                            var titleName = $('#titleName').val();
                                            $('#category1-' + titleName).attr('checked', true);
                                            $('#sliderul').find('li:first-child').addClass('highZindex');
                                            $('#sliderul').find('li:first-child').addClass('firstChild');
                                            $('#sliderul').find('li:last-child').addClass('lastChild');
                                            $('.closeSlidePopup').trigger('click');
                                            $('#branchTopicId').attr('value', currentID);
                                            $("#compute_option").html($('#to_be_resized option:selected').text());
                                            $('#to_be_resized').width($("#compute_select").width());
                                        }
                                    });
                                }
                            </script>


                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            <a href="javascript:;">A website by</a> by <a href="http://goresonant.com/">Goresonant</a>
        </div>
    </div>
</section>
<script>
    jQuery(function () {
        jQuery("#tabs").tabs();
    });
</script>

<!--main content end-->
@stop