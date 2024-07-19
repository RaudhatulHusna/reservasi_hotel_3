<div class="col-lg-3">
<nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="widht:250px">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x']=='home') ||  !isset($_GET['x']))? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="home"><i class="bi bi-house"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='menu') ? 'active link-light' : 'link-dark' ; ?>" href="menu"><i class="bi bi-menu-app"></i></i> Daftar Menu</a>
        </li>
        <li class="nav-item">
        <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='facilities') ? 'active link-light' : 'link-dark'; ?>" href="facilities"><i class="bi bi-car-front"></i> Facilities</a>
</li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='activities') ? 'active link-light' : 'link-dark'; ?>" href="activities"><i class="bi bi-clipboard2"></i> Activities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='destination') ? 'active link-light' : 'link-dark'; ?>" href="destination"><i class="bi bi-image-alt"></i> Destination</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='event') ? 'active link-light' : 'link-dark'; ?>" href="event"><i class="bi bi-calendar-event"></i> Event</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='penawaran') ? 'active link-light' : 'link-dark' ; ?>" href="penawaran"><i class="bi bi-gift"></i> Penawaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='gallery') ? 'active link-light' : 'link-dark' ; ?>" href="gallery"><i class="bi bi-image"></i> Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='booking') ? 'active link-light' : 'link-dark' ; ?>" href="booking"><i class="bi bi-bootstrap-fill"></i> Booking</a>
        </li>
        <?php if($hasil['level']==1){?>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='user') ? 'active link-light' : 'link-dark' ; ?>" href="user"><i class="bi bi-person-vcard"></i> User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='report') ? 'active link-light' : 'link-dark'; ?>" href="report"><i class="bi bi-file-earmark"></i> Report</a>
        </li>
        <?php } ?>
        </ul>
    </div>
    </div>
</div>
</nav>
</div>