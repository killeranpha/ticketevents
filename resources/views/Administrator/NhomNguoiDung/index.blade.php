@extends('Layout.index') @section('content')

<section class="p-t-20">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-5 m-b-35">Danh sách nhóm người dùng</h3>
				<!-- Tùy chọn -->
				<div style="margin-top:40px"></div>
				<form>
					<div class="table-data__tool">
						<div class="table-data__tool-left">
							<p>Có {{$countSelect}} nhóm người dùng</p>
						</div>
						<div class="table-data__tool-right">
							<a class="au-btn-filter" href="{{Route('themnhomnguoidung')}}">
							<i class="far fa-plus-square"></i>Thêm nhóm mới
							</a>
							<a class="au-btn-filter" href={{Route( 'danhsachnhomnguoidung')}}>
								<i class="fas fa-circle-notch"></i>Reset</a>
						</div>
					</div>
					<div style="margin-top:40px"></div>
					<!-- Phân trang trên -->
					<div class="table-data__tool">
						<div class="table-data__tool-left">
							@include('Layout.phanTrang')
							<!-- Search -->
							<input name="timKiem" class="au-input--w300 au-input--style2" type="text" placeholder="Tìm kiếm" @if($timKiem !="" ) value="{{$timKiem}}"
							 @endif>
							<button class="au-btn-filter">
								<i class="fas fa-cog"></i>Lọc</button>
						</div>
						<div class="table-data__tool-right">
							<div class="text-center">
								<div class="pagination">
									<ul class="pagination-list">
										{{$r->appends(Request::only('timKiem','hienThi','thuTu','ten'))-> links()}}
									</ul>
								</div>
							</div>
						</div>
					</div>
					@if($timKiem != "")
					<div>
						<p>Đã tìm thấy {{$countWhere}} kết quả</p>
					</div>
					@endif
					<!-- Danh sách -->
					<div class="table-responsive table-responsive-data2">
						<table class="table table-borderless table-data3">
							<thead>
								<tr>
									<!-- Thứ tự -->
									<th>Thứ tự @if($thuTu==0)
										<button name="thuTu" value="1">
											<i class="fas fa-sort text-white ml-5"></i>
										</button>
										@else
										<button name="thuTu" value="0">
											<i class="fas fa-sort text-white ml-5"></i>
											<button>
												@endif
									</th>
									<!-- Tên -->
									<th>Tên @if($ten==0)
										<button name="ten" value="1">
											<i class="fas fa-sort  text-white ml-5"></i>
										</button>
										@else
										<button name="ten" value="0">
											<i class="fas fa-sort text-white ml-5"></i>
											<button>
												@endif
									</th>
									<th>Chức năng</th>
								</tr>
							</thead>
							<tbody>
								@foreach($r as $value)
								<tr>
									<td>{{$value["thuTu"]}}</td>
									<td>{{$value["ten"]}}</td>
									<td>
										<div class="table-data-feature">
											<button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa">
												<i class="fas fa-pencil-ruler"></i>
											</button>
											<button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa">
												<i class="far fa-trash-alt"></i>
											</button>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Phân trang dưới -->
<div class="text-center">
	<div class="pagination">
		<ul class="pagination-list">
			{{$r->appends(Request::only('timKiem','hienThi','thuTu','ten'))-> links()}}
		</ul>
	</div>
</div>
@endsection