<?php if ($this->fungsi->user_login()->level == 2) { ?> 
    <?php redirect('Users/v_users_data_member') ?>
<?php } else { ?> 
    <?php redirect('Users/v_users_admin') ?>
<?php } ?>