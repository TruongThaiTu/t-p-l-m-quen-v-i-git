<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới khách hàng</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID khách hàng</th>
                                <th width="150">Họ và tên</th>
                                <th width="20">Ảnh thẻ</th>
                                <th width="300">Địa chỉ</th>
                                <!-- <th>Ngày sinh</th> -->
                                <!-- <th>Giới tính</th> -->
                                <th>SĐT</th>
                                <th>Ngày tạo</th>
                                <th width="100">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($users as $user) {
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>
                                        <?= $user['id'] ?>
                                    </td>
                                    <td>
                                        <?= $user['name'] ?>
                                    </td>
                                    <td><img class="img-card-person" src="<?= BASE_URL . $user['img'] ?>" alt=""></td>
                                    <td>
                                        <?= $user['address'] ?>
                                    </td>
                                    <!-- <td>12/02/1999</td> -->
                                    <!-- <td>Nữ</td> -->
                                    <td>
                                        <?= $user['tell'] ?>
                                    </td>
                                    <td>
                                        <?= $user['crea'] ?>
                                    </td>
                                    <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button"
                                            title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                                            data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>