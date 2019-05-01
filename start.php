

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ANSIFACT TECHNOLOGIES</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/css/google/fontfce2.css?ver=31"/>
<link rel="stylesheet" href="assets/css/google/material_iconsfce2.css?ver=31"/>
<script>var base_url = 'index.html';</script><script type="text/javascript" src="assets/plugins/jquery/jquery.minfce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrapfce2.css?ver=31"/>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.minfce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/vendors/font-awesome/css/font-awesome.minfce2.css?ver=31"/>
<link rel="stylesheet" href="assets/base/vendors/bootstrap_dialog/css/bootstrap-dialog.minfce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/vendors/bootstrap_dialog/js/bootstrap-dialog.minfce2.js?ver=31"></script>
<script type="text/javascript" src="assets/base/vendors/combodate/moment.minfce2.js?ver=31"></script>
<script type="text/javascript" src="assets/base/vendors/combodate/combodatefce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/vendors/datatables/datatables.minfce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/vendors/datatables/datatables.minfce2.js?ver=31"></script>
<script type="text/javascript" src="assets/base/vendors/notify/notifyfce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/vendors/parsley/parsleyfce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/vendors/parsley/parsley.minfce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/vendors/selectize/selectizefce2.css?ver=31"/>
<link rel="stylesheet" href="assets/base/vendors/selectize/selectize.bootstrap3fce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/vendors/selectize/selectize.minfce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/vendors/flatpickr/flatpickr.minfce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/vendors/flatpickr/flatpickrfce2.js?ver=31"></script>
<script type="text/javascript" src="assets/base/vendors/idbstore/idbstorefce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/vendors/select2/css/select2.minfce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/vendors/select2/js/select2.full.minfce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/base/basefce2.css?ver=31"/>
<script type="text/javascript" src="assets/base/basefce2.js?ver=31"></script>
<link rel="stylesheet" href="assets/css/stylefce2.css?ver=31"/>
<script type="text/javascript" src="assets/js/mainfce2.js?ver=31"></script>

</head>

<body class="login-page bg-blue" >
  
 <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-indigo">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p style="font-size: 14pt;">ANSIFACT IN DEMO MODE..</p>
        </div>
    </div>
   
    <div class="login-box" style="border: 2" style="border-color: red">
        <div class="logo">    
        </div>
        <div class="card">
            
            <div class="body" id="login_content">
                <form action="" id="frm" method="post" accept-charset="utf-8">
                    <div id="error"></div>
                    <div class="msg">
                           <h4 style="display: inline"><br>ANSIFACT ECOCASH API SAMPLE PHP CODE </h4></div>
                                       <div class="input-group">
                        <span class="input-group-addon">
                        
                        </span>


                   
                        <div class="form-line">
                            <input type="text" class="form-control inp" name="phone" id="username" placeholder="Enter mobile number" required="" autofocus="" value="">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                          
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control inp" name="amount" placeholder="Enter amount" id="pwd" required>
                        </div>
                    </div>
                            <div class="form-line">
                            <button class="btn btn-info"  type="submit" name = "btn">Proceed</button>
                           <a href="https//www.ansifact.co.zw/partners/addnew"> <button class="btn btn-warning"  type="button" name = "btn">Register here to enjoy more</button></a>
                           
                                                      
                        </div>

                       
                    </div>
                        </form>
            </div>
        </div>
    </div>
 
    <!-- Jquery Core Js -->
  <script type="text/javascript" src="assets/plugins/jquery-slimscroll/jquery.slimscrollfce2.js?ver=31"></script>
<script type="text/javascript" src="assets/plugins/node-waves/wavesfce2.js?ver=31"></script>
<script type="text/javascript" src="assets/js/adminfce2.js?ver=31"></script>
  
  
  
  
  
<?php 
if(isset($_POST['btn']))
{

//error_reporting(0);
include("ansicash.php");
$ecocash = new ecocash;
$result = $ecocash->initialize_transaction($_POST['amount'],$_POST['phone']);


//INFORMATION FROM ANSIFACT TECHNOLOGIES
/*
1:ecocashReference
2:transactionOperationStatus
3:text
4:clientCorrelator
5:endUserId
6:id
7:paymentAmount
*/

//echo $result['ecocashReference']."<br>";
//echo $result['text']."<br>";
//echo $result['transactionOperationStatus']."<br>";
//echo $result['clientCorrelator']."<br>";


if($result['transactionOperationStatus'] =="")
{

	//This is an error message from econet wireless
	echo $result['text'];
    $ERROR =$result['text'];



   // echo"<script>alert('$ERROR')</script>";
}
else
{
	$phone =$result['endUserId'];
	$corrector =$result['clientCorrelator'];
echo"<script>location.replace('checker.php?mobile=$phone&corrector=$corrector')</script>";
}


}
?>