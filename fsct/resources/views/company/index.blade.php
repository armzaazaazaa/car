


                <h1>crud</h1>
                <a href="/admin/rate1" class="btn btn-primary">ชุดที่1</a><br>

                    <br><a href="/admin/rate2" class="btn btn-primary">ชุดที่2</a><br>

                    <br><a href="/admin/rate3" class="btn btn-primary">ชุดที่3 Export Excel (xls) </a><br>

                    <table  width="80%" cellspacing="1" bgcolor="#b6c4d4" >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ประเทศต้นทาง</th>
                            <th>ผู้ผลิต</th>
                            <th>ชื่อรุ่น</th>
                            <th>ปี</th>
                            <th>ที่นั่ง</th>
                            <th>ประเภท</th>
                            <th>การจัดการ<a href="/admin/company/create">
                                    เพิ่ม
                                </a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->origin_country}}</td>
                                <td>{{$data->manufacturer}}
                                <td>{{$data->model_name}}</td>
                                <td>{{$data->year}}</td>
                                <td>{{$data->seat}}</td>
                                <td>{{$data->type}}</td>
                                <td>
                                    <a href="/admin/company/{{$data->id}}/edit" class="btn btn-success">แก้ไข</a>
                                    <button onclick="deleteBranch({{$data->id}})" type="button"
                                            class="btn btn-danger">ลบ
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form id="deleteBranch" method="post">
                        {{csrf_field()}}
                    </form>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

</div>



@section('javascript')
    <script type="text/javascript">
        function deleteBranch(id) {
            if (confirm("คุณต้องการจะลบใช้หรือไม่?")) {
                var form = document.getElementById('deleteBranch');
                form.setAttribute('action', "/admin/company/" + id + "/delete")
                form.submit()
            }
        }
    </script>
