<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ $dashboard_url }}" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $loggedInUser->name }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ $dashboard_url }}" class="nav-link @if (request()->is('dashboard/home')) active @endif ">
                        <i class="nav-iconfa fa fa-tachometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @if (auth()->user()->role == 'super-admin' or auth()->user()->role =='admin' )
                

               
               
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Setup
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('dashboard.slider') }}" class="nav-link @if (request()->is('dashboard/slider*')) active @endif">
                            <i class="nav-icon fa fa-sliders"></i>
                            <p>
                                Slider
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.setting') }}" class="nav-link @if (request()->is('dashboard/setting*')) active @endif">
                            <i class="nav-icon fa fa-gears"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('dashboard.link') }}" class="nav-link @if (request()->is('dashboard/link*')) active @endif">
                            <i class="nav-icon fa fa-sliders"></i>
                            <p>
                                Important Links
                            </p>
                        </a>
                    </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            About
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('dashboard.about') }}" class="nav-link @if (request()->is('dashboard/about*')) active @endif">
                            <i class="nav-icon fa fa-sort-amount-desc"></i>
                            <p>
                                About Us
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.contributor') }}" class="nav-link @if (request()->is('dashboard/contributor*')) active @endif">
                            <i class="nav-icon fa fa-sort-amount-desc"></i>
                            <p>
                                Contributors
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.meeting') }}" class="nav-link @if (request()->is('dashboard/meeting*')) active @endif">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                Meeting
                            </p>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="{{ route('dashboard.history') }}" class="nav-link @if (request()->is('dashboard/history*')) active @endif">
                            <i class="nav-icon fa fa-sort-amount-desc"></i>
                            <p>
                                History
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.gallery') }}" class="nav-link @if (request()->is('dashboard/gallery*')) active @endif">
                            <i class="nav-icon fa fa-file-image-o"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.memorandum') }}" class="nav-link @if (request()->is('dashboard/memorandum*')) active @endif">
                            <i class="nav-icon fa fa-sort-amount-desc"></i>
                            <p>
                                Memorandum
                            </p>
                        </a>
                    </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            Members
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    
                   
                   
                    <li class="nav-item">
                        <a href="{{ route('dashboard.member') }}" class="nav-link @if (request()->is('dashboard/member*')) active @endif">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>
                                Members
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.memberdetail') }}" class="nav-link @if (request()->is('dashboard/memberdetail*')) active @endif">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>
                                Member Details
                            </p>
                        </a>
                   
                    <li class="nav-item">
                        <a href="{{ route('dashboard.charter') }}" class="nav-link @if (request()->is('dashboard/charter*')) active @endif">
                            <i class="nav-icon fa fa-sort-amount-desc"></i>
                            <p>
                                Charter Member
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.founder') }}" class="nav-link @if (request()->is('dashboard/founder*')) active @endif">
                            <i class="nav-icon fa fa-file-image-o"></i>
                            <p>
                                Founder Member
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.phf') }}" class="nav-link @if (request()->is('dashboard/phf*')) active @endif">
                            <i class="nav-icon fa fa-sort-amount-desc"></i>
                            <p>
                                PHF & Major Donor
                            </p>
                        </a>
                    </li>

                    </ul>
                </li>
               
                <li class="nav-item">
                    <a href="{{ route('dashboard.cause') }}" class="nav-link @if (request()->is('dashboard/cause*')) active @endif">
                        <i class="nav-icon fa fa-sort-amount-desc"></i>
                        <p>
                            Causes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.campaign') }}" class="nav-link @if (request()->is('dashboard/campaign*')) active @endif">
                        <i class="nav-icon fa fa-sort-amount-desc"></i>
                        <p>
                            Campaign
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.funding') }}" class="nav-link @if (request()->is('dashboard/funding*')) active @endif">
                        <i class="nav-icon fa fa-usd"></i>
                        <p>
                            Fund Raising
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-newspaper-o"></i>
                        <p>
                            News
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.news') }}" class="nav-link @if (request()->is('dashboard/news*')) active @endif">
                                <i class="nav-icon fa fa-newspaper-o"></i>
                                <p>
                                    News
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.event') }}" class="nav-link @if (request()->is('dashboard/event*')) active @endif">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    Events/Activities
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Get Involved
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.join') }}" class="nav-link @if (request()->is('dashboard/join*')) active @endif">
                                <i class="nav-icon fa fa-sort-amount-desc"></i>
                                <p>
                                    Join Procedure
                                </p>
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rotaract') }}" class="nav-link @if (request()->is('dashboard/rotaract*')) active @endif">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    Rotaract
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.interact') }}" class="nav-link @if (request()->is('dashboard/interact*')) active @endif">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    Interact
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rcc') }}" class="nav-link @if (request()->is('dashboard/rcc*')) active @endif">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    RCC
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.opportunity') }}" class="nav-link @if (request()->is('dashboard/opportunity*')) active @endif">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    Opportunity
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item">
                    <a href="{{ route('dashboard.contact') }}" class="nav-link @if (request()->is('dashboard/contact*')) active @endif">
                        <i class="nav-icon fa fa-info-circle"></i>
                        <p>
                            Messages(Contact Us)
                        </p>
                    </a>
                </li>
               
               
                <li class="nav-item">
                    <a href="{{ route('dashboard.resource') }}" class="nav-link @if (request()->is('dashboard/resource*')) active @endif">
                        <i class="nav-icon fa fa-cloud-download"></i>
                        <p>
                            Resources/Publication
                        </p>
                    </a>
                </li>
               
                @endif
               
                <li class="nav-header">Others</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Profile
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('dashboard.admin.change-password') }}" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p class="text">Change Password</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.admin.change-username') }}" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p class="text">Change Username</p>
                        </a>
                    </li> 
                    
                    @if (auth()->user()->role == 'super-admin' or auth()->user()->role =='admin' )
                    <li class="nav-item">
                        <a href="{{ route('dashboard.admin') }}" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p class="text">All Admins</p>
                        </a>
                    </li>
                    @endif

                    </ul>
                </li>
               
               
 
 
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
