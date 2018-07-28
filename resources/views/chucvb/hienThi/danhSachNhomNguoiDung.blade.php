@extends('admin.layout.index') @section('content')

<section class="p-t-20">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-5 m-b-35">Danh sách nhóm người dùng</h3>
				<!-- Thêm nhóm người dùng -->

				<!-- Tùy chọn -->
				<div style="margin-top:40px"></div>
				<form>
					<div class="table-data__tool">
						<div class="table-data__tool-left">
							<div class="rs-select2--light rs-select2--md" style="width: 200px">
								<select class="js-select2" name="sapXep">
									<option selected="selected" value="0">Chọn kiểu sắp xếp</option>
									<option value="1" @if($sapXep==1 ) selected="selected" @endif>Tên</option>
									<option value="2" @if($sapXep==2 ) selected="selected" @endif>Thứ tự</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>

							<div class="rs-select2--light rs-select2--sm" style="width: 200px">
								<select class="js-select2" name="hienThi">
									<option value="" selected="selected">Chọn số dòng hiển thị</option>
									<option value="5" @if($hienThi==5 ) selected="selected" @endif>5</option>
									<option value="10" @if($hienThi==10 ) selected="selected" @endif>10</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>

							<!-- Search -->
							<input name="timKiem" class="au-input--w300 au-input--style2" type="text" placeholder="Tìm kiếm">

							<button class="au-btn-filter">
								<i class="zmdi zmdi-filter-list"></i>Lọc</button>
						</div>
					</div>
				</form>
				<div style="margin-top:40px"></div>
				<!-- Danh sách -->
				<div class="table-responsive table-responsive-data2">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Tên</th>
								<th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
							@foreach($r as $value)
							<tr>
								<td>{{$value["thuTu"]}}</td>
								<td>{{$value["ten"]}}</td>
								<td>chức năng ở đây</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="text-center">
	<div class="pagination">
		<ul class="pagination-list">
			{{$r->appends(Request::only('timKiem','hienThi','sapXep'))-> links()}}
		</ul>
	</div>
</div>
@endsection