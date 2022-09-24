@extends('admin.layouts.layout')
@section('title')
بيانات الاعضاء
@endsection
@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">بيانات الاعضاء</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! $dataTable->table(['class' => 'dataTable table table-bordered table-hover table-striped']) !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">بيانات الاعضاء</h3>
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
    @push("scriptjquery")
    {!! $dataTable->scripts() !!}
    @endpush

@endsection
<script type="text/javascript">
 /* if($.fn.dataTable.isDataTable('#dataTableBuilder')){
    table=$('#dataTableBuilder').DataTable();
  }
  else{
    table=$('#dataTableBuilder').DataTable({
      paging : false
    });
  }*/
  (function($){
  $('#dataTableBuilder').DataTable({
                        
                        dom :'Blfrtip',
                        
                        'buttons' : ['copy']
  });
});
</script>