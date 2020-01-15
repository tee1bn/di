
<?php include 'includes/header.php';?>

  </td></tr></tbody></table>


    <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
      <b style="color: #777777; text-transform: lowercase;"></b>
      <p><?=$data['name'];?></span>! Thank you for signing up!</p>
      <p>We are excited to have you join us at <?=project_name;?></p>
      <p>      Please confirm your email to continue   
        <a href="<?=domain;?>/register/confirm_email/<?=$data['email_verification_token'];?>/<?=$data['email'];?>">&nbsp; Confirm &nbsp;</a></p>

                      
    </div>

  </td></tr></tbody></table>
</td></tr></tbody></table>
    






<?php include 'includes/footer.php';?>