@extends('admin.layouts.layout')
@section('title')
شاشة العقارات
@endsection
@section('content')
  <section class="content-header">
    <h1>
        <small>شاشة العقارات</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa1 fa-dashboard"></i> الرئسية </a></li>
      <li><a href="{{ url('/adminpanal/bu/index') }}"><i class="fa fa-home"></i> لوحة تحكم العقارات</a></li>    
       <li><a href="{{ url('/adminpanal/bu/create') }}"><i class="fa fa-plus"></i> اضافة عقار جديد </a></li>
      
    </ol>
  </section>
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">شاشة العقارات</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body"  style="overflow-x: scroll">
            <table id="example2" class="table table-bordered table-hover" style="overflow: hidden;">
              <thead>
              <tr>
                <th>رقم العقار</th>
                <th>اسم العقار</th>
                <th>السعر</th>
                <th>النوع</th>
                <th>اضيف في</th>
                <th>الحالة</th>
                <th>عقارتي</th>
                <th>المستخدم</th>
                <th>التحكم</th>
              </tr>
              </thead>
              <tbody>
              @foreach($bu as $bus)
                <tr>
                  <td>{{ $bus->id }}</td>
                  <td>{{ $bus->bu_name }}</td>
                  <td>{{ $bus->bu_price }}</td>
                  <td>{{ $bus->bu_type }}</td>
                  <td>{{ $bus->created_at }}</td>
                  <td>{{ $bus->bu_status }}</td>
                  <td>{{ $id }}</td>
                  <td>{{ $bus->name }}</td>
                  
                  <td> <a href="{{ url('/adminpanal/bu/edit/' . $bus->id) }}">&nbsp; <i class="fa fa-edit"></i></a> <a href="{{ url('/adminpanal/bu/delete/' . $bus->id) }}"> <i class="fa fa-close"></i></a></td>
                  
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>رقم العقار</th>
                <th>اسم العقار</th>
                <th>السعر</th>
                <th>النوع</th>
                <th>اضيف في</th>
                <th>الحالة</th>
                <th>عقارتي</th>
                <th>المستخدم</th>
                <th>التحكم</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">شاشة العقارات</h3>
          </div>
          <!-- /.box-header -->
         
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

@endsection
@section("js")
<script>
  $(function () {
    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });
  });
</script>
@endsection