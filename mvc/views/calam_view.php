<div class="col-8  rounded ml-1 mt-3">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="mr-auto p-2 bd-highlight"><h1><strong>Giờ làm</strong></h1></div>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Quản lý giờ làm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> 
                                        </div>
                                        <div class="modal-body">
                                            <form action="/btl3/calam/sua" method="POST">
                                                <input name="CaLamID" value="" id="calam-id" hidden="true">
                                                <div class="form-group">
                                                    <label for="calam-gio" class="col-form-label">Số giờ:</label>
                                                    <input type="number" step="any" class="form-control" id="calam-gio" name="soGio" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="calam-ngay" class="col-form-label">Ngày:</label>
                                                    <input type="date" class="form-control" id="calam-ngay" name="ngay">
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
                                            <form action="/btl3/calam/them" method="POST">
                                                <div class="form-group">
                                                    <label for="add-calam-nhanvienID" class="col-form-label">Mã nhân viên:</label>
                                                    <input type="number" class="form-control" id="add-calam-nhanvienID" name="nhanvienID" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-calam-sogio" class="col-form-label">Số giờ:</label>
                                                    <input type="number" step="any" class="form-control" id="add-calam-sogio" name="soGio">
                                                </div>
                                                <div class="form-group">
                                                    <label for="add-calam-ngay" class="col-form-label">Ngày:</label>
                                                    <input type="date" class="form-control" id="add-calam-ngay" name="ngay">
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
                                    <input type="text" class="form-control" placeholder="Tìm kiếm theo tên, mã, .." value="<?php echo $data['query']; ?>"
                                           aria-label="Search" id="searchQuery" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="button" id="button-addon2" onclick="searchNhanVien()" >
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <script>
                                        function searchNhanVien() {
                                            var t = document.getElementById("searchQuery").value;
                                            window.location.replace("http://localhost/btl3/manage/calam/".concat(t));
                                        }
                                    </script>
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
                                        <th scope="col">Số giờ</th>
                                        <th scope="col">Ngày</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['calam'] as $key=>$value): ?>
                                        <tr>
                                            <th scope="row"><?php echo $value['nhanvienID']; ?></th>
                                            <td><?php echo $value['hoVaTen']; ?></td>
                                            <td><?php echo $value['SoGio']; ?></td>
                                            <td><?php echo $value['Ngay']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu" 
                                                            data-toggle="dropdown" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                                        <button class="dropdown-item text-success" type="button" id="sua-calam-<?php echo $value['CaLamID']; ?>"
                                                                data-toggle="modal" data-target="#modalSua">Sửa
                                                        </button>
                                                        <button class="dropdown-item text-danger" type="button" id="xoa-calam-<?php echo $value['CaLamID']; ?>"
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
                                                    <form action="/btl3/calam/xoa" method="POST">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <input hidden="true" id="xoa-calam" name="CaLamID" value="">
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
    <?php foreach($data['calam'] as $key=>$value): ?>
        $(document).on("click", "#sua-calam-<?php echo $value['CaLamID']; ?>", function () {
            $("#calam-id").val("<?php echo $value['CaLamID']; ?>");
            $("#calam-gio").val("<?php echo $value['SoGio']; ?>");
            $("#calam-ngay").val("<?php echo $value['Ngay']; ?>");
        });
    <?php endforeach; ?>
    <?php foreach($data['calam'] as $key=>$value): ?>
        $(document).on("click", "#xoa-calam-<?php echo $value['CaLamID']; ?>", function () {
            $(".modal-footer #xoa-calam").val("<?php echo $value['CaLamID']; ?>");
        });
    <?php endforeach; ?>
</script>
