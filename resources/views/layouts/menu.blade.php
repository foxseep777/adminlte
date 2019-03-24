
<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{!! route('companies.index') !!}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>



<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="/"><i class="fa fa-edit"></i><span>Main Page</span></a>
</li>

