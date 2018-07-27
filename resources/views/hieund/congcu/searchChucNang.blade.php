<form class="au-form-icon--sm" action="{{Route('searchChucNang')}}" method="get"> 
    <table>
        <tr align="center">
            <td></td>
            <td colspan="2"><h3>TÌM KIẾM</h3></td>
        </tr>
        <tr align="center">
            <td>Tên chức năng : </td>
            <td><input name='tenChucNang' style="margin: 10px;" class="au-input--w300 au-input--style2" type="text" placeholder="Tên chức năng"></td>
        </tr>
        <tr align="center">
            <td>Public : </td>
            <td><input name='public' style="margin: 10px;" class="au-input--w300 au-input--style2" type="text" placeholder="Public"></td>
        </tr>
        <tr align="center">
            <td></td>
            <td><input name='submit' type="submit" value="submit" style="min-width:45%;min-height:50px;margin-top:5px"></td>
        </tr>
    </table>
</form>