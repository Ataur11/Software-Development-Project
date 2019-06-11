<?php 	

	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		
		} 
//timmer
        include('config.php');	
		$query="select * from question";
		$result=mysqli_query($connect,$query);
		$rowcount=mysqli_num_rows($result);
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
		//Schedule Time
		$a=$row[0]['s']; $ax=substr($a, 0, 9); $ay=substr($a, 11, 6);
		$e=$row[0]['e'];$ex=substr($e, 0, 9); $ey=substr($e, 11, 6);
		$d=$row[0]['du2']; $d=(int)$d; $d=$d-1;
		
		//Current time
		$time=date("Y-m-d h:i");
		$b = new DateTime('now', new DateTimezone('Asia/Dhaka'));
		$b=$b->format('Y-m-d H:i');
		
		$a1 = substr($a, 0, 4); $a1=(int)$a1;  $b1 = substr($b, 0, 4);  $b1=(int)$b1; //year  
		$a2 = substr($a, 5, 2); $a2=(int)$a2;  $b2 = substr($b, 5, 2);  $b2=(int)$b2;//month
		$a3 = substr($a, 8, 2); $a3=(int)$a3;  $b3 = substr($b, 8, 2);  $b3=(int)$b3;//date
		$a4 = substr($a, 11, 2);$a4=(int)$a4;  $b4 = substr($b, 11, 2);  $b4=(int)$b4;//hour
		$a5 = substr($a, 14, 2);$a5=(int)$a5;  $b5 = substr($b, 14, 2);  $b5=(int)$b5;//min	
 
