
<!-- @if(auth()->user()->can('aprobar programacion') || auth()->user()->can('generar programacion'))
<li class="nav-item {{ Request::is('programacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programacions.index') }}">
        <i class="nav-icon fa fa-clock"></i>
        <span>@lang('models/programacions.plural')</span>
    </a>
</li>
@endif -->
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/products.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('movements*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('movements.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/productMovements.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('movements*') ? 'active' : '' }}">
    <a class="nav-link" href="/download-movements">
        <i class="nav-icon icon-cursor"></i>
        <span>Descargar Documentos</span>
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#settings">
        <i class="nav-icon icon-arrow-down"></i>
        <span>Configuracion</span>
    </a>
</li>
@hasanyrole('admin')
<div class="collapse multi-collapse" id="settings" style="background-color: #57626b">
    <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
            <i class="nav-icon fas fa-users-cog"></i>
            <span>Roles</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link" href="{!! route('users.index') !!}">
            <i class="nav-icon fa fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
</div>
@endhasanyrole



