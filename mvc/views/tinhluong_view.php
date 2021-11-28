<div class="col-8  rounded ml-1 mt-3">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="mr-auto p-2 bd-highlight"><h1><strong>Tính lương</strong></h1></div>
                    </div>

                    <div class="mh-100 bg-white p-2">
                        <div class="d-flex bd-highlight my-3">
                            <div class="mr-auto px-4 bd-highlight"><h4><strong>Tất cả</strong></h4></div>
                            <div class="px-4 bd-highlight">
                                <input type="date" id="datepicker" class="datepicker" onchange="handler(event);">
                            </div>
                        </div>
                        <div class="bg-light m-4 p-3 rounded " style="max-height: 500px">
                            <div class="overflow-auto" style="height: 400px; width: 100%; overflow: auto">
                                <table class="table table-striped" id="tinhluongtable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã nhân viên</th>
                                        <th scope="col">Tên nhân viên</th>
                                        <th scope="col">Lương</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['thuongphat'] as $key=>$value): ?>
                                        <tr>
                                            <th scope="row"><?php echo $value['NhanVienID']; ?></th>
                                            <td><?php echo $value['hoVaTen']; ?></td>
                                            <td><?php echo $value['luong']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
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
    function handler(e){
        $.ajax
            ({
                type: "Get",
                url: 'http://localhost/btl3/api/tinhluong/'.concat(e.target.value),
            }).done(function (responseString){
                const response = JSON.parse(responseString);
                $('#tinhluongtable tbody').empty();
                for(var i=0; i<response.length;i++) {
                    var html1 = `
                        <tr>
                            <th scope="row">${response[i].nhanvienID}</th>
                            <td>${response[i].hoVaTen}</td>
                            <td>${response[i].tp}</td>
                        </tr>
                    `;
                    $('#tinhluongtable > tbody:last-child').append(html1);
                }
            });
    }
</script>
