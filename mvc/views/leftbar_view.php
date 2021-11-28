<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="/static/logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<div class="mh-100 bg-light ">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

        </nav>
    </header>
    <section class="py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 rounded ">
                    <a class="navbar-brand" href="/btl3/home"><h1><strong>Trang chủ</strong></h1></a>
                    <div class="list-group mt-5">
                        <a href="/btl3/manage/nhanvien" class="p-2 m-1 rounded list-group-item list-group-item-action <?php if($data['type'] == 'nhanvien'){echo 'active';} ?>"
                           aria-current="true">
                            <strong>Nhân viên</strong>
                        </a>
                        <a href="/btl3/manage/calam" class="p-2 m-1 rounded list-group-item list-group-item-action <?php if($data['type'] == 'calam'){echo 'active';} ?>">
                            <strong>Giờ làm việc</strong>
                        </a>
                        <a href="/btl3/manage/thuongphat" class="p-2 m-1 rounded list-group-item list-group-item-action <?php if($data['type'] == 'thuongphat'){echo 'active';} ?>">
                            <strong>Thưởng và phạt</strong>
                        </a>
                        <a href="/btl3/manage/tinhluong" class="p-2 m-1 rounded list-group-item list-group-item-action <?php if($data['type'] == 'tinhluong'){echo 'active';} ?>">
                            <strong>Tính lương</strong>
                        </a>
                        <a href="/btl3/manage/thongke" class="p-2 m-1 rounded list-group-item list-group-item-action <?php if($data['type'] == 'thongke'){echo 'active';} ?>">
                            <strong>Thống kê</strong>
                        </a>
                    </div>
                </div>