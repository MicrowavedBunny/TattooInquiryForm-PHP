<?php
function MailTemplate($name,$email,$phone_number,$placement,$coverup,$tattoo_size,$style,$color,$description,$font,$preferred_days,$preferred_time,$specific_date,$comments,$previous_client){
    $emailBody = 
'<p><strong>Thank you for inquiring about a tattoo appointment!</strong></p>
<p>Please allow at least <strong>3-5 business days</strong> for a response
email. If you dont receive an email within this time frame please resubmit.</p>
<p><strong>Thank you in advance for your patience, I look forward to working
with you!</strong></p>

<tr>
<td class="m_7528236957803100486mobile-padding-fix" style="padding:0 40px" align="center">
<table style="width:100%" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td style="line-height:0;font-size:0;border-radius:4px 4px 0 0" colspan="3" height="8" bgcolor="#FF6100"></td>
</tr>
<tr>
<td width="36"></td>
<td>
<table style="width:100%;border-bottom:1px solid #ecedf2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td style="line-height:0;font-size:0" colspan="2" height="16"></td>
</tr>
<tr>
<td valign="middle" align="left">
<h3 style="display:inline-block;vertical-align:middle;margin:0 0 0 8px;font-size:18px;font-weight:bold;color:#0a1551;font-family:Helvetica,sans-serif">Tattoo Inquiry</h3>
</td>
</tr>
<tr>
<td style="line-height:0;font-size:0" colspan="2" height="16"></td>
</tr>
</tbody>
</table>
</td>
<td width="36"></td>
</tr>
</tbody>
</table>
<table style="width:100%;border-radius:0 0 4px 4px" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td colspan="3" height="24">&nbsp;
<table style="width:100%;border-radius:0 0 4px 4px" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
<tbody>
<tr>
<td width="36"></td>
<td align="center">
<table id="m_7528236957803100486emailFieldsTable" style="font-size:14px;font-family:Helvetica,sans-serif" width="100%" cellspacing="0" cellpadding="5" border="0">
<tbody id="m_7528236957803100486emailFieldsTableBody">
<tr id="m_7528236957803100486row_3">
<td id="m_7528236957803100486question_3" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Name</td>
<td id="m_7528236957803100486value_3" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$name".'</td>
</tr>
<tr id="m_7528236957803100486row_4">
<td id="m_7528236957803100486question_4" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Email</td>
<td id="m_7528236957803100486value_4" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top"><a href="mailto:'."$email".'" target="_blank">'."$email".'</a></td>
</tr>
<tr id="m_7528236957803100486row_5">
<td id="m_7528236957803100486question_5" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Phone Number</td>
<td id="m_7528236957803100486value_5" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$phone_number".'</td>
</tr>
<tr id="m_7528236957803100486row_7">
<td id="m_7528236957803100486question_7" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Placement</td>
<td id="m_7528236957803100486value_7" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$placement".'</td>
</tr>
<tr id="m_7528236957803100486row_10">
<td id="m_7528236957803100486question_10" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Is this a coverup?</td>
<td id="m_7528236957803100486value_10" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$coverup".'</td>
</tr>
<tr id="m_7528236957803100486row_14">
<td id="m_7528236957803100486question_14" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Placement Location</td>
<td id="m_7528236957803100486value_14" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top"><img src="cid:placementImage"></img></td>
</tr>
<tr id="m_7528236957803100486row_16">
<td id="m_7528236957803100486question_16" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Tattoo Size</td>
<td id="m_7528236957803100486value_16" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$tattoo_size".'</td>
</tr>
<tr id="m_7528236957803100486row_17">
<td id="m_7528236957803100486question_17" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Style</td>
<td id="m_7528236957803100486value_17" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$style".'</td>
</tr>
<tr id="m_7528236957803100486row_18">
<td id="m_7528236957803100486question_18" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Color or B/G</td>
<td id="m_7528236957803100486value_18" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$color".'</td>
</tr>
<tr id="m_7528236957803100486row_20">
<td id="m_7528236957803100486question_20" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Description</td>
<td id="m_7528236957803100486value_20" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$description".'</td>
</tr>
<tr id="m_7528236957803100486row_31">
<td id="m_7528236957803100486question_31" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">If you would like script in your
tattoo, please find a font on <a href="http://www.dafont.com/">www.dafont.com</a>, list it below, and what the exact
wording will be.</td>
<td id="m_7528236957803100486value_31" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$font".'</td>
</tr>
<tr id="m_7528236957803100486row_21">
<td id="m_7528236957803100486question_21" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Reference 1</td>
<td id="m_7528236957803100486value_21" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top"><img src="cid:referenceImage1"></td>
</tr>
<tr id="m_7528236957803100486row_22">
<td id="m_7528236957803100486question_22" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Reference 2</td>
<td id="m_7528236957803100486value_22" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top"><img src="cid:referenceImage2"></td>
</tr>
<tr id="m_7528236957803100486row_23">
<td id="m_7528236957803100486question_23" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Reference 3</td>
<td id="m_7528236957803100486value_23" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top"><img src="cid:referenceImage3"></td>
</tr>
<tr id="m_7528236957803100486row_24">
<td id="m_7528236957803100486question_24" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">PREFERRED DAYS OF THE WEEK</td>
<td id="m_7528236957803100486value_24" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$preferred_days".'</td>
</tr>
<tr id="m_7528236957803100486row_25">
<td id="m_7528236957803100486question_25" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">PREFERRED TIME OF DAY</td>
<td id="m_7528236957803100486value_25" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$preferred_time".'</td>
</tr>
<tr id="m_7528236957803100486row_30">
<td id="m_7528236957803100486question_30" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">If you are looking for a specific
date, please list below those dates, so I can try to accommodate you.</td>
<td id="m_7528236957803100486value_30" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$specific_date".'</td>
</tr>
<tr id="m_7528236957803100486row_27">
<td id="m_7528236957803100486question_27" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">INQUIRIES &amp; ADDITIONAL
COMMENTS</td>
<td id="m_7528236957803100486value_27" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$comments".'</td>
</tr>
<tr id="m_7528236957803100486row_28">
<td id="m_7528236957803100486question_28" class="m_7528236957803100486questionColumn" style="padding:12px 8px 12px 0;color:#6f76a7" width="30%" valign="top">Have you been tattooed by me
before?</td>
<td id="m_7528236957803100486value_28" class="m_7528236957803100486valueColumn" style="padding:12px 0;color:#0a1551;font-weight:500" width="70%" valign="top">'."$previous_client".'</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td width="36"></td>
<td align="center"></td>
<td width="36"></td>
</tr>
<tr>
<td colspan="3" height="24"></td>
</tr>
</tbody>
</table>
</td>
</tr>';
    return $emailBody;
}
?>