 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>

                    <li><a href="{{ url('dashboard') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> 
                    @if(Auth::user()->role == 1)
                    <li><a href="{{ url('list') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">User</span></a>
                    </li>
                    @endif
                    
                </ul>     
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->