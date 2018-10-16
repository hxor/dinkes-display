<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li class="">
                    <a href="{{ route('home') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>

                    <li class="">
                        <a href="{{ route('user.schedule.index') }}" class="waves-effect"><i class="ti-bookmark-alt"></i> <span> Jadwal Kegiatan </span></a>
                    </li>

                    <li class="">
                        <a href="{{ route('user.playlist.index') }}" class="waves-effect"><i class="ti-control-eject"></i> <span> Video Display </span></a>
                    </li>

                    <li class="">
                        <a href="{{ route('user.runtext.index') }}" class="waves-effect"><i class="ti-info-alt"></i> <span> Running Text </span></a>
                    </li>

                @if (Auth::user()->roles->role == 'admin')
                    <li class="">
                        <a href="{{ route('admin.graha.index') }}" class="waves-effect"><i class="ti-harddrives"></i> <span> Graha </span></a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.user.index') }}" class="waves-effect"><i class="ti-user"></i> <span> Users </span></a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.setting.index') }}" class="waves-effect"><i class="ti-settings"></i> <span> Settings </span></a>
                    </li>
                @endif

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
