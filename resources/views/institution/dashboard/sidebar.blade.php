<div class="list-group panel">
    
    {{--  --}}
    <div class="separed_section_menu">
        <span>Inicio</span>
    </div>
    <a href="{{route('institution.dashboard')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'home') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-dashboard"></i> 
        <span class="hidden-sm-down">Dashboard</span>
    </a>

    {{--  --}}
    <div class="separed_section_menu">
        <span>Institución</span>
    </div>
    <a href="{{route('headquarter.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'headquarter') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-institution"></i> 
        <span class="hidden-sm-down">Sedes</span>
    </a>
    
    {{--  --}}
    <a href="{{route('role.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'roles') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-user"></i> 
        <span class="hidden-sm-down">Roles</span>
    </a>

    {{--  --}}
    <a href="{{route('employee.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'employee') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-user"></i> 
        <span class="hidden-sm-down">Funcionarios</span>
    </a>

    {{--  --}}
    <a href="{{route('group.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'groups') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-users"></i> 
        <span class="hidden-sm-down">Grupos</span>
    </a>

    {{--  --}}
    <a href="{{route('file.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'files') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-file"></i> 
        <span class="hidden-sm-down">Archivos</span>
    </a>
    

    {{--  --}}
    <div class="separed_section_menu">
        <span>Página</span>
    </div>
    <a href="{{route('post.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'posts') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-file-text"></i> 
        <span class="hidden-sm-down">Entradas</span>
    </a>

    {{--  --}}
    <a href="{{route('page.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'pages') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-files-o"></i> 
        <span class="hidden-sm-down">Paginas</span>
    </a>

    {{--  --}}
    <a href="{{route('category.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'categories') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-tags"></i> 
        <span class="hidden-sm-down">Categorias</span>
    </a>

    {{--  --}}
    <div class="separed_section_menu">
        <span>Ajustes</span>
    </div>
    {{-- <a href="#" class="item-sidebar collapsed {{($item['item_sidebar'] == 'appearance') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-paint-brush"></i> 
        <span class="hidden-sm-down">Personalizacion</span>
    </a> --}}
    
    <a href="#menu1" class="item-sidebar collapsed {{($item['item_sidebar'] == 'appearance') ? 'active' : ''}}" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
        <i class="fa fa-paint-brush"></i> 
        <span class="hidden-sm-down">Personalizacion</span> 
    </a>
        <div class="collapse submenu" id="menu1">
            <a href="#" class="item-sidebar" data-parent="#menu1">Menu</a>
            <a href="#" class="item-sidebar" data-parent="#menu1">Menu</a>
        </div> 

    {{-- Settings  --}}
    <a href="{{route('setting.index')}}" class="item-sidebar collapsed {{($item['item_sidebar'] == 'setting') ? 'active' : ''}}" data-parent="#sidebar">
        <i class="fa fa-cog"></i> 
        <span class="hidden-sm-down">Configuracion</span>
    </a>
</div>