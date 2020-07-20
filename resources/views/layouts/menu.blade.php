
<li class="header">Navigatsiya bo'limlari</li>



        <li class="treeview {{ Request::is('home/yangiliklar*') ? 'active' : '' }} ">
            <a href="#">
              <i class="fa fa-newspaper-o"></i> <span>Yangiliklar</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
           
              
        <li class="{{ Request::is('home/yangiliklar/yangiliklars*') ? 'active' : '' }}">
            <a href="{{ route('yangiliklars.index') }}"><i class="fa  fa-list"></i><span>Yangiliklar ro'yxati</span></a>
        </li>
        
        <li class="{{ Request::is('home/yangiliklar/yangiliklars*') ? 'active' : '' }}">
            <a href="{{ route('yangiliklars.create') }}"><i class="fa fa-file-word-o"></i><span>Yangilik qo'shish</span></a>
        </li>
        
       

    </ul>
  </li>

  




<li class="{{ Request::is('elonlars*') ? 'active' : '' }}">
    <a href="{{ route('elonlars.index') }}"><i class="fa fa-edit"></i><span>E'lonlar</span></a>
</li>

<li class="{{ Request::is('fanlars*') ? 'active' : '' }}">
    <a href="{{ route('fanlars.index') }}"><i class="fa fa-tags"></i><span>O'qitiladigan fanlar</span></a>
</li>

<li class="{{ Request::is('gallereyas*') ? 'active' : '' }}">
    <a href="{{ route('gallereyas.index') }}"><i class="fa fa-file-image-o"></i><span>Gallereya</span></a>
</li>

<li class="{{ Request::is('ilmiyIshlars*') ? 'active' : '' }}">
    <a href="{{ route('ilmiyIshlars.index') }}"><i class="fa fa-mortar-board "></i><span>Ilmiy Ishlar</span></a>
</li>

<li class="{{ Request::is('ilmiyMaqolalars*') ? 'active' : '' }}">
    <a href="{{ route('ilmiyMaqolalars.index') }}"><i class="fa fa-file-word-o"></i><span>Ilmiy Maqolalar</span></a>
</li>
{{-- 
<li class="{{ Request::is('mavqelars*') ? 'active' : '' }}">
    <a href="{{ route('mavqelars.index') }}"><i class="fa fa-group"></i><span>Mavqelar</span></a>
</li>
 --}}
<li class="{{ Request::is('oquvAdabiyotlars*') ? 'active' : '' }}">
    <a href="{{ route('oquvAdabiyotlars.index') }}"><i class="fa fa-book"></i><span>O'quv adabiyotlar</span></a>
</li>
{{-- 
<li class="{{ Request::is('oquvTuris*') ? 'active' : '' }}">
    <a href="{{ route('oquvTuris.index') }}"><i class="fa fa-map"></i><span>O'quv Turi</span></a>
</li> --}}
{{-- 
<li class="{{ Request::is('qabulYilis*') ? 'active' : '' }}">
    <a href="{{ route('qabulYilis.index') }}"><i class="fa  fa-calendar-times-o "></i><span>Qabul yili</span></a>
</li> --}}

<li class="{{ Request::is('talabalars*') ? 'active' : '' }}">
    <a href="{{ route('talabalars.index') }}"><i class="fa fa-users"></i><span>Talabalar</span></a>
