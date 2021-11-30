<div class="col-4  rounded ml-1 mt-3">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="mr-auto p-2 bd-highlight"><h1><strong>Hiệu quả nhất</strong></h1></div>
                    </div>

                    <div class="mh-100 bg-white p-2">
                        <div class="bg-light m-4 p-3 rounded " style="max-height: 500px">
                            <div class="overflow-auto" style="height: 400px; width: 100%; overflow: auto">
                                <table class="table table-striped" id="tinhluongtable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã nhân viên</th>
                                        <th scope="col">Tên nhân viên</th>
                                        <th scope="col">Tổng thưởng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['best'] as $key=>$value): ?>
                                        <tr>
                                            <th scope="row"><?php echo $value['nhanvienID']; ?></th>
                                            <td><?php echo $value['hoVaTen']; ?></td>
                                            <td><?php echo $value['tong']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


<div class="col-4  rounded ml-1 mt-3">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="mr-auto p-2 bd-highlight"><h1><strong>Chăm chỉ nhất</strong></h1></div>
                    </div>

                    <div class="mh-100 bg-white p-2">
                        <div class="bg-light m-4 p-3 rounded " style="max-height: 500px">
                            <div class="overflow-auto" style="height: 400px; width: 100%; overflow: auto">
                                <table class="table table-striped" id="tinhluongtable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã nhân viên</th>
                                        <th scope="col">Tên nhân viên</th>
                                        <th scope="col">Tổng giờ làm</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['hardest'] as $key=>$value): ?>
                                        <tr>
                                            <th scope="row"><?php echo $value['nhanvienID']; ?></th>
                                            <td><?php echo $value['hoVaTen']; ?></td>
                                            <td><?php echo $value['tong']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>