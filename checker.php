<script type="text/javascript">

//Auto refresh not that you can use Ajax to check transaction status 
	
	setTimeout(function() {
  location.reload();
}, 3000);
</script>
<?php
include("ansicash.php");
$ecocash = new ecocash;
$result = $ecocash->Check_transaction_status($_GET['corrector'],$_GET['mobile']);

$ipa = $result;


if (strpos($result, 'TRANSACTION TIMED OUT') == true)
 {
$message ="Transaction failed please restart";
	echo"<script>location.replace('success.php?message=$message')</script>";

}

elseif(strpos($result, 'PENDING SUBSCRIBER VALIDATION') == true)
{

echo "Please enter your 4 digits pin to confirm your payment";
}
elseif(strpos($result, 'COMPLETED') == true)
{
$message ="You have successfully completed your payment";
echo"<script>location.replace('success.php?message=$message')</script>";

}
?>


<!DOCTYPE html>
<html>

<!-- Mirrored from marks.msu.ac.zw/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 21:07:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
            <p style="font-size: 14pt;"><?php echo $result;?></p>
        </div>
    </div>