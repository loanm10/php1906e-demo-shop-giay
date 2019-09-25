<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control" name="txtCateName" placeholder="Nhập tên danh mục"
                                   value="{!! old('txtCateName')!!}"/>
                        </div>
                        <div class="form-group">
                            <label>Tên danh mục đầy đủ</label>
                            <input class="form-control" name="txtFullName" placeholder="Nhập tên đầy đủ"
                                   value="{!! old('txtFullName')!!}"/>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Hủy</button>
                        {{csrf_field()}}
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>