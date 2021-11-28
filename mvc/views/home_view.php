<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thực hành 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><strong>Trang chủ</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services"><strong>Dịch vụ</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus"><strong>Về chúng tôi</strong></a>
                    </li>
                </ul>
            </div>
            <?php if(!isset($_SESSION['username'])) { ?>
                <div class="navbar-collapse d-flex justify-content-end">
                    <button class="btn btn-dark" data-toggle="modal" data-target="#login-modal">
                        Đăng nhập
                    </button>
                </div> 
            <?php } else { ?>
                <form action="manage/nhanvien/" method="GET">
                    <button type="submit" class="btn btn-dark">
                        Quản lý
                    </button>
                </form>
            <?php } ?>
        </nav>
    </header>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-modal-lable">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if(isset($data['error'])) {?>
                        <p> <?php echo $data['error']; ?> </p>
                    <?php }?>
                    <form action="login" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="username" require="true"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" require="true">
                        </div>
                        <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="home">
            <div class="jumbotron">
                <div class="row p-5">
                    <div class="justify-content-center">
                        <h1>Giải pháp Quản lý Nhân viên</h1>
                        <h5>Nhập email để nhận được thông tin mới nhất</h5>
                        <form action="">
                            <div class="input-group mt-4 " style="max-width: 500px">
                                <input type="text" class="form-control">
                                <button class="ml-2 btn btn-dark">Send</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class="text-center">
                <h2>Chúng tôi </h2>
                <div class="row mt-4">
                    <div class="col-4">
                        <i class="fas fa-user"></i>
                        <h3><strong>123</strong></h3>
                        <h5>nhân viên</h5>
                    </div>
                    <div class="col-4">
                        <i class="fas fa-marker"></i>
                        <h3><strong>456</strong></h3>
                        <h5>quản lý</h5>
                    </div>
                    <div class="col-4">
                        <i class="fas fa-heart"></i>
                        <h3><strong>789</strong></h3>
                        <h5>giám đốc </h5>
                    </div>
                </div>
                <div class="container mt-4">
                    <h5 class="mt-5">
                        <strong>
                            Trải qua 15 năm hình thành và phát triển
                        </strong>
                        , công ty chúng tôi ngày càng lớp mạnh trong lĩnh vực quản lý và
                        tư vấn đầu tư
                    </h5>
                    <div class="d-flex justify-content-center mt-5" data-toggle="modal" data-target="#exampleModal">
                        <button class="btn btn-dark">Tham gia</button>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6 mt-2 ">
                            <div class="card bg-light ">
                                <div class="card-header"><strong>Quan ly </strong>
                                </div>
                                <div class="card-body">
                                    <span>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat. Excepteur sint
                                        occaecat cupidatat non proident,
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2">
                            <div class="card bg-light">
                                <div class="card-header"><strong>Tu van</strong>
                                </div>
                                <div class="card-body">
                                    <span>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat. Excepteur sint
                                        occaecat cupidatat non proident,
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nhap email</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class=" mt-4 ">
                                        <input type="email" class="form-control mb-2" placeholder="email@gmail.com">
                                        <textarea class="form-control" placeholder="your text here"> </textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Dong</button>
                                <button type="button" class="btn btn-dark">Gui</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="mt-5">
            <div class=" container ">
                <h1>Dich vu</h1>
                <div class="d-flex justify-content-center mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="./static/MV5BMmExZDc4NjEtZjY1ZS00OWU5LWExZGYtYTc4NDM1ZmRhMDZhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_QL75_UX280_CR0,3,280,414_.jpg"
                                        alt="">
                                </div>
                                <div class="col-12  col-md-8 d-flex align-items-end flex-column p-5">
                                    <i>
                                        <h3>
                                            Quan Ly nhan su
                                        </h3>
                                        - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br>
                                        - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </i>
                                    <button class="btn btn-dark mt-auto p-2">
                                        Apply now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="./static/MV5BMmExZDc4NjEtZjY1ZS00OWU5LWExZGYtYTc4NDM1ZmRhMDZhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_QL75_UX280_CR0,3,280,414_.jpg"
                                        alt="">
                                </div>
                                <div class="col-8 d-flex align-items-end flex-column p-5">
                                    <i>
                                        <h3>
                                            Quan Ly nhan su
                                        </h3>
                                        - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br>
                                        - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </i>
                                    <button class="btn btn-dark mt-auto p-2">
                                        Apply now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <section id="aboutus">
            <h1 class="mt-5 text-center">
                Về chúng tôi
            </h1>
            <div class="container-fluid mb-5">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card">
                                <img class="card-img-top" src="./zeff.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  </div>
                            </div>

                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="card">
                                <img class="card-img-top" src="./zuck.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  </div>
                            </div>

                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="card">
                                <img class="card-img-top" src="./musk.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <footer id="contact mt-4">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>
                            Liên hệ
                        </h1>
                        <h4>
                            Gửi cho chúng tôi vấn đề của bạn
                        </h4>
                        <h6>
                            Hãy mô tả chi tiết vấn đề cùa bạn cùng với thông tin, chúng tôi sẽ trả lời sớm nhất có thể
                        </h6>
                        <div>
                            <h6>test@ptit.com</h6>
                            <h6>0123 456 789</h6>

                            <!--                        <i class="fas fa-arrows-alt-v fa-fw"></i>-->

                        </div>
                    </div>
                    <div class="col-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="examp@mail.com">
                                <small id="emailHelp" class="form-text text-muted">Chúng tôi k chia sẻ email của bạn cho
                                    bất cứ ai</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung</label>
                                <Textarea type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="..."></Textarea>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Gửi cho tôi bản sao</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <?php 
        if(isset($data['error'])) {
            echo '<script type="text/javascript">
            $(window).on("load", function() {
                $("#login-modal").modal("show");
            });
        </script>';
        }
    ?>
</body>

</html>