//check exam is over
   		$query="select * from question";
		$result=mysqli_query($connect,$query);
		$rowcount=mysqli_num_rows($result);
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
 
		$du=$row[0]['du']; $du=(int)$du;
		if($du===0){$effect='hidden'; }else{$margin='-45';}
  
  
		//Search	
	if(isset($_POST['Enter'])){
		
		$email= $_POST['email'] ;
		
		include('config.php');$query="select * from career WHERE a2='$email'";$result=mysqli_query($connect,$query);
		$rowcount=mysqli_num_rows($result);$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
		$pass=$row[0]['a16'];
		$a1=$row[0]['a1'];
	if($pass != 0) { 
	
	
		$random =  str_pad(rand(0,199999), 5, "0", STR_PAD_LEFT);
		$computerId = $_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
	    $query = "UPDATE career SET a16='$random', a29='$computerId' WHERE a2='$email' ";try{include('config.php');$update_Result = mysqli_query($connect, $query);if($update_Result){if(mysqli_affected_rows($connect) > 0){
		

 
	
 
		
$subject = 'New Password';

	$messages ='<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title></title>
    <!--[if !mso]><!-- -->
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<!--<![endif]-->
    
    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

[owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 640px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 212px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 424px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 320px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 213px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 160px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 128px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 106px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 91px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 80px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 71px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 64px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 58px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 53px !important; }

@media only screen and (min-width: 660px) {
  .block-grid {
    width: 640px !important; }
  .block-grid .col {
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 640px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 212px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 424px !important; }
  .block-grid.two-up .col {
    width: 320px !important; }
  .block-grid.three-up .col {
    width: 213px !important; }
  .block-grid.four-up .col {
    width: 160px !important; }
  .block-grid.five-up .col {
    width: 128px !important; }
  .block-grid.six-up .col {
    width: 106px !important; }
  .block-grid.seven-up .col {
    width: 91px !important; }
  .block-grid.eight-up .col {
    width: 80px !important; }
  .block-grid.nine-up .col {
    width: 71px !important; }
  .block-grid.ten-up .col {
    width: 64px !important; }
  .block-grid.eleven-up .col {
    width: 58px !important; }
  .block-grid.twelve-up .col {
    width: 53px !important; } }

@media (max-width: 660px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth, img.fullwidthOnMobile {
    max-width: 100% !important; }
  .no-stack .col {
    min-width: 0 !important;
    display: table-cell !important; }
  .no-stack.two-up .col {
    width: 50% !important; }
  .no-stack.mixed-two-up .col.num4 {
    width: 33% !important; }
  .no-stack.mixed-two-up .col.num8 {
    width: 66% !important; }
  .no-stack.three-up .col.num4 {
    width: 33% !important; }
  .no-stack.four-up .col.num3 {
    width: 25% !important; }
  .mobile_hide {
    min-height: 0px;
    max-height: 0px;
    max-width: 0px;
    display: none;
    overflow: hidden;
    font-size: 0px; } }

    </style>
</head>
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #F4F4F4">
  <style type="text/css" id="media-query-bodytag">
    @media (max-width: 520px) {
      .block-grid {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

      .col {
        min-width: 320px!important;
        max-width: 100%!important;
        width: 100%!important;
        display: block!important;
      }

        .col > div {
          margin: 0 auto;
        }

      img.fullwidth {
        max-width: 100%!important;
      }
			img.fullwidthOnMobile {
        max-width: 100%!important;
      }
      .no-stack .col {
				min-width: 0!important;
				display: table-cell!important;
			}
			.no-stack.two-up .col {
				width: 50%!important;
			}
			.no-stack.mixed-two-up .col.num4 {
				width: 33%!important;
			}
			.no-stack.mixed-two-up .col.num8 {
				width: 66%!important;
			}
			.no-stack.three-up .col.num4 {
				width: 33%!important;
			}
			.no-stack.four-up .col.num3 {
				width: 25%!important;
			}
      .mobile_hide {
        min-height: 0px!important;
        max-height: 0px!important;
        max-width: 0px!important;
        display: none!important;
        overflow: hidden!important;
        font-size: 0px!important;
      }
    }
  </style>
  <!--[if IE]><div class="ie-browser"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table class="nl-container" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #F4F4F4;width: 100%" cellpadding="0" cellspacing="0">
	<tbody>
	<tr style="vertical-align: top">
		<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #F4F4F4;"><![endif]-->

    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 640px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 640px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="640" style=" width:640px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 640px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
        <tr style="vertical-align: top">
            <td class="divider_inner" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;min-width: 100%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                <table class="divider_content" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 10px solid #3b3b3b;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                        <tr style="vertical-align: top">
                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#F4F4F4;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 640px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #3a3a3a;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#3a3a3a;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#F4F4F4;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 640px;"><tr class="layout-full-width" style="background-color:#3a3a3a;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="640" style=" width:640px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 640px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div align="center" class="img-container center fixedwidth " style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px;line-height:0px;"><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
<div style="line-height:15px;font-size:1px">&#160;</div>  <img class="center fixedwidth" align="center" border="0" src="http://softwarelagbe.com/img/logo.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 160px" width="160">
<div style="line-height:20px;font-size:1px">&#160;</div><!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#F4F4F4;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 640px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #E7E7E7;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#E7E7E7;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#F4F4F4;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 640px;"><tr class="layout-full-width" style="background-color:#E7E7E7;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="640" style=" width:640px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 640px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div class="">
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 30px; padding-bottom: 20px;"><![endif]-->
	<div style="color:#3b3b3b; line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 30px; padding-bottom: 20px;">	
		<div style="font-size:12px;line-height:14px;color:#3b3b3b; text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><strong><span style="font-size: 28px; line-height: 57px;">NEW PASSWORD</span></strong></p><center><h3>hello Sir,'.' '.$a1.'</h3></center></br><center><h3>'.' Use Password: '.$random.'</h3></center></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
                  
                    <div align="center" class="img-container center  autowidth  " style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px;line-height:0px;"><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <img class="center  autowidth " align="center" border="0" src="http://softwarelagbe.com/automation/images/divider.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 316px" width="316">
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
                  
                    <div class="">
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 20px; padding-bottom: 25px;"><![endif]-->
	<div style="color:#555555; line-height:180%; padding-right: 10px; padding-left: 10px; padding-top: 20px; padding-bottom: 25px;">	
		<div style="font-size:12px;line-height:22px; color:#555555;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 25px;text-align: center">We noticed that you recently union with us. and we are delighted to welcome you to the SoftwareLagbe family! </p></div>	
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 640px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;" class="block-grid two-up ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 640px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="320" style=" width:320px; padding-right: 5px; padding-left: 5px; padding-top:5px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="min-width: 320px;max-width: 320px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:30px; padding-right: 5px; padding-left: 5px;"><!--<![endif]-->

                  
                    
<div align="center" class="button-container center " style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://softwarelagbe.com/" style="height:33pt; v-text-anchor:middle; width:124pt;" arcsize="0%" strokecolor="" fillcolor="#3b3b3b"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff;   font-size:14px;"><![endif]-->
    <a href="http://softwarelagbe.com/" target="_blank" style="display: block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #ffffff; background-color: #3b3b3b; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; max-width: 166px; width: 126px;width: auto; border-top: 5px solid transparent; border-right: 5px solid transparent; border-bottom: 5px solid transparent; border-left: 5px solid transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px;  mso-border-alt: none">
      <span style="font-size:12px;line-height:24px;">VISIT WEBSITE</span>
    </a>
  <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align="center" width="320" style=" width:320px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="min-width: 320px;max-width: 320px;display: table-cell;vertical-align: top;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    
<div align="center" class="button-container center " style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://softwarelagbe.com/admin" style="height:33pt; v-text-anchor:middle; width:121pt;" arcsize="0%" strokecolor="#3B3B3B" fillcolor="#ffffff"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#3b3b3b;   font-size:14px;"><![endif]-->
    <a href="https://softwarelagbe.com/admin/a_dashboard/online_login.php" target="_blank" style="display: block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #3b3b3b; background-color: #ffffff; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; max-width: 162px; width: 122px;width: auto; border-top: 5px solid #3B3B3B; border-right: 5px solid #3B3B3B; border-bottom: 5px solid #3B3B3B; border-left: 5px solid #3B3B3B; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; mso-border-alt: none">
      <span style="font-size:12px;line-height:24px;">USER LOGIN</span>
    </a>
  <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>

                  
                  
            
                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
		</td>
  </tr>
  </tbody>
  </table>
  <!--[if (mso)|(IE)]></div><![endif]-->


</body></html>';					
					
 			require_once('../../login/mailer/class.phpmailer.php');
		    $mail = new PHPMailer(); 
			$mail->IsSMTP(); 
			$mail->SMTPDebug  = 0;                     
			$mail->SMTPAuth   = true;                  
			$mail->SMTPSecure = "ssl";                 
			$mail->Host       = "mail.softwarelagbe.com";        
			$mail->Port       = 465;             
			$mail->AddAddress($email);
			$mail->Username="support@softwarelagbe.com";  
			$mail->Password="135host81451881s";            
			$mail->SetFrom('support@softwarelagbe.com','SoftwareLagbe IT SOLUTIONS');
			$mail->AddReplyTo("support@softwarelagbe.com","SoftwareLagbe IT SOLUTIONS");
			$mail->Subject    = $subject;
			$mail->MsgHTML($messages);
			$mail->Send();
        
			phpAlert("Check Your Email");
			
		}else{}}} catch (Exception $ex) { }
		  

	}else {
		phpAlert("Incorrect Password");
	}

	 }
	
		
	

	
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Skill Development in IT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  		
		<!-- Favicons -->
        <link rel="shortcut icon" href="images/dark-logosm.png" />
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">   		
<style>

		html {
    min-height: 607px;
    background-image: url(images/career4.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;}
		
		body {
    opacity: 1;
    transition: .5s opacity;
}
body.fade-out {
    opacity: 0;
    transition: none;
}

a {
    color: #3c8dbc;
    cursor: pointer;
}
 	.overlay{display:none;}
	
 
.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}

.js-ag-timer-block {
  position: relative;
}
.js-ag-timer_item {
  text-align: center;

  position: absolute;
}
.js-ag-timer_num {
  line-height: 1.2 !important;
}


@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}

