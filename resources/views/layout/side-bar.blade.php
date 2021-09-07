<div class="sidebar" data-background-color="brown" data-active-color="danger">
	   
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            CT
        </a>

        <a href="" class="simple-text logo-normal">
            TRAVEL TOUR
        </a>
    </div>
    <div class="sidebar-wrapper">
        <!-- phần đầu side-bar -->
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/face-2.jpg" />
            </div>
            <div class="info">
                <a href="" class="collapsed">
                    <span>
                        {{ Session::get('nameADMIN') }}
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!------------------------------------------>


        <ul class="nav">
            <li>
                <a href="{{ route('position.index')}}">
                    <i class="ti-panel"></i>
                    <p>POSITION</p>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}">
                    <i class="ti-panel"></i>
                    <p>STAFF</p>
                </a>
            </li>

            <li>
                <a href="{{ route('customer.index') }}">
                    <i class="ti-panel"></i>
                    <p>CUSTOMER</p>
                </a>
            </li>

            <li>
                <a href="{{ route('manageTour.index') }}">
                    <i class="ti-panel"></i>
                    <p>MANAGE TOUR</p>
                </a>
            </li>
            <li>
                <a href="{{ route('imageDetail.index') }}">
                    <i class="ti-panel"></i>
                    <p>IMAGE-DETAIL TOUR</p>
                </a>
            </li>
            <li>
                <a href="{{ route('plane.index') }}">
                    <i class="ti-panel"></i>
                    <p>PLANE</p>
                </a>
            </li>
            <li>
                <a href="{{ route('hotel.index') }}">
                    <i class="ti-panel"></i>
                    <p>HOTEL</p>
                </a>
            </li>
            <li>
                <a href="{{ route('destination.index') }}">
                    <i class="ti-panel"></i>
                    <p>DESTINATION</p>
                </a>
            </li>
            <li>
                <a href="{{ route('contract.index') }}">
                    <i class="ti-panel"></i>
                    <p>CONTRACT & BILL</p>
                </a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">
                    <i class="ti-panel"></i>
                    <p>REVIEW & POST</p>
                </a>
            </li>
            <li>
                <a href="{{ route('profit.index') }}">
                    <i class="ti-panel"></i>
                    <p>PROFIT</p>
                </a>
            </li>
        </ul>
    </div>
</div>