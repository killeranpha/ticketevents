@extends('admin.layout.index')

@section('content')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Danh sách chức năng</h3>
                            
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
					            <th>Tên chức năng</th>
					            <th>Đường dẫn</th>
					            <th>Public</th>
					            <th>Thứ tự</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
							    <td>Nguyễn Văn A</td>
							    <td>Đà Nẵng</td>
							    <td>0969969969</td>
							    <td>VIP</td>
							    <td>
                                    <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    </div>
                                </td>
							</tr>
					    </tbody>
					</table>
                                    
                </div>
            </div>
        </div>
                    
    </div>
</section>
@include('admin.congcu.phantrang')

@endsection