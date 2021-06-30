<?php if ($this->session->has_userdata('success')) {?>
    <div class="alert alert-warning alert-dismissible fade show"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> 
                    <h6><i class=""><?=$this->session->flashdata('success');?></i></h6>
                    </div> 
<?php } ?> 
 
 