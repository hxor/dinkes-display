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



                <li class="text-muted menu-title">More</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span></a>
                            <ul style="">
                                <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
