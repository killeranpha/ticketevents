@extends('admin.layout.index')

@section('content')

<section class="p-t-20">
<form >
<input type="hidden" name="tenTruongSapXep" id="tenTruongSapXep">
<input type="hidden" name="kieuSapXep" id="kieuSapXep">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="danhsachnguoidung">
                <h3 class="title-5 m-b-35">Danh sách người dùng</h3>
            </a>   
                <div class="table-data__tool">
                    <div class="filters m-b-45">
                            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                <select class="js-select2" name="hienThi">
                                    <option selected="selected" value="3">All</option>
                                    <option value="10" @if($hienThi == 10)selected="selected"@endif
                                    >10</option>
                                    <option value="20" @if($hienThi == 20)selected="selected"@endif
                                    >20</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                <select class="js-select2 au-select-dark" name="active">
                                    <option selected="selected">All</option>
                                    <option value="1">Đã Active</option>
                                    <option value="0">Chưa Active</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>Lọc
                            </button>
                        </div>
                        <i class="au-form-icon--sm" >
                            <input class="au-input--w300 au-input--style2" type="text" value="" name="timKiem" placeholder="Nhập từ khóa..."/>
                                <button class="au-btn--submit2" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                        </i>
                </div>
                
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>
                                    Tên
                                    @if($tenTruongSapXep == 1)
                                    <button onclick=SapXepFunction(0,0)>
                                        <i class="fa fa-sort text-white ml-3" ></i>
                                    </button>
                                    @else
                                    <button onclick=SapXepFunction(0,1)>
                                        <i class="fa fa-sort text-white ml-3" ></i>
                                    </button>
                                    @endif
                                </th>
                                <th>Email
                                    @if($tenTruongSapXep == 1)
                                    <button onclick=SapXepFunction(1,0)>
                                        <i class="fa fa-sort text-white ml-3" ></i>
                                    </button>
                                    @else
                                    <button onclick=SapXepFunction(1,1)>
                                        <i class="fa fa-sort text-white ml-3" ></i>
                                    </button>
                                    @endif
                                </th>
                                <th>CMND</th>
                                <th>
                                    Số điện thoại
                                </th>
                                <th>Active
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($danhSach as $nd)
                            <tr>
                                <td>{{$nd->ten}}</td>
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
</form>
</section>
<div class="text-center">
    <div class="pagination">
        <ul class="pagination-list">
            {{$danhSach->appends(Request::only('ten','email','tenTruongSapXep','kieuSapXep'))->links()}}
        </ul>
    </div>
</div>
<script>
    function SapXepFunction(tenTruongSapXep,kieuSapXep){
		$('#tenTruongSapXep').val(tenTruongSapXep);
		$('#kieuSapXep').val(kieuSapXep);
	}
</script>
@endsection