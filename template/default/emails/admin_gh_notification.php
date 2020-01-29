<?php include 'includes/header.php';?>


      <span style="text-transform: capitalize; color: #203864"></span></td></tr></tbody></table>


    <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
      <b style="color: #777777;">New GH #<?=$gh->id;?> of <?=$currency;?><?=$this->money_format($gh->amount);?> has been created 
        by <?=$gh->user->fullname;?> <br>
        <a href="mailto://<?=$gh->user->email;?>"> <?=$gh->user->email;?> </a> <br>
        <a href="tel:/<?=$gh->user->phone;?>"> <?=$gh->user->phone;?> </a> <br>
      </b>
      <br>
      <br>
          Please see dashboard for more details. 
      <br>
      <br>
      <br>
    </div>

  </td></tr></tbody></table>
</td></tr></tbody></table>
    






<?php include 'includes/footer.php';?>