</li>
{{-- 
<li class="{{ Request::is('talabalarGuruhlaris*') ? 'active' : '' }}">
    <a href="{{ route('talabalarGuruhlaris.index') }}"><i class="fa fa-group "></i><span>Talabalar guruhlari</span></a>
</li>

<li class="{{ Request::is('oqituvchilars*') ? 'active' : '' }}">
    <a href="{{ route('oqituvchilars.index') }}"><i class="fa  fa-black-tie"></i><span>Oqituvchilars</span></a>
</li>

<li class="{{ Request::is('xamkorlars*') ? 'active' : '' }}">
    <a href="{{ route('xamkorlars.index') }}"><i class="fa fa-random"></i><span>Xamkorlar</span></a>
</li>

<li class="{{ Request::is('yonalishKodlaris*') ? 'active' : '' }}">
    <a href="{{ route('yonalishKodlaris.index') }}"><i class="fa  fa-barcode"></i><span>Yonalish kodlari</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user-plus"></i><span>Foydalanuvchilar</span></a>
</li>

 --}}
 
 




  <li class="treeview {{ Request::is('home/sozlamlar/*') ? 'active' : '' }} ">
    <a href="#">
      <i class="fa fa-table"></i> <span>Sayt sozlamlari</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
   
      
 
        <li class="{{ Request::is('home/sozlamlar/sliders*') ? 'active' : '' }}">
            <a href="{{ route('sliders.index') }}"><i class="fa fa-sliders"></i><span>Slaydlar</span></a>
        </li>
       
        <li class="{{ Request::is('home/sozlamlar/gridCards*') ? 'active' : '' }}">
            <a href="{{ route('gridCards.index') }}"><i class="fa  fa-credit-card"></i><span>Grid kartalar</span></a>
        </li>
        
        <li class="{{ Request::is('home/sozlamlar/firstbanners*') ? 'active' : '' }}">
            <a href="{{ route('firstbanners.index') }}"><i class="fa fa-photo"></i><span>Birinchi banner</span></a>
        </li>
        
        <li class="{{ Request::is('home/sozlamlar/yangilikOptions*') ? 'active' : '' }}">
            <a href="{{ route('yangilikOptions.index') }}"><i class="fa fa-puzzle-piece"></i><span>Yangilik sarlavhasi</span></a>
        </li>
        
      
        <li class="{{ Request::is('home/sozlamlar/gallereyaCategories*') ? 'active' : '' }}">
            <a href="{{ route('gallereyaCategories.index') }}"><i class="fa  fa-tasks"></i><span>Gallereya bo'limlari</span></a>
        </li>
        <li class="{{ Request::is('home/sozlamlar/yangiliklarBolimlaris*') ? 'active' : '' }}">
            <a href="{{ route('yangiliklarBolimlaris.index') }}"><i class="fa fa-folder-open"></i><span>Yangiliklar Bolimlaris</span></a>
        </li>

        <li class="{{ Request::is('home/sozlamlar/videoBanners*') ? 'active' : '' }}">
            <a href="{{ route('videoBanners.index') }}"><i class="fa fa-video-camera"></i><span>Video Banner</span></a>
        </li>
        <li class="{{ Request::is('home/sozlamlar/counterSettings*') ? 'active' : '' }}">
            <a href="{{ route('counterSettings.index') }}"><i class="fa  fa-pie-chart"></i><span>Hisoblagich banneri</span></a>
        </li>
        
        <li class="{{ Request::is('home/sozlamlar/footerSliders*') ? 'active' : '' }}">
            <a href="{{ route('footerSliders.index') }}"><i class="fa  fa-th"></i><span>Eng pastki slider</span></a>
        </li>
        
        <li class="{{ Request::is('home/sozlamlar/roles*') ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}"><i class="fa fa-user-secret"></i><span>Unvonlar</span></a>
        </li>
        
        <li class="{{ Request::is('home/sozlamlar/permissions*') ? 'active' : '' }}">
            <a href="{{ route('permissions.index') }}"><i class="fa fa-registered"></i><span>A'zolar huquqlari ro'yxati</span></a>
        </li>
        <li class="{{ Request::is('home/sozlamlar/permissionRoles*') ? 'active' : '' }}">
            <a href="{{ route('permissionRoles.index') }}"><i class="fa fa-balance-scale"></i><span>Huquqlar va Unvonlar</span></a>
        </li>

        <li class="{{ Request::is('home/sozlamlar/permissionUsers*') ? 'active' : '' }}">
            <a href="{{ route('permissionUsers.index') }}"><i class="fa  fa-check-circle"></i><span>A'zolarga huquq berish</span></a>
        </li>

        <li class="{{ Request::is('home/sozlamlar/roleUsers*') ? 'active' : '' }}">
            <a href="{{ route('roleUsers.index') }}"><i class="fa  fa-check"></i><span>A'zolarga unvon berish</span></a>
        </li>

    </ul>
  </li>










