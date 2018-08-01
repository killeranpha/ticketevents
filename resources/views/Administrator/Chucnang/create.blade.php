<form action="{{Route('themmoichucnang')}}" method="get">
	<table>
		<tr align="center"> 
			<td></td>
			<td colspan="2">
				<h3>THÊM MỚI CHỨC NĂNG</h3>
			</td>
		</tr>
		<tr align="center">
			<td>Tên chức năng : </td>
			<td>
				<input name='tenChucNang' style="margin: 10px;" class="au-input--w300 au-input--style2"
				 type="text" placeholder="Tên chức năng">
			</td>
		</tr>
		<tr align="center">
			<td>Tên nhóm chức năng : </td>
			<td>
				<input name='tenNhomChucNang' style="margin: 10px;" class="au-input--w300 au-input--style2"
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
</form>