@media only screen and (max-width: 639px) {

}

@media only screen and (max-width: 479px) {

}

@media (min-width: 768px) and (max-width: 979px) {
  .ag-format-container {
    width: 750px;
  }

}

@media (min-width: 980px) and (max-width: 1161px) {
  .ag-format-container {
    width: 960px;
  }

}

 body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: red;
}
 
 
    </style>
</head>
<body class="hold-transition login-page  fade-out" onload="setInterval(refresh, 500); "style="background: url(images/career4.jpg) no-repeat center fixed;  background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;" >

<div class="row <?php echo $effect; ?>">
<div class="col-md-3"></div>
<div class="col-md-6">
 <div class="box"style="box-shadow: 10px 10px 15px #bc6e3c40;">
	<div class="box-header">	
	<center><h3>Contest Countdown</h3></center><center><p><?php   echo 'Date-time: (24-hF)'.'<b>'.$ax.', '.$ay.'</b>'.' '.'to'.' '.'<b>'.$ex.', '.$ey.'</b>'.' '.'Duration:'.' '.$d.' '.'minute'; ?></p></center><p id="message1"></p>
	</div>
<div class="">
  <div id="js-countdown"></div>
</div>							
</div> 
</div>
<div class="col-md-3"></div>
</div> 

 

<div class="login-box wow fadeInDown" style="margin-top:<?php echo $margin;  ?>px">
 
  <div class="login-box-body"  style="box-shadow: 5px 10px 18px #162d35;">
						<a href="https://career24.xyz">		<div class="space-bot text-center">	
