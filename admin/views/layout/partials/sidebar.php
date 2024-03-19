<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= BASE_URL ?>assets/images/hay.jpg"
            width="50px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><b>Võ Trường</b></p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li><a class="app-menu__item haha" href="<?= BASE_URL ?>assets/doc/phan-mem-ban-hang.html"><i
                    class='app-menu__icon bx bx-cart-alt'></i>
                <span class="app-menu__label">POS Bán Hàng</span></a></li>
        <li><a class="app-menu__item <?= (isset ($active1)) ? $active1 : null ?>" href="index.html"><i
                    class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a>
        </li>
        <li>
            <a class="app-menu__item <?= (isset ($active2)) ? $active2 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=users' ?>"><i class='app-menu__icon bx bx-id-card'>

                </i>
                <span class="app-menu__label">
                    Quản lý khách hàng</span>
            </a>
        </li>
        <!-- <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-user-voice'></i><span
                    class="app-menu__label">Quản lý khách hàng</span></a></li> -->
        <li>
            <a class="app-menu__item <?= (isset ($active3)) ? $active3 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=users' ?>"><i class='app-menu__icon bx bx-purchase-tag-alt'>
                </i>
                <span class="app-menu__label">
                    Quản lý sản phẩm</span>
            </a>
        </li>
        <li><a class="app-menu__item <?= (isset ($active4)) ? $active4 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=users' ?>"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Quản lý đơn hàng</span></a></li>
        <!-- <li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
                    class="app-menu__label">Quản lý nội bộ
                </span></a></li> -->
        <!-- <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
                    class="app-menu__label">Bảng kê lương</span></a></li> -->
        <li><a class="app-menu__item <?= (isset ($active5)) ? $active5 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=users' ?>"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span
                    class="app-menu__label">Báo cáo doanh
                    thu</span></a>
        </li>
        <!-- <li><a class="app-menu__item" href="<?= BASE_URL ?>assets/doc/page-calendar.html"><i
                    class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác
                </span></a></li> -->
        <li><a class="app-menu__item <?= (isset ($active6)) ? $active6 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=users' ?>"><i class='app-menu__icon bx bx-cog'></i><span
                    class="app-menu__label">Cài
                    đặt hệ thống</span></a></li>
    </ul>
</aside>