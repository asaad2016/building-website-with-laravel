@extends('admin.layouts.layout')
@section('title')
الرسائل
@endsection
@section('content')
  <section class="content-header">
      <h1>
        
        <small>الرسائل</small>
      </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/message/index') }}"><i class="fa fa-home"></i> لوحة تحكم الرسائل</a></li>    
           <li><a href="{{ url('/adminpanal/message/create') }}"><i class="fa fa-plus"></i> اضافة رسالة جديدة </a></li>
        
        </ol>
    </section>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">الرسائل</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: scroll">
              <table id="example2" class="table table-bordered table-hover"  style="overflow: hidden;">
                <thead>
                <tr>
                  <th>رقم</th>
                  <th>الاسم الاول</th>
                  <th>الاسم الاخير</th>
                  <th>الايميل</th>
                  <th>الموضوع</th>
                  <th>نص الرسالة</th>
                  <th>تاريخ الرسالة</th>
                  <th>التحكم</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                  <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->firstname }}</td>
                    <td>{{ $message->lastname }}
                    </td>
                    <td>{{ $message->email}}
                    </td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->bodymsg }}</td>
                    <td>{{ $message->created_at }}</td>                   
                    <td> <a href="{{ url('/adminpanal/message/edit/' . $message->id) }}">&nbsp; <i class="fa fa-edit"></i></a> <a href="{{ url('/adminpanal/message/delete/' . $message->id) }}"> <i class="fa fa-close"></i></a></td>
                    
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>رقم</th>
                  <th>الاسم الاول</th>
                  <th>الاسم الاخير</th>
                  <th>الايميل</th>
                  <th>الموضوع</th>
                  <th>نص الرسالة</th>
                  <th>تاريخ الرسالة</th>
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
              <h3 class="box-title">الرسائل</h3>
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
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    });
  });
</script>
@endsection