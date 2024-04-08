<div class="dashboard_sidebar" id="dashboard_sidebar">
    <h3 class="dashboard_logo" id="dashboard_logo">TAKY</h3>
    <div class="dashboard_sidebar_user">
        <img src="Images/nha.png" alt="User Image." id="userImage"/>
        <span><?= $user['hoten'] ?></span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <!--class="menuActive"-->
            <li>
                <a href="./hethong.php"><i class="fa fa-chart-pie"></i> <span class="menuText">Dashboard</span></a>
            </li>
            <li>
                <a href="./users-add.php"><i class="fa fa-user-plus"></i> <span class="menuText">Quản Lý Người Dùng</span></a>
            </li>
        </ul>
    </div>
</div>