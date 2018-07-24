@extends('admin.layout.index')

@section('content')
<section class="p-t-20">
    <div class="container">
         <!-- WELCOME-->
         @include('admin.layout.welcomeback')
        <!-- END WELCOME-->

        <!-- BREADCRUMB-->
        @include('admin.layout.breadcrumbChucNang')
        <!-- END BREADCRUMB-->

        <div class="row">
            <div class="col-md-12">
                <!-- <h3 class="title-5 m-b-35">Danh sách chức năng</h3> -->

                <!-- In kết quả tìm thấy được bao nhiêu! -->
                <p>Tìm thấy {{ count($rCN)}} kết quả</p>

                <div class="table-responsive table-responsive-data2">
                    <table class="table table-borderless table-data3">
					    <thead>
					        <tr>
					            <th>Tên chức năng</th>
					            <th>Đường dẫn</th>
					            <th>Public</th>
                                <th>Nhóm chức năng</th>
					            <th>Thứ tự</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
                        <!-- foreach in kết quả tìm kiếm -->
                        @foreach($rCN as $value)
					        <tr>
							    <td>{{ $value['ten'] }}</td>
							    <td>{{ $value['duongDan'] }}</td>
							    <td>{{ $value['isPublic'] }}</td>
                                @foreach($rNCN as $valueNCN)
                                    @if($valueNCN['id'] == $value['idNhomChucNang'])
                                    <td>{{ $valueNCN['ten'] }}</td>
                                    @endif
                                @endforeach
							    <td>{{ $value['thuTu'] }}</td>
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