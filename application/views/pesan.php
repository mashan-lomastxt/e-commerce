 <?php if ($this->session->has_userdata('success')) {?>
 <div class="alert alert-success alert-dismissible"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> 
                    <h6><i class="icon fa fa-check"><?=$this->session->flashdata('success');?></i></h6>
                    </div> 
<?php } ?>