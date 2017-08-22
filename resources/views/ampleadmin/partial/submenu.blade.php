@if(count($item->submenu)>0)
        <!-- SUBMENU -->
<li class="treeview">
    <a href="javascript:;" class="waves-effect">
        <i class="linea-icon linea-basic {{ $item->icono  }} fa-fw"></i>
        <span class="hide-menu">{{ $item->titulo }}</span>
        {{--<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>--}}
        <span class="fa arrow"></span>
    </a>
    <ul class="treeview-menu">
        @foreach($item->submenu as $sub)
            @include('ampleadmin.partial.submenu',['item'=>$sub])
        @endforeach
    </ul>
</li>
<!-- END SUBMENU -->
@else
    <li>
        <a href="{{ ($item->type=='route') ? route($item->enlace): "javascript:remoteLink('".$item->link."')" }}" class="waves-effect">
            <i class="linea-icon linea-basic {{ $item->icono }} fa-fw"></i>
            <span class="hide-menu">{{ $item->titulo }}</span>
        </a>
    </li>
@endif
