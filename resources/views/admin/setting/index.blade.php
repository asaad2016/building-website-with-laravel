@extends('admin.layouts.layout')
@section('title')
اعددات الموقع
@endsection
@section('content')
  <section class="content-header">

      <h1>
        اعددات الموقع
      </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/setting/index') }}"><i class="fa fa-home"></i> لوحة تحكم اعددات العقار</a></li>    
           <li><a href="{{ url('/adminpanal/setting/create') }}"><i class="fa fa-plus"></i> اضافة اعددات جديدة</a></li>
        
        </ol>
    </section>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">اعددات الموقع</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>الكود</th>
                  <th>اسم الموقع</th>
                 
                  <th>الكلمات المفتاحية</th>
                  <th>الوصف</th>
                  <th> تاريخ الاضافة</th>
                  <th>التحكم</th>
                </tr>
                </thead>
                 @if(count($setting) > 0)
                <tbody>
                 
                  @foreach($setting as $settings)
                    <tr>
                      <td>{{ $settings->id }}</td>
                      <td>{{ $settings->sitename }}</td>
                      

                      <td>{{ $settings->keywords }}</td>
                      <td>{{ $settings->value }}</td>
                      <td>{{ $settings->created_at }}</td>
                      
                      <td> <a href="{{ url('/adminpanal/setting/edit/' . $settings->id) }}">&nbsp; <i class="fa fa-edit"></i></a> </td>
                      
                    </tr>
                  @endforeach
                
                </tbody>
                  @endif
                <tfoot>
                <tr>
                  <th>الكود</th>
                  <th>اسم الموقع</th>
                
                  <th>الكلمات المفتاحية</th>
                  <th>الوصف</th>
                  <th> تاريخ الاضافة</th>
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
              <h3 class="box-title">اعددات الموقع</h3>
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