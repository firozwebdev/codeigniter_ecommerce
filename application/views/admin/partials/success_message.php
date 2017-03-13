<?php
$message = $this->session->userdata('message');
if($message){?>
    <div id="deletesuccess" class="alert alert-success"><?php echo $message;?></div>
    <?php $this->session->unset_userdata('message');
}
?>