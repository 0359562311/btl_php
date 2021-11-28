<div class="col-8  rounded ml-1 mt-3">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="mr-auto p-2 bd-highlight"><h1><strong>Thưởng và phạt</strong></h1></div>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Quản lý thưởng và phạt</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> 
                                        </div>
                                        <div class="modal-body">
                                            <form action="/btl3/thuongphat/sua" method="POST">
                                                <input name="phatID" value="" id="phat-id" hidden="true">
                                                <div class="form-group">
                                                    <label for="thuongphat-nhanvien" class="col-form-label">Mã nhân viên:</label>
                                                    <input type="number" step="any" class="form-control" id="thuongphat-nhanvien" name="NhanVienID" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="thuongphat-tien" class="col-form-label">Số tiền:</label>
                                                    <input type="number" step="any" class="form-control" id="thuongphat-tien" name="tien" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phat-ngay" class="col-form-label">Ngày:</label>
                                                    <input type="date" class="form-control" id="phat-ngay" name="ngay">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phat-ghichu" class="col-form-label">Ghi chú:</label>
                                                    <input type="text" class="form-control" id="phat-ghichu" name="ghichu">
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
                                            <h5 class="modal-title" id="exampleModalLabel">Quản lý thưởng phạt</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> 
                                        </div>
                                        <div class="modal-body">
                                            <form action="/btl3/thuongphat/them" method="POST">
                                                <div class="form-group">
                                                    <label for="add-thuongphat-nhanvienID" class="col-form-label">Mã nhân viên:</label>
                                                    <input type="number" class="form-control" id="add-thuongphat-nhanvienID" name="NhanVienID" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-thuongphat-sogio" class="col-form-label">Số tiền (Thưởng +, Phạt -):</label>
                                                    <input type="number" step="any" class="form-control" id="add-thuongphat-sogio" name="tien">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-thuongphat-ngay" class="col-form-label">Ngày:</label>
                                                    <input type="date" class="form-control" id="add-thuongphat-ngay" name="ngay">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-thuongphat-ghichu" class="col-form-label">Ghi chú:</label>
                                                    <input type="text" class="form-control" id="add-thuongphat-ghichu" name="ghiChu">
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
                                        <th scope="col">Tên nhân viên</th>
                                        <th scope="col">Số tiền</th>
                                        <th scope="col">Ngày</th>
                                        <th scope="col">Ghi chú</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['thuongphat'] as $key=>$value): ?>
                                        <tr>
                                            <th scope="row"><?php echo $value['NhanVienID']; ?></th>
                                            <td><?php echo $value['hoVaTen']; ?></td>
                                            <td><?php echo $value['Tien']; ?></td>
                                            <td><?php echo $value['ngay']; ?></td>
                                            <td><?php echo $value['GhiChu']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu" 
                                                            data-toggle="dropdown" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                                        <button class="dropdown-item text-success" type="button" id="sua-thuongphat-<?php echo $value['phatID']; ?>"
                                                                data-toggle="modal" data-target="#modalSua">Sửa
                                                        </button>
                                                        <button class="dropdown-item text-danger" type="button" id="xoa-thuongphat-<?php echo $value['phatID']; ?>"
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
                                                    <form action="/btl3/thuongphat/xoa" method="POST">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <input hidden="true" id="xoa-thuongphat" name="phatID" value="">
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
    <?php foreach($data['thuongphat'] as $key=>$value): ?>
        $(document).on("click", "#sua-thuongphat-<?php echo $value['phatID']; ?>", function () {
            $("#phat-id").val("<?php echo $value['phatID']; ?>");
            $("#thuongphat-tien").val("<?php echo $value['Tien']; ?>");
            $("#phat-ghichu").val("<?php echo $value['GhiChu']; ?>");
            $("#phat-ngay").val("<?php echo $value['ngay']; ?>");
            $("#thuongphat-nhanvien").val("<?php echo $value['NhanVienID']; ?>");
        });
    <?php endforeach; ?>
    <?php foreach($data['thuongphat'] as $key=>$value): ?>
        $(document).on("click", "#xoa-thuongphat-<?php echo $value['phatID']; ?>", function () {
            $("#xoa-thuongphat").val("<?php echo $value['phatID']; ?>");
        });
    <?php endforeach; ?>
</script>
