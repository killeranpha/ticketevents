@extends('admin.layout.index')

@section('content')
<section class="p-t-20">
    <div class="container">
        <!-- WELCOME-->
        @include('admin.layout.welcomeback')
        <!-- END WELCOME-->
        <!-- BREADCRUMB-->
        @include('admin.layout.breadcrumb')
        <!-- END BREADCRUMB-->

        
        <div class="row">
            <div class="col-md-12">
                <h4>Tìm thấy {{count($r)}} kết quả</h4>
                <!-- <div class="table-data__tool">
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
                </div> -->
                
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên nhóm</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($r as $value)
                            <tr>
                                <td>{{ $value["thuTu"]}}</td>
                                <td>{{ $value["ten"]}}</td>
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
@endsection