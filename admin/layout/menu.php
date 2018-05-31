<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo (CURRENT_URL == ADMIN_URL) ? "active" : ""; ?>" href="<?php echo ADMIN_URL; ?>">
            <i class="fa fa-home"></i>
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/users/">
            <i class="fa fa-users"></i>
            Users
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/country/">
            <i class="fa fa-briefcase"></i>
            Country
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/sejour/">
            <i class="fa fa-briefcase"></i>
            Séjours
        </a>
    </li>
</ul>