<img alt="" src="https://softwarelagbe.com/img/dark-logo.png" style=" width:200px">	</a>
    <p class="login-box-msg">Sign in</p>
<script>
 


	 function refresh(){ $.ajax({ type: "POST", url: "online_check_time_refresh.php", data: {}, dataType: "JSON", success: function(data) { $("#message1").html(data); }, error: function(err) { alert(err); } });  }

</script>
    <form action="online_q1.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pin" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="Enter" class="btn btn-primary btn-block btn-flat">Sign In</button>

        </div></br></br></br>
		  <a data-toggle="modal" data-target="#modal-info" style="padding:16px;" >I forgot my password</a> </br></br>
		  <a href="https://softwarelagbe.com/apply1.php?id=1543754018" class="text-center" style="padding:16px;">Register a new membership</a>
      </div>
    </form>
 
<div class="modal modal-info fade" id="modal-info" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Forgot password?</h4>
              </div>
              <div class="modal-body">
    <form action="online_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="Enter" class="btn btn-primary btn-block btn-flat">Submit</button>

        </div> 
      </div>
    </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="bower_components/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script src='https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/timer-countdown/libs/TimeCircles.min.js'></script>

<script>
alert = function() {};


//timeer
(function ($) {
  $(function () {

    $(window).resize(agResize);
    agResize();

    function agResize() {
		var a1=<?php echo $a1 ;?>;//year
		var a2=<?php echo $a2 ;?>;//month
		a2=a2-1;
		var a3=<?php echo $a3 ;?>;//tarikh
		var a4=<?php echo $a4 ;?>;//hour
		var a5=<?php echo $a5 ;?>;//min

      $('#js-countdown').TimeCircles({
        ref_date: new Date(a1, a2, a3, a4, a5, 0, 0),
        start: true,
        refresh_interval: 0.1,
        count_past_zero: true,
        circle_bg_color: '#DEDEDE',
        use_background: true,
        fg_width: 0.05,
        bg_width: 0.50,
        time: {
          Days: {show: true, text: 'Days', color: '#F09217'},
          Hours: {show: true, text: 'Hours', color: '#F09217'},
          Minutes: {show: true, text: 'Minutes', color: '#F09217'},
          Seconds: {show: true, text: 'Seconds', color: '#F09217'}
        }
      }).rebuild();
    }

  });
})(jQuery);
 
</script>
<script> 

$(function() {
    $('body').removeClass('fade-out');
});
</script>

</body>
</html>
