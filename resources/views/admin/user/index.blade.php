@extends('admin.layouts.layout')
@section('title')
بيانات الاعضاء
@endsection
@section('content')
  <section class="content-header">
      <h1>
       بيانات الاعضاء
      </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/user/index') }}"><i class="fa fa-home"></i> لوحة تحكم الاعضاء</a></li>    
           <li><a href="{{ url('/adminpanal/user/create') }}"><i class="fa fa-plus"></i> اضافة عضو جديد </a></li>
        
        </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">بيانات الاعضاء</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ارقم التسلسل</th>
                  <th>الاسم</th>
                  <th>الايميل(s)</th>
                  <th>تاريخ الالتحاق</th>
                  <th>الصلاحيات</th>
                  <th>التحكم</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td> {{ ($user->admin==1) ? 'Admin' : 'Member' }}</td>
                       <td> <a href="{{ url('/adminpanal/user/edit/' . $user->id) }}">&nbsp; <i class="fa fa-edit"></i></a>
                       @if($user->admin !==1)
                        <a href="{{ url('/adminpanal/user/delete/' . $user->id) }}"> <i class="fa fa-close"></i></a></td>
                    @endif
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ارقم التسلسل</th>
                  <th>الاسم</th>
                  <th>الايميل(s)</th>
                  <th>تاريخ الالتحاق</th>
                  <th>الصلاحيات</th>
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
      var lastIdx = null;

  /*$('#data thead th').each( function () {
      if($(this).index()  < 4 ){
          var classname = $(this).index() == 6  ?  'date' : 'dateslash';
          var title = $(this).html();
          $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );
      }else if($(this).index() == 4){
          $(this).html( '<select><option value="0"> عضو </option><option value="1"> مدير الموقع </option></select>' );
      }

  } );

  var table = $('#data').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ url("/adminpanel/user/data") }}',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'created_at', name: 'created_at'},
          {data: 'admin', name: 'admin'},
          {data: 'control', name: ''}
      ],
      "language": {
        
          "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
      },
      "stateSave": false,
      "responsive": true,
      "order": [[0, 'desc']],
      "pagingType": "full_numbers",
      aLengthMenu: [
          [25, 50, 100, 200, -1],
          [25, 50, 100, 200, "All"]
      ],
      iDisplayLength: 25,
      fixedHeader: true,

      "oTableTools": {
          "aButtons": [


              {
                  "sExtends": "csv",
                  "sButtonText": "ملف اكسل",
                  "sCharSet": "utf16le"
              },
              {
                  "sExtends": "copy",
                  "sButtonText": "نسخ المعلومات",
              },
              {
                  "sExtends": "print",
                  "sButtonText": "طباعة",
                  "mColumns": "visible",


              }
          ],

         // "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
      },

      "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
      ,initComplete: function ()
      {
          var r = $('#data tfoot tr');
          r.find('th').each(function(){
              $(this).css('padding', 8);
          });
          $('#data thead').append(r);
          $('#search_0').css('text-align', 'center');
      }

  });

  table.columns().eq(0).each(function(colIdx) {
      $('input', table.column(colIdx).header()).on('keyup change', function() {
          table
                  .column(colIdx)
                  .search(this.value)
                  .draw();
      });




  });



  table.columns().eq(0).each(function(colIdx) {
      $('select', table.column(colIdx).header()).on('change', function() {
          table
                  .column(colIdx)
                  .search(this.value)
                  .draw();
      });

      $('select', table.column(colIdx).header()).on('click', function(e) {
          e.stopPropagation();
      });
  });


  $('#data tbody')
          .on( 'mouseover', 'td', function () {
              var colIdx = table.cell(this).index().column;

              if ( colIdx !== lastIdx ) {
                  $( table.cells().nodes() ).removeClass( 'highlight' );
                  $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
              }
          } )
          .on( 'mouseleave', function () {
              $( table.cells().nodes() ).removeClass( 'highlight' );
          } );*/
      });
</script>
<script>

    $(function () {
      setTimeout (function () {
        $("#msg").hide(500)
      },5000);

    });
//$("#msg").hide("bind",{},500);
//"url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/118n/Arabic.json"
</script>

@endsection