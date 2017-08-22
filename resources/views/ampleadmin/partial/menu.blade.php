<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Menu</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            @foreach(\IAServer\Http\Controllers\IAServer\IAServerController::AgilGestionMenu() as $menu)
                @if(count($menu->submenu)>0 && $menu->root == 0)
                    @include('ampleadmin.partial.submenu',['item'=>$menu])
                @else
                    @if($menu->root == 0)
                        <li>
                            <?php
                            switch($menu->type){
                                case 'route':
                                    $enlace = route($menu->enlace);
                                    break;
                                case 'self':
                                    $enlace = $menu->enlace;
                                    break;
                                default:
                                    $enlace = "javascript:remoteLink('$menu->link')";
                                    break;
                            }
                            ?>
                            <a href="{{ $enlace }}" class="waves-effect">
                                <i class="linea-icon linea-basic {{ $menu->icono ? $menu->icono : 'fa fa-circle-o' }} fa-fw"></i>
                                <span class="hide-menu">{{ $menu->titulo }}</span>
                            </a>
                        </li>
                    @endif
                @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->
