<?php $atoz = json_decode(file_get_contents($argv[1])); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<!-- NAME: 1 COLUMN - BANDED -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>*|MC:SUBJECT|*</title>

    <style type="text/css">
		body,#bodyTable,#bodyCell{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
		table{
			border-collapse:collapse;
		}
		img,a img{
			border:0;
			outline:none;
			text-decoration:none;
		}
		h1,h2,h3,h4,h5,h6{
			margin:0;
			padding:0;
		}
		p{
			margin:1em 0;
			padding:0;
		}
		a{
			word-wrap:break-word;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
			line-height:100%;
		}
		table,td{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		body,table,td,p,a,li,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		#bodyCell{
			padding:0;
		}
		.mcnImage{
			vertical-align:bottom;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		body,#bodyTable{
			background-color:#222222;
		}
		#bodyCell{
			border-top:0;
		}
		h1{
			color:#ffffff !important;
			display:block;
			font-family:Helvetica;
			font-size:40px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-1px;
			margin:0;
			text-align:left;
		}
		h2{
			color:#999999 !important;
			display:block;
			font-family:Helvetica;
			font-size:26px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-.75px;
			margin:0;
			text-align:left;
		}
		h3{
			color:#999999 !important;
			display:block;
			font-family:Helvetica;
			font-size:18px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-.5px;
			margin:0;
			text-align:left;
		}
		h4{
			color:#808080 !important;
			display:block;
			font-family:Helvetica;
			font-size:16px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:normal;
			margin:0;
			text-align:left;
		}
		#templatePreheader{
			background-color:#222222;
			border-top:0;
			border-bottom:0;
		}
		.preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{
			color:#ffffff;
			font-family:Helvetica;
			font-size:11px;
			line-height:125%;
			text-align:left;
		}
		.preheaderContainer .mcnTextContent a{
			color:#606060;
			font-weight:normal;
			text-decoration:underline;
		}
		#templateHeader{
			background-color:#222222;
			border-top:0;
			border-bottom:0;
		}
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		.headerContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#templateBody{
			background-color:#222222;
			border-top:0;
			border-bottom:0;
		}
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			color:#ffffff;
			font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;
			font-size:16px;
			line-height:150%;
			text-align:left;
		}
		.bodyContainer .mcnTextContent a{
			color:#9be22d;
			font-weight:normal;
			text-decoration:none;
		}
		#templateFooter{
			background-color:#cf3b82;
			border-top:0;
			border-bottom:0;
		}
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			color:#ffffff;
			font-family:Helvetica;
			font-size:11px;
			line-height:125%;
			text-align:left;
		}
		.footerContainer .mcnTextContent a{
			color:#999999;
			font-weight:normal;
			text-decoration:underline;
		}
	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnBoxedTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcpreview-image-uploader]{
			width:100% !important;
			display:none !important;
		}

}	@media only screen and (max-width: 480px){
		img[class=mcnImage]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnImageGroupContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageGroupContent]{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageGroupBlockInner]{
			padding-bottom:0 !important;
			padding-top:0 !important;
		}

}	@media only screen and (max-width: 480px){
		tbody[class=mcnImageGroupBlockOuter]{
			padding-bottom:9px !important;
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionTopContent],table[class=mcnCaptionBottomContent]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionLeftTextContentContainer],table[class=mcnCaptionRightTextContentContainer],table[class=mcnCaptionLeftImageContentContainer],table[class=mcnCaptionRightImageContentContainer],table[class=mcnImageCardLeftTextContentContainer],table[class=mcnImageCardRightTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnBoxedTextContentColumn]{
			padding-left:18px !important;
			padding-right:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnTextContent]{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=templateContainer]{
			max-width:600px !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		h1{
			font-size:24px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		h2{
			font-size:20px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		h3{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		h4{
			font-size:16px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		table[id=templatePreheader]{
			display:block !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=preheaderContainer] td[class=mcnTextContent],td[class=preheaderContainer] td[class=mcnTextContent] p{
			font-size:14px !important;
			line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=headerContainer] td[class=mcnTextContent],td[class=headerContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=footerContainer] td[class=mcnTextContent],td[class=footerContainer] td[class=mcnTextContent] p{
			font-size:14px !important;
			line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=footerContainer] a[class=utilityLink]{
			display:block !important;
		}

}</style></head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #222222;height: 100% !important;width: 100% !important;">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #222222;height: 100% !important;width: 100% !important;">
                <tr>
                    <td align="center" valign="top" id="bodyCell" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;border-top: 0;height: 100% !important;width: 100% !important;">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN PREHEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #222222;border-top: 0;border-bottom: 0;">
                                        <tr>
                                        	<td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                    <tr>
                                                        <td valign="top" class="preheaderContainer" style="padding-top: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="366" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-left: 18px;padding-bottom: 9px;padding-right: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                            AtoZ CSS News
                        </td>
                    </tr>
                </tbody></table>

			<table align="right" border="0" cellpadding="0" cellspacing="0" width="197" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                            <a href="*|ARCHIVE|*" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">View this email in your browser</a>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END PREHEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #222222;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                    <tr>
                                                        <td valign="top" class="headerContainer" style="padding-top: 10px;padding-bottom: 10px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px;padding-left: 9px;padding-top: 0;padding-bottom: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                                   <a href="http://www.atozcss.com">
                                        <img align="left" alt="" src="https://gallery.mailchimp.com/fb5c2d7d6163f7fcbba78e8b0/images/email_banner.png" width="564" style="max-width: 650px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
				</a>


                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #222222;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                    <tr>
                                                        <td valign="top" class="bodyContainer" style="padding-top: 10px;padding-bottom: 10px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
   <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">




		<!-- // ATOZCSS: Newsletter Header Section \\ -->
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding: 9px 18px;color: #FFFFFF;font-size: 14px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height: 150%;text-align: left;">

				<h1 style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 40px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #ffffff !important;">
				<?php echo $atoz->title ?>
				</h1>

				<h3 style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 18px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.5px;text-align: left;color: #999999 !important;">
				<?php echo $atoz->tag_line ?>
				</h3>

				<p style="margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;line-height: 150%;text-align: left;">
				<?php echo str_replace("tweet", '<a href="http://www.twitter.com/guyroutledge" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #9be22d;font-weight: normal;text-decoration: none;">tweet</a>', $atoz->intro_text) ?>
				</p>

                        </td>
                    </tr>
                </tbody></table>
		<!-- // ATOZCSS: End Newsletter Header Section \\ -->


		<!-- // ATOZCSS: Horizontal Line \\ -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    		<tbody class="mcnDividerBlockOuter">
        		<tr>
            		<td class="mcnDividerBlockInner" style="padding: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                		<table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 2px;border-top-style: solid;border-top-color: #999999;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    		<tbody><tr>
                        		<td style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                            		<span></span>
                        		</td>
                    		</tr>
                		</tbody></table>
            		</td>
        		</tr>
    		</tbody>
		</table>
		<!-- // ATOZCSS: End Horizontal Line \\ -->




		<!-- // ATOZCSS: CodeSchool Sponsorship Section \\ -->
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding: 9px 18px;color: #FFFFFF;font-size: 14px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height: 150%;text-align: left;">


                         <a href="https://www.codeschool.com/?utm_source=test&utm_medium=newsletter&utm_term=october&utm_content=homepage&utm_campaign=a%20to%20z%20css">
                                        <img align="center" alt="Code School ad" src="https://gallery.mailchimp.com/fb5c2d7d6163f7fcbba78e8b0/images/9206ab86-150a-421e-82f3-7400969b6739.png" width="501"  style="max-width: 501px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
				</a>

                        <p style="line-height: 20.7999992370605px;margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;text-align: left;">
			AtoZ CSS News is sponsored by <a href="http://www.codeschool.com/?utm_source=test&utm_medium=newsletter&utm_content=getting%20started&utm_campaign=a%20to%20z%20css">Code School</a>. Join over 1 million students who are learning by doing with Code School courses covering JavaScript, HTML, CSS, Ruby, Git, iOS, and more. Only $29/mo.
			</p>

                        </td>
                    </tr>
                </tbody></table>
		<!-- // ATOZCSS: CodeSchool Sponsorship Section \\ -->




		<!-- // ATOZCSS: Horizontal Line \\ -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    		<tbody class="mcnDividerBlockOuter">
        		<tr>
            		<td class="mcnDividerBlockInner" style="padding: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                		<table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 2px;border-top-style: solid;border-top-color: #999999;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    		<tbody><tr>
                        		<td style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                            		<span></span>
                        		</td>
                    		</tr>
                		</tbody></table>
            		</td>
        		</tr>
    		</tbody>
		</table>
		<!-- // ATOZCSS: End Horizontal Line \\ -->





		<!-- // ATOZCSS: Links Section \\ -->

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding: 9px 18px;color: #FFFFFF;font-size: 14px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height: 150%;text-align: left;">

			<h2 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #999999 !important;">Great CSS Reads</h2>

                        </td>
                    </tr>
                </tbody></table>

		<?php foreach ( $atoz->news as $newsitem ) : ?>
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding: 9px 18px;color: #FFFFFF;font-size: 14px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height: 150%;text-align: left;">

                       <h2 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #ffffff !important;">
                        <a href="<?php echo $newsitem->url ?>" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #9be22d;font-weight: normal;text-decoration: none;">
                        <?php echo $newsitem->link_text ?></a>
                        </h3>

                        <p style="line-height: 20.7999992370605px;margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;text-align: left;">
			<?php echo preg_replace('/(@(\w+))/', '<a href="http://twitter.com/\2" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #9be22d;font-weight: normal;text-decoration: none;" >\1</a>', $newsitem->link_comment) ?>
                        </p>


                        </td>
                    </tr>
                </tbody></table>
		<?php endforeach; ?>

		<!-- // ATOZCSS: End Links Section \\ -->





		<!-- // ATOZCSS: Horizontal Line \\ -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    		<tbody class="mcnDividerBlockOuter">
        		<tr>
            		<td class="mcnDividerBlockInner" style="padding: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                		<table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 2px;border-top-style: solid;border-top-color: #999999;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    		<tbody><tr>
                        		<td style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                            		<span></span>
                        		</td>
                    		</tr>
                		</tbody></table>
            		</td>
        		</tr>
    		</tbody>
		</table>
		<!-- // ATOZCSS: End Horizontal Line \\ -->




		<!-- // ATOZCSS: CSS Tip Section \\ -->
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding: 9px 18px;color: #FFFFFF;font-size: 14px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height: 150%;text-align: left;">

			<h2 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #999999 !important;">CSS Tips</h2>

                        <p style="line-height: 20.7999992370605px;margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;text-align: left;">
			Each week I'll be giving you a quick CSS tip for each of the first 26 AtoZ CSS videos.
			</p>
                        <p style="line-height: 20.7999992370605px;margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;text-align: left;">
                        This week's tip on the blog is <?php echo $atoz->css_tip_letter ?> for <?php echo $atoz->css_tip_property ?>. Check it out here:
                        </p>

                        <h3 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 18px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #ffffff !important;">
                        <a href="http://www.atozcss.com/blog/css-tip-<?php echo strtolower($atoz->css_tip_letter) ?>" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #9be22d;font-weight: normal;text-decoration: none;">
                        CSS Tip:  <?php echo $atoz->css_tip_property ?>
                        </a>
                        </h3>

                        <p style="line-height: 20.7999992370605px;margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;text-align: left;">
                        Or if you missed the original video check it out here:
                        </p>

			<!--
                        <a href="http://www.atozcss.com/<?php echo strtolower($atoz->css_tip_letter) ?>" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #9be22d;font-weight: normal;text-decoration: none;">
                        <img src="https://embed-ssl.wistia.com/deliveries/<?php echo $atoz->wistia_id ?>.jpg?image_play_button=true&image_play_button_color=cc3f85e0&image_crop_resized=600x338" alt="video image" width=400 >
                        </a>
			-->

                        </td>
                    </tr>
                </tbody></table>
		<!-- // ATOZCSS: End CSS Tip Section \\ -->

		<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    		<tbody class="mcnTextBlockOuter">
        		<tr>
            		<td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                		<table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    		<tbody><tr>

                        		<td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;line-height: 150%;text-align: left;">

                        		*|WISTIA:[$vid=<?php echo $atoz->wistia_id ?>, $max_width=450, $watch_url=http://www.atozcss.com/<?php echo strtolower($atoz->css_tip_letter) ?>, $title=N, $border=N, $trim_border=N, $play_button_color=cc3f85e0]|*
                        		</td>
                    		</tr>
                		</tbody></table>

            		</td>
        		</tr>
    		</tbody>
		</table>


		<!-- // ATOZCSS: Horizontal Line \\ -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    		<tbody class="mcnDividerBlockOuter">
        		<tr>
            		<td class="mcnDividerBlockInner" style="padding: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                		<table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 2px;border-top-style: solid;border-top-color: #999999;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    		<tbody><tr>
                        		<td style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                            		<span></span>
                        		</td>
                    		</tr>
                		</tbody></table>
            		</td>
        		</tr>
    		</tbody>
		</table>
		<!-- // ATOZCSS: End Horizontal Line \\ -->



		<!-- // ATOZCSS: Farewell Section \\ -->
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding: 9px 18px;color: #FFFFFF;font-size: 14px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height: 150%;text-align: left;">

                        <p style="line-height: 20.7999992370605px;margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 16px;text-align: left;">
			That's all for now, folks.<br>
			<br>
			If you've written or seen any interesting articles or CSS experiments that you think should be featured in next week's newsletter,
			<a href="http://www.twitter.com/guyroutledge" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #9be22d;font-weight: normal;text-decoration: none;"> drop me a tweet</a>
			and let me know! <br>
			<br>
			Cheers<br>
			<br>
			&nbsp;-- Guy
                        </p>

                        </td>
                    </tr>
                </tbody></table>
		<!-- // ATOZCSS: Farewell Section \\ -->


			                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right: 9px;padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">

            </td>
        </tr>
    </tbody>
</table>



            </td>
        </tr>
    </tbody>
</table>




<!-- // ATOZCSS: Everything below is the social, footer \\ -->

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnShareBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnShareBlockOuter">
            <tr>
                <td valign="top" style="padding: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareBlockInner">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnShareContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody><tr>
        <td align="left" style="padding-top: 0;padding-left: 9px;padding-bottom: 0;padding-right: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnShareContent" style="border: 1px none #EEEEEE;background-color: #222222;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                <tbody><tr>
                    <td align="left" valign="top" class="mcnShareContentItemContainer" style="padding-top: 9px;padding-right: 9px;padding-left: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
							<tbody><tr>
								<td align="left" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

			                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right: 9px;padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 9px;padding-bottom: 5px;padding-left: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="*|FORWARD|*" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-forwardtofriend-48.png" style="display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left: 5px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="*|FORWARD|*" target="" style="color: #505050;font-family: Arial;font-size: 12px;font-weight: normal;line-height: 100%;text-align: center;text-decoration-line: none;word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Forward</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->

			                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right: 9px;padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 9px;padding-bottom: 5px;padding-left: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="http://www.facebook.com/sharer/sharer.php?u=*|URL:ARCHIVE_LINK_SHORT|*" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" style="display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left: 5px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="http://www.facebook.com/sharer/sharer.php?u=*|URL:ARCHIVE_LINK_SHORT|*" target="" style="color: #505050;font-family: Arial;font-size: 12px;font-weight: normal;line-height: 100%;text-align: center;text-decoration-line: none;word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Share</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->

			                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right: 9px;padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 9px;padding-bottom: 5px;padding-left: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="http://twitter.com/intent/tweet?text=*|URL:MC_SUBJECT|*: *|URL:ARCHIVE_LINK_SHORT|*" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-twitter-48.png" style="display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left: 5px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="http://twitter.com/intent/tweet?text=*|URL:MC_SUBJECT|*: *|URL:ARCHIVE_LINK_SHORT|*" target="" style="color: #505050;font-family: Arial;font-size: 12px;font-weight: normal;line-height: 100%;text-align: center;text-decoration-line: none;word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Tweet</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->

			                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right: 9px;padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 9px;padding-bottom: 5px;padding-left: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="https://plus.google.com/share?url=*|URL:ARCHIVE_LINK_SHORT|*" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-googleplus-48.png" style="display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left: 5px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="https://plus.google.com/share?url=*|URL:ARCHIVE_LINK_SHORT|*" target="" style="color: #505050;font-family: Arial;font-size: 12px;font-weight: normal;line-height: 100%;text-align: center;text-decoration-line: none;word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">+1</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->

			                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right: 0;padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 9px;padding-bottom: 5px;padding-left: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="http://www.linkedin.com/shareArticle?url=*|URL:ARCHIVE_LINK_SHORT|*&amp;mini=true&amp;title=*|URL:MC_SUBJECT|*" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-linkedin-48.png" style="display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left: 5px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
			                                                                <a href="http://www.linkedin.com/shareArticle?url=*|URL:ARCHIVE_LINK_SHORT|*&amp;mini=true&amp;title=*|URL:MC_SUBJECT|*" target="" style="color: #505050;font-family: Arial;font-size: 12px;font-weight: normal;line-height: 100%;text-align: center;text-decoration-line: none;word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Share</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->

								</td>
							</tr>
						</tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

                </td>
            </tr>
    </tbody>
</table></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #cf3b82;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                    <tr>
                                                        <td valign="top" class="footerContainer" style="padding-top: 10px;padding-bottom: 10px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                            AtoZ CSS was lovingly created by <a href="http://www.guyroutledge.co.uk" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #999999;font-weight: normal;text-decoration: underline;">Guy Routledge</a> with Sass and Vim.
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #ffffff;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                            <em>Copyright  *|CURRENT_YEAR|* *|LIST:COMPANY|*, All rights reserved.</em>
<br>
*|IFNOT:ARCHIVE_PAGE|*
    *|LIST:DESCRIPTION|*
    <br>
    <br>
    <strong>Our mailing address is:</strong>
    <br>
    *|HTML:LIST_ADDRESS_HTML|* *|END:IF|*
    <br>
    <br>
    <a href="*|UNSUB|*" class="utilityLink" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #999999;font-weight: normal;text-decoration: underline;">unsubscribe from this list</a>&nbsp;&nbsp;&nbsp;
    <a href="*|UPDATE_PROFILE|*" class="utilityLink" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #999999;font-weight: normal;text-decoration: underline;">update subscription preferences</a>&nbsp;
    <br>
    <br>
    *|IF:REWARDS|* *|HTML:REWARDS|*
*|END:IF|*
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
