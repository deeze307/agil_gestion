<?php
$user = null;
try
{
    if(Auth::check())
    {
        $user = Auth::user();
    }
    else
    {
        return redirect('agilgestion.login');
    }
}
catch (Exception $ex)
{
}
?>
<ul class="nav navbar-top-links navbar-right pull-right">
      <li class="dropdown">
          <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
            {!! AGimg('ampleadmin/img/user.png','user-img') !!}
          </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
              <li>
                  <div class="dw-user-box">
                  <div class="u-img">
                  {!! AGimg('ampleadmin/img/users/{{$user->profile->avatar}}','user') !!}
                  </div>
                      <div class="u-text">
                          <h4>
                              @if ($user->hasProfile())
                                  {{ $user->profile->fullname() }}
                              @else
                                  {{ $user->name }}
                              @endif
                          </h4>
                          <p class="text-muted">{{$user->profile->email}}</p>
                      </div>
                  </div>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>
              <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
              @if(isAdmin())
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="ti-settings"></i> Configuración de Cuenta</a></li>
              @endif
              <li role="separator" class="divider"></li>
              <li><a href="{{route('iaserver.logout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
          <!-- /.dropdown-user -->
      </li>
  </ul>
