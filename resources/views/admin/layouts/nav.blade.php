<li class="active treeview">
  <a href="{{ url('/adminpanal') }}">
    <i class="fa fa-dashboard"></i> <span>لوحة التحكم</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
</li>

  <li class="active treeview">
  <a href="{{ url('/adminpanal/user/index') }}">
    <i class="fa fa-user"></i> <span>الاعضاء</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
   <ul class="treeview-menu">
    <li><a href="{{ url('/adminpanal/user/index') }}"><i class="fa fa-user"></i> كل الاعضاء</a></li>
     <li class="active"><a href="{{ url('/adminpanal/user/create') }}"><i class="fa fa-plus"></i> اضف عضو جديد</a></li>
  </ul>
</li>
<li class="active treeview">
  <a href="{{ url('/adminpanal/bu/index') }}">
    <i class="fa fa-building"></i> <span>العقارات</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
   <ul class="treeview-menu">
   <li class="active"><a href="{{ url('/adminpanal/bu/index') }}"><i class="fa fa-building"></i>العقارات</a></li>
    <li class="active"><a href="{{ url('/adminpanal/bu/create') }}"><i class="fa fa-plus"></i> اضف عقار جديد</a></li>

    
  </ul>
</li>
<li class="active treeview">
  <a href="{{ url('/adminpanal/setting/index') }}">
    <i class="fa fa-cog"></i> <span>الاعددات</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
   <ul class="treeview-menu">
   <li class="active"><a href="{{ url('/adminpanal/setting/index') }}"><i class="fa fa-cog"></i>الاعددات</a></li>
    <li class="active"><a href="{{ url('/adminpanal/setting/create') }}"><i class="fa fa-plus"></i> اضف اعددات الموقع</a></li>

    
  </ul>
</li>
<li class="active treeview">
  <a href="{{ url('/adminpanal/setting/index') }}">
    <i class="fa fa-envelope-o"></i> <span>الرسائل</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
   <ul class="treeview-menu">
   <li class="active"><a href="{{ url('/adminpanal/message/index') }}"><i class="fa fa-envelope-o"></i>االرسائل</a></li>
    <li class="active"><a href="{{ url('/adminpanal/message/create') }}"><i class="fa fa-plus"></i> اضف رسالة</a></li>

    
  </ul>
</li>