@extends('admin.layout.index')

@section('content')

<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Danh sách người dùng</h3>
                
                <div class="table-data__tool">
                    <div class="filters m-b-45">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <select class="js-select2" name="property">
                                <option selected="selected">Tất cả</option>
                                <option value="">User</option>
                                <option value="">VIP</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                            <select class="js-select2 au-select-dark" name="time">
                                <option selected="selected">Tất cả</option>
                                <option value="">Tuần trước</option>
                                <option value="">Hơn 1 tuần trước</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>CMND</th>
                                <th>Số điện thoại</th>
                                <th>Active</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nguoidung as $nd)
                            <tr>
                                <td>{{$nd->name}}</td>
                                <td>{{$nd->email}}</td>
                                <td>{{$nd->CMND}}</td>
                                <td>{{$nd->soDienThoai}}</td>
                                @if($nd->active == 1)
                                <td class="process">Đã ACTIVE</td>
                                @else
                                <td class="denied">Chưa ACTIVE</td>
                                @endif
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Thông báo">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                             
                </div>
            </div>
        </div>
        
    </div>
</section>
@include('admin.congcu.phantrang')
@endsection