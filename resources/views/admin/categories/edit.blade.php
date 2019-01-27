@extends('admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="row">
     <div class="col-xs-12">
       <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm thể loại</h3>
          <a href="">
            <div class="themtheloai">
              <button class="btn btn-default">
                Trở về
              </button>
            </div>
          </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form">
            <!-- text input -->
            <div class="form-group">
              <label>ID thể loại</label>
              <input type="text" class="form-control" value="1" disabled>
            </div>
            <div class="form-group">

              <label >Tên thể loại</label>
              <input type="text" class="form-control" name="Ten" placeholder="VD: Xã hội , thể thao ...">
              <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input witherror</label>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Thêm Mới</button>
              <button class="btn btn-default" type="reset">Làm mới</button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <!-- Info boxes -->


  <div class="row">
    <div class="col-md-12">

      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Main row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection