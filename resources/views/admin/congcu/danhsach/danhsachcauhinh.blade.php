@extends('admin.layout.index')

@section('content')
<section class="p-t-20">
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Danh sách cấu hình</h3>
            <form action="{{Route('danhsachcauhinh')}}" method="get">
                <div class="table-data__tool">
                    <div class="filters m-b-45">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <select class="js-select2" name="property">
                                <option selected="selected">Kiểu sắp xếp</option>
                                <option value="1">Số Thứ Tự</option>
                                <option value="2">Từ A - Z</option>

                            </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <select class="js-select2 au-select-dark" name="paginate">
                                <option value="5" selected="selected">Dòng hiển thị</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                         <i class="zmdi zmdi-filter-list"></i>Lọc</button>
                    </div>
                    </form>
                    <div class="float-right">
                        <form class="au-form-icon--sm"  action="{{Route('danhsachcauhinh')}}" method="get">
                            <input class="au-input--w300 au-input--style2" type="text" name="ten" placeholder="Tìm kiếm">
                            <button class="au-btn--submit2" type="submit" name="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                            @csrf
                        </form>
                    </div>
                </div>
                            
                <div class="table-responsive table-responsive-data2">
                    <table  id="example" class="table table-borderless table-data3">
					    <thead>
					        <tr>
					            <th>Stt</th>
					            <th>Tên Cấu hình</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
                        @foreach($cauHinh as $value)
					        <tr>
							    <td>{{$value->id}}</td>
							    <td>{{$value->ten}}</td>
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
<style>
.pagination li{
    float:left;
}
</style>
<div class="text-center">
{!! $cauHinh->links() !!}
</div>


@endsection