@extends('admin.layout.index') @section('content')



<section class="p-t-20">
	<div class="container">
		<!-- WELCOME-->
		@include('admin.layout.welcomeback')
		<!-- END WELCOME-->

		<!-- BREADCRUMB-->
		@include('hieund.layout.breadcrumbChucNang')
		<!-- END BREADCRUMB-->

		<div class="row">
			<div class="col-md-12">
				<div class="table-data__tool">
					<!-- part left -->
					<form>
						<input name="submit1" type="hidden" value="submit1">
						<input name="submit" type="hidden" value="{{$submit}}">
						<div class="table-data__tool-left">
							<div class="rs-select2--light rs-select2--md">
								<select class="js-select2" name="sapXep">
									<option value="" selected="selected">Sắp xếp</option>
									<option value="ten" @if($sapXep=="ten" ) {{ ' selected = "selected" ' }} @endif>Tên từ A-Z</option>
									<option value="thuTu" @if($sapXep=="thuTu" ) {{ ' selected = "selected" ' }} @endif>Thứ tự tăng dần</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
							<div class="rs-select2--light rs-select2--sm">
								<select class="js-select2" name="hienThi">
									<option value="3" selected="selected">Hiển thị</option>
									<option value="5" @if($hienThi==5 ) {{ ' selected = "selected" ' }} @endif>5</option>
									<option value="10" @if($hienThi==10 ) {{ ' selected = "selected" ' }} @endif>10</option>
									<option value="20" @if($hienThi==22 ) {{ ' selected = "selected" ' }} @endif>20</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
							<input type="hidden" name="tenChucNang" value={{$tenChucNang}}>
							<input type="hidden" name="public" value={{$public}}>
							<button class="au-btn-filter">
								<i class="zmdi zmdi-filter-list"></i>Lọc</button>
						</div>
					</form>
					<!-- End part left -->
					@if($submit != '')
						<span>Tìm thấy {{count($r)}} kết quả</span> <!--nếu tồn tại submit thì in -->
					@endif
					<!-- Part right -->
					<form>
						<div class="table-data__tool-right">
							<button class="au-btn au-btn-icon au-btn--green au-btn--small">
								<a href="taomoi" role="button">Thêm chức năng</a>
							</button>
							<div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
								<select class="js-select2" name="type">
									<option selected="selected">Xuất</option>
									<option value="">Excel</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
						</div>
					</form>
					<!-- End part right -->
				</div>
				<!-- part content -->
				<div class="table-responsive table-responsive-data2">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
								<th>Tên chức năng</th>
								<th>Đường dẫn</th>
								<th>Public</th>
								<th>Nhóm chức năng</th>
								<th>Thứ tự</th>
								<th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
							<!-- foreach in kết quả tìm kiếm -->
							@foreach($r as $value)
							<tr>
								<td>{{ $value->ten }}</td>
								<td>{{ $value->duongDan }}</td>
								<td>{{ $value->isPublic }}</td>
								<td>{{ $value->tenNhomChucNang }}</td>
								<td>{{ $value->thuTu }}</td>
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
				<!-- End part content -->
			</div>
		</div>
	</div>
</section>
<div class="text-center" align="center">
	<div class="pagination">
		<ul class="pagination-list">
			<!-- Hiển thị số phân trang -->
			{{ $r->appends(Request::only('hienThi','sapXep'))->links() }}
		</ul>
	</div>
</div>
@endsection