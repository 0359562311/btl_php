<div class="col-8  rounded ml-1 mt-3">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="mr-auto p-2 bd-highlight"><h1><strong>Nhân viên</strong></h1></div>
                        <div class="p-2 bd-highlight">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalThem"
                                    data-whatever="@mdo">
                                <strong>Thêm</strong>
                                <i class="fas fa-pen ml-2"></i>
                            </button>
                            <!--modal Sửa-->
                            <div class="modal fade" id="modalSua" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Quản lý nhân viên</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> 
                                        </div>
                                        <div class="modal-body">
                                            <form action="/btl3/nhanvien/sua" method="POST">
                                                <input name="nhanvienID" value="" id="employee-id" hidden="true">
                                                <div class="form-group">
                                                    <label for="employee-name" class="col-form-label">Tên:</label>
                                                    <input type="text" class="form-control" id="employee-name" name="hoVaTen" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="employee-address" class="col-form-label">Địa chỉ:</label>
                                                    <input type="text" class="form-control" id="employee-address" name="diaChi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="employee-phone" class="col-form-label">Số điện thoại:</label>
                                                    <input type="text" class="form-control" id="employee-phone" name="soDienThoai">
                                                </div>
                                                <div class="form-group">
                                                    <label for="employee-email" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" id="employee-email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Chức vụ</label>
                                                    <select class="custom-select" name="chucVu" id="employee-chucvu">
                                                            <option value="1">Nhân viên bán hàng</option>
                                                            <option value="2">Nhân viên kho</option>
                                                            <option value="3">Kế toán</option>
                                                            <option value="4">Nhân viên vệ sinh</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy
                                                </button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Thêm -->
                            <div class="modal fade" id="modalThem" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Quản lý nhân viên</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> 
                                        </div>
                                        <div class="modal-body">
                                            <form action="/btl3/nhanvien/them" method="POST">
                                                <div class="form-group">
                                                    <label for="add-employee-name" class="col-form-label">Tên:</label>
                                                    <input type="text" class="form-control" id="add-employee-name" name="hoVaTen" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-employee-address" class="col-form-label">Địa chỉ:</label>
                                                    <input type="text" class="form-control" id="add-employee-address" name="diaChi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-employee-phone" class="col-form-label">Số điện thoại:</label>
                                                    <input type="text" class="form-control" id="add-employee-phone" name="soDienThoai">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-employee-email" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" id="add-employee-email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Chức vụ</label>
                                                    <select class="custom-select" name="chucVu" id="add-employee-chucvu">
                                                            <option value="1" selected>Nhân viên bán hàng</option>
                                                            <option value="2">Nhân viên kho</option>
                                                            <option value="3">Kế toán</option>
                                                            <option value="4">Nhân viên vệ sinh</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy
                                                </button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mh-100 bg-white p-2">
                        <div class="d-flex bd-highlight my-3">
                            <div class="mr-auto px-4 bd-highlight"><h4><strong>Tất cả</strong></h4></div>
                            <div class="px-4 bd-highlight">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm theo tên, mã, .."
                                           aria-label="Search" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="button" id="button-addon2">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light m-4 p-3 rounded " style="max-height: 500px">
                            <div class="overflow-auto" style="height: 400px; width: 100%; overflow: auto">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã nhân viên</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Chức vụ</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['nhanvien'] as $key=>$value): ?>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <th scope="row"><?php echo $value['nhanvienID']; ?></th>
                                            <td><?php echo $value['hoVaTen']; ?></td>
                                            <td><?php echo $value['TenChucVu']; ?></td>
                                            <td><?php echo $value['SoDienThoai']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu" 
                                                            data-toggle="dropdown" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                                        <button class="dropdown-item text-success" type="button" id="sua-nhanvien-<?php echo $value['nhanvienID']; ?>"
                                                                data-toggle="modal" data-target="#modalSua">Sửa
                                                        </button>
                                                        <button class="dropdown-item text-danger" type="button" id="xoa-nhanvien-<?php echo $value['nhanvienID']; ?>"
                                                                data-toggle="modal" data-target="#modalDelete">Xóa
                                                        </button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <!--                                    modal delete-->
                                    <div class="modal fade" id="modalDelete" tabindex="-1"
                                         aria-labelledby="exampleModalDelete" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalDelete1">Xác nhận</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Thao tác này không thể quay lại
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="/btl3/nhanvien/xoa" method="POST">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <input hidden="true" id="xoa-nhanvien" name="nhanvienID" value="">
                                                        <button type="submit" class="btn btn-danger">
                                                            Oke
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </table>

                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination">
                                    <li class="page-item "><a class="page-link">Previous</a></li>
                                    <li class="page-item active"><a class="page-link">1</a></li>
                                    <li class="page-item"><a class="page-link">2</a></li>
                                    <li class="page-item"><a class="page-link">3</a></li>
                                    <li class="page-item"><a class="page-link">Next</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>


<script type="text/javascript">
    <?php foreach($data['nhanvien'] as $key=>$value): ?>
        $(document).on("click", "#sua-nhanvien-<?php echo $value['nhanvienID']; ?>", function () {
            $("#employee-id").val("<?php echo $value['nhanvienID']; ?>");
            $("#employee-name").val("<?php echo $value['hoVaTen']; ?>");
            $("#employee-address").val("<?php echo $value['DiaChi']; ?>");
            $("#employee-phone").val("<?php echo $value['SoDienThoai']; ?>");
            $("#employee-email").val("<?php echo $value['email']; ?>");
            $("#employee-chucvu").val("<?php echo $value['ChucVuID']; ?>");
        });
    <?php endforeach; ?>
    <?php foreach($data['nhanvien'] as $key=>$value): ?>
        $(document).on("click", "#xoa-nhanvien-<?php echo $value['nhanvienID']; ?>", function () {
            $(".modal-footer #xoa-nhanvien").val("<?php echo $value['nhanvienID']; ?>");
        });
    <?php endforeach; ?>
</script>
