<?php $user = $this->session->userdata('ktpapps'); ?>
<ul id="sidebarnav">
    <li> <a class="waves-effect waves-dark" href="<?php echo site_url('dashboard/list_undangan_personal'); ?>" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Undangan Personal</span></a>    
    <li> <a class="waves-effect waves-dark" href="<?php echo site_url('dashboard/list_undangan_grup'); ?>" aria-expanded="false"><i class="ti-link"></i><span class="hide-menu">Undangan Group</span></a>    

    </li>    
    <li class="nav-small-cap"></li>
    <li> <a target="_blank" class="waves-effect waves-dark" href="<?php echo site_url('dashboard/bukutamu'); ?>" aria-expanded="false"><i class="ti-book text-danger"></i><span class="hide-menu">Buku Tamu</span></a></li>
    <li> <a target="_blank" class="waves-effect waves-dark" href="<?php echo site_url('dashboard/souvenir'); ?>" aria-expanded="false"><i class="ti-ticket text-danger"></i><span class="hide-menu">Buku Souvenir</span></a></li>

</ul>