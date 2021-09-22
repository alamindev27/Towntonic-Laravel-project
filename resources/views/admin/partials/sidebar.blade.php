<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.home-info.index' ? 'active' : '' }}"
                href="{{ route('admin.home-info.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Home Info</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.work-permit.create' ? 'active' : '' }}"
                href="{{ route('admin.work-permit.create') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Work Permit Information</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.work-permit.index' ? 'active' : '' }}"
                href="{{ route('admin.work-permit.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Work Permit List</span>
            </a>
        </li>
       
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Visa Information</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.visa-ins.index' ? 'active' : '' }}" href="{{ route('admin.visa-ins.index') }}"><i class="icon fa fa-circle-o"></i> Visa Instruction</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.visa-info.index' ? 'active' : '' }}" href="{{ route('admin.visa-info.index') }}"><i class="icon fa fa-circle-o"></i> Visa Information</a>
            </li>
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.study-taiwan.index' ? 'active' : '' }}" href="{{ route('admin.study-taiwan.index') }}"><i class="icon fa fa-circle-o"></i> Study in Taiwan</a>
            </li>
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.scholar-guide.index' ? 'active' : '' }}" href="{{ route('admin.scholar-guide.index') }}"><i class="icon fa fa-circle-o"></i> Scholarship Guidelines</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.scholar-ins.index' ? 'active' : '' }}" href="{{ route('admin.scholar-ins.index') }}"><i class="icon fa fa-circle-o"></i> Scholarship Instruction</a>
            </li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">About Taiwan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.abouttaiwan.index' ? 'active' : '' }}" href="{{ route('admin.abouttaiwan.index') }}"><i class="icon fa fa-circle-o"></i> About Taiwan</a>
            </li>
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.government.index' ? 'active' : '' }}" href="{{ route('admin.government.index') }}"><i class="icon fa fa-circle-o"></i> Government</a>
            </li>
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.education.index' ? 'active' : '' }}" href="{{ route('admin.education.index') }}"><i class="icon fa fa-circle-o"></i> Education</a>
            </li>
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.transportation.index' ? 'active' : '' }}" href="{{ route('admin.transportation.index') }}"><i class="icon fa fa-circle-o"></i> Transportation</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.people.index' ? 'active' : '' }}" href="{{ route('admin.people.index') }}"><i class="icon fa fa-circle-o"></i> People and Language</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.sports.index' ? 'active' : '' }}" href="{{ route('admin.sports.index') }}"><i class="icon fa fa-circle-o"></i> Sports</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.society.index' ? 'active' : '' }}" href="{{ route('admin.society.index') }}"><i class="icon fa fa-circle-o"></i> Society</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.science.index' ? 'active' : '' }}" href="{{ route('admin.science.index') }}"><i class="icon fa fa-circle-o"></i> Science and Technology</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.arts.index' ? 'active' : '' }}" href="{{ route('admin.arts.index') }}"><i class="icon fa fa-circle-o"></i> Arts and Culture</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.travel.index' ? 'active' : '' }}" href="{{ route('admin.travel.index') }}"><i class="icon fa fa-circle-o"></i> Travel and Tourism</a>
            </li>

            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.history.index' ? 'active' : '' }}" href="{{ route('admin.history.index') }}"><i class="icon fa fa-circle-o"></i> History and Politics</a>
            </li>
            <li>
                <a class="treeview-item {{ Route::currentRouteName() == 'admin.trade.index' ? 'active' : '' }}" href="{{ route('admin.trade.index') }}"><i class="icon fa fa-circle-o"></i> Trade and Economy</a>
            </li>
          </ul>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.useful-links.index' ? 'active' : '' }}"
                href="{{ route('admin.useful-links.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Useful Links</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.country.index' ? 'active' : '' }}"
                href="{{ route('admin.country.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Country</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
    </ul>
</aside>