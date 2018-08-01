@extends('admin.layout.index') @section('content')

<section class="p-t-20">
	<form>
		<!-- Đặt biến ẩn để sắp xếp -->
		<input type="hidden" name="tenTruongSapXep" id="tenTruongSapXep">
		<input type="hidden" name="kieuSapXep" id="kieuSapXep">
		<!-- End đặt biến -->
		<div class="container">
			<!-- WELCOME-->
			<div class="row">
				<div class="col-md-12">
					<div class="au-breadcrumb-content">
						<div class="au-breadcrumb-left">
							<span class="au-breadcrumb-span">
								<i>You are here:</i>
							</span>
							<ul class="list-unstyled list-inline au-breadcrumb__list">
								<li class="list-inline-item active">
									<a href="/danhsachchucnang">
										<h3>Danh sách chức năng</h3>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- END WELCOME-->
			<div class="table-data__tool">
				<!-- part left -->
				<div class="table-data__tool-left">
					<span>Có {{$CountR}} kết quả</span>
				</div>
				<!-- part right -->
				<div class="table-data__tool-right">
					<a class="au-btn-filter" href="{{Route('themmoichucnang')}}">
					<i class="fas fa-plus-circle"></i></i>Thêm chức năng
					</a>
					<a class="au-btn-filter" href="{{Route('danhsachchucnang')}}">
						<i class="fas fa-sync"></i>Reset
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-data__tool">
						<!-- part left -->
						<div class="table-data__tool-left">
							<div class="rs-select2--light rs-select2--sm">
								<select class="js-select2" name="hienThi">
									<option value="3" selected="selected">Hiển thị</option>
									<option value="5" @if($hienThi==5 ) {{ ' selected = "selected" ' }} @endif>5</option>
									<option value="10" @if($hienThi==10 ) {{ ' selected = "selected" ' }} @endif>10</option>
									<option value="20" @if($hienThi==22 ) {{ ' selected = "selected" ' }} @endif>20</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
							<button class="au-btn-filter mr-2">
							<i class="far fa-thumbs-up"></i>Chấp nhận</button>
							<a class="au-btn-filter" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								<i class="fas fa-search"></i>Tìm kiếm
							</a>
						</div>
						<!-- End part left -->

						<!-- part right -->
						<div class="table-data__tool-right">
							<!-- Phân trang -->
							<div class="text-center" align="center">
								<div class="pagination">
									<ul class="pagination-list">
										<!-- Hiển thị số phân trang -->
										{{ $r->links() }}
									</ul>
								</div>
							</div>
							<!-- End phân trang -->
						</div>
					</div>
				</div>

				<!-- Hiển thị tìm kiếm -->
				<div id="collapseExample" class="collapse">
					<table style="margin-bottom:20px">
						<tr align="center">
							<td></td>
							<td colspan="2">
								<h3>TÌM KIẾM</h3>
							</td>
						</tr>
						<tr align="center">
							<td>Tên chức năng : </td>
							<td>
								<input name='tenChucNang' @if($tenChucNang !='' ) value='{{$tenChucNang}}' @endif style="margin: 10px;" class="au-input--w300 au-input--style2"
								 type="text" placeholder="Tên chức năng">
							</td>
						</tr>
						<tr align="center">
							<td>Tên nhóm chức năng : </td>
							<td>
								<input name='tenNhomChucNang' @if($tenNhomChucNang !='' ) value='{{$tenNhomChucNang}}' @endif style="margin: 10px;" class="au-input--w300 au-input--style2"
								 type="text" placeholder="Tên nhóm chức năng">
							</td>
						</tr>
						<tr align="center">
							<td></td>
							<td>
								<button name='timKiem' value="timKiem" class="au-btn-filter">Tìm kiếm</button>
							</td>
						</tr>
					</table>
				</div>
				<!-- End hiển thị tìm kiếm -->

				<!-- part content -->
				<div class="table-responsive table-responsive-data2">
					<table class="table table-borderless table-data3">
						<thead align="center">
							<tr>
								<th>Thứ tự @if($kieuSapXep == 1)
									<button onclick="SapXepFunction(0,0)">
										<i class="fa fa-sort text-white ml-3"></i>
									</button>
									@else
									<button onclick="SapXepFunction(0,1)">
										<i class="fa fa-sort text-white ml-3"></i>
									</button>
									@endif
								</th>
								<th>Tên chức năng @if($kieuSapXep == 1)
									<button onclick="SapXepFunction(1,0)">
										<i class="fa fa-sort text-white ml-3"></i>
									</button>
									@else
									<button onclick="SapXepFunction(1,1)">
										<i class="fa fa-sort text-white ml-3"></i>
									</button>
									@endif
								</th>
								<th>Nhóm chức năng @if($kieuSapXep == 1)
									<button onclick="SapXepFunction(2,0)">
										<i class="fa fa-sort text-white ml-3"></i>
									</button>
									@else
									<button onclick="SapXepFunction(2,1)">
										<i class="fa fa-sort text-white ml-3"></i>
									</button>
									@endif
								</th>
								<th>Đường dẫn</th>
								<th>Public</th>
								<th>Chức năng</th>
							</tr>
						</thead>
						<tbody align="center">
							<!-- foreach in kết quả tìm kiếm -->
							@foreach($r as $value)
							<tr>
								<td>{{ $value->thuTu }}</td>
								<td>{{ $value->ten }}</td>
								<td>{{ $value->tenNhomChucNang }}</td>
								<td>{{ $value->duongDan }}</td>
								<td>{{ $value->isPublic }}</td>
								<td>
									<div class="table-data-feature">
										<button class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
											<i class="fas fa-pencil-alt"></i>
										</button>
										<button class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
											<i class="far fa-trash-alt"></i>
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
	</form>
</section>
<div class="text-right" style="margin:30px 20px" align="center">
	<div class="pagination">
		<ul class="pagination-list">
			<!-- Hiển thị số phân trang -->
			{{ $r->appends(Request::only('tenChucNang','tenNhomChucNang','tenTruongSapXep','kieuSapXep','timKiem'))->links() }}
			<!-- appends để lưu lại dữ liệu khi sang trang khác vẫn còn dữ liệu -->
		</ul>
	</div>
</div>
@endsection
<script>
	function SapXepFunction(tenTruongSapXep,kieuSapXep){
		$('#tenTruongSapXep').val(tenTruongSapXep);
		$('#kieuSapXep').val(kieuSapXep);
	}
</script>
