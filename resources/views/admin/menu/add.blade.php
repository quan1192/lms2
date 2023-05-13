@extends('admin.main')
@section('content')
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="menu">Họ và tên</label>
                    <input type="text" name="name" class="form-control"  placeholder=" Nhập Họ và Tên">
                </div>

                <div class="form-group">
                    <label for="menu">Email address</label>
                    <input type="text" name="email" class="form-control"  placeholder="Nhập email">
                </div>

                <div class="form-group">
                    <label for="menu">Password</label>
                    <input type="text" name="password" class="form-control" placeholder=" Nhập Password">
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="GV" name="level">
                    <label for="GV" class="custom-control-label">Giảng Viên</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="2" type="radio" id="SV" name="level" checked>
                    <label for="SV" class="custom-control-label">Sinh Viên</label>
                </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo User</button>
            </div>
                @csrf
        </form>


@endsection




