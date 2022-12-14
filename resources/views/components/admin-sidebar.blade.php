<aside class="sidebar sidebar-default navs-rounded-all ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{route('admin')}}" class="navbar-brand">
            <!--Logo start-->
            <img src="{{asset('favicon2.png')}}" alt="" width="30" height="30">
            <!--logo End-->
            <h4 class="logo-title">Photo City</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">

                {{-- <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Home</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li> --}}

                {{-- dashboard --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin')  ? 'active' : '' }} " aria-current="page"
                        href="{{route('admin')}}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>

                {{-- calendar --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin/calendar')  ? 'active' : '' }}" aria-current="page"
                        href="{{route('admin/calendar')}}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16.8701V9.25708H21V16.9311C21 20.0701 19.0241 22.0001 15.8628 22.0001H8.12733C4.99561 22.0001 3 20.0301 3 16.8701ZM7.95938 14.4101C7.50494 14.4311 7.12953 14.0701 7.10977 13.6111C7.10977 13.1511 7.46542 12.7711 7.91987 12.7501C8.36443 12.7501 8.72997 13.1011 8.73985 13.5501C8.7596 14.0111 8.40395 14.3911 7.95938 14.4101ZM12.0198 14.4101C11.5653 14.4311 11.1899 14.0701 11.1701 13.6111C11.1701 
                    13.1511 11.5258 12.7711 11.9802 12.7501C12.4248 12.7501 12.7903 13.1011 12.8002 13.5501C12.82 14.0111 12.4643 14.3911 12.0198 14.4101ZM16.0505 18.0901C15.596 18.0801 15.2305 17.7001 15.2305 17.2401C15.2206 16.7801 15.5862 16.4011 16.0406 16.3911H16.0505C16.5148 16.3911 16.8902 16.7711 16.8902 17.2401C16.8902 17.7101 16.5148 18.0901 16.0505 18.0901ZM11.1701 17.2401C11.1899 17.7001 11.5653 18.0611 12.0198 18.0401C12.4643 18.0211 12.82 17.6411 
                    12.8002 17.1811C12.7903 16.7311 12.4248 16.3801 11.9802 16.3801C11.5258 16.4011 11.1701 16.7801 11.1701 17.2401ZM7.09989 17.2401C7.11965 17.7001 7.49506 18.0611 7.94951 18.0401C8.39407 18.0211 8.74973 17.6411 8.72997 17.1811C8.72009 16.7311 8.35456 16.3801 7.90999 16.3801C7.45554 16.4011 7.09989 16.7801 7.09989 17.2401ZM15.2404 13.6011C15.2404 13.1411 15.596 12.7711 16.0505 12.7611C16.4951 12.7611 16.8507 13.1201 16.8705 13.5611C16.8804 14.0211 
                    16.5247 14.4011 16.0801 14.4101C15.6257 14.4201 15.2503 14.0701 15.2404 13.6111V13.6011Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M3.00293 9.25699C3.01577 8.66999 3.06517 7.50499 3.15803 7.12999C3.63224 5.02099 5.24256 3.68099 7.54442 3.48999H16.4555C18.7376 3.69099 20.3677 5.03999 20.8419 7.12999C20.9338 7.49499 20.9832 8.66899 20.996 9.25699H3.00293Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M8.30465 6.59C8.73934 6.59 9.06535 6.261 9.06535 5.82V2.771C9.06535 2.33 8.73934 2 8.30465 2C7.86996 2 7.54395 2.33 7.54395 2.771V5.82C7.54395 6.261 7.86996 6.59 8.30465 6.59Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M15.6953 6.59C16.1201 6.59 16.456 6.261 16.456 5.82V2.771C16.456 2.33 16.1201 2 15.6953 2C15.2606 2 14.9346 2.33 14.9346 2.771V5.82C14.9346 6.261 15.2606 6.59 15.6953 6.59Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Calendar</span>
                    </a>

                </li>

                {{-- Bookings --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin/bookings') ? 'active' : '' }} {{ Route::is('admin/categories') ? 'active' : '' }}"
                        data-bs-toggle="collapse" href="#sidebar-bookings" role="button" aria-expanded="false"
                        aria-controls="sidebar-inventory">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                    fill="currentColor"></path>
                                <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                            </svg>
                        </i>
                        <span class="item-name">Bookings</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-bookings" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('admin/bookings')  ? 'active' : '' }}"
                                href="{{route('admin/bookings')}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">All Bookings</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('admin/reservations') ? 'active' : '' }}"
                                href="{{route('admin/reservations')}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">Reservations</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- inventory --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin/inventory') ? 'active' : '' }} {{ Route::is('admin/categories') ? 'active' : '' }}"
                        data-bs-toggle="collapse" href="#sidebar-inventory" role="button" aria-expanded="false"
                        aria-controls="sidebar-inventory">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                    fill="currentColor"></path>
                                <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                            </svg>
                        </i>
                        <span class="item-name">Inventory</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-inventory" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('admin/inventory')  ? 'active' : '' }}"
                                href="{{route('admin/inventory')}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">Item List</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('admin/categories') ? 'active' : '' }}"
                                href="{{route('admin/categories')}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- users --}}
                <li class="nav-item">
                    <a class="nav-link  {{ Route::is('admin/employees') ? 'active' : '' }} {{ Route::is('admin/clients') ? 'active' : '' }}"
                        data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false"
                        aria-controls="sidebar-user">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Users</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('admin/employees')  ? 'active' : '' }}"
                                href="{{route('admin/employees')}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">Employees</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('admin/clients')  ? 'active' : '' }}"
                                href="{{route('admin/clients')}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> U </i>
                                <span class="item-name">Clients</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- gallery --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin/gallery')  ? 'active' : '' }}" aria-current="page"
                        href="{{route('admin/gallery')}}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.63751 3.39549C5.06051 3.39549 3.39551 5.16249 3.39551 7.88849V16.1025C3.39551 16.8675 3.53751 17.5505 3.78051 18.1415C3.791 18.129 4.01986 17.8501 4.3184 17.4863C4.90188 16.7752 5.75156 15.7398 5.75751 15.7345C6.44951 14.9445 7.74851 13.7665 9.45351 14.4795C9.82712 14.6344 10.1592 14.8466 10.4649 15.042C10.4947 15.061 10.5242 15.0799 10.5535 15.0985C11.1265 15.4815 11.4635 15.6615 11.8135 15.6315C11.9585 15.6115 12.0945 15.5685 12.2235 15.4885C12.7101 15.1885 13.9718 13.4009 14.3496 12.8656C14.405 12.7871 14.4414 12.7355 14.4535 12.7195C15.5435 11.2995 17.2235 
                          10.9195 18.6235 11.7595C18.8115 11.8715 20.1585 12.8125 20.6045 13.1905V7.88849C20.6045 5.16249 18.9395 3.39549 16.3535 3.39549H7.63751ZM16.3535 2.00049C19.7305 2.00049 21.9995 4.36249 21.9995 7.88849V16.1025C21.9995 16.1912 21.9902 16.2743 21.9809 16.3574C21.9744 16.4159 21.9678 16.4742 21.9645 16.5345C21.9624 16.5709 21.9613 16.6073 21.9603 16.6438C21.9589 16.6923 21.9575 16.7409 21.9535 16.7895C21.9515 16.8085 21.9478 16.8267 21.944 16.845C21.9403 16.8632 21.9365 16.8815 21.9345 16.9005C21.9015 17.2145 21.8505 17.5145 21.7795 17.8055C21.7627 17.8782 21.7433 17.9483 21.7238 18.0191L21.7195 18.0345C21.6395 18.3165 
                          21.5455 18.5855 21.4325 18.8425C21.4127 18.8857 21.3918 18.9278 21.3709 18.9699C21.357 18.998 21.3431 19.0261 21.3295 19.0545C21.2075 19.2995 21.0755 19.5345 20.9225 19.7525C20.8942 19.7928 20.8641 19.8307 20.8339 19.8685C20.814 19.8936 20.794 19.9186 20.7745 19.9445C20.6155 20.1505 20.4495 20.3475 20.2615 20.5265C20.224 20.5622 20.1834 20.5948 20.1428 20.6275C20.1175 20.6479 20.0921 20.6683 20.0675 20.6895C19.8745 20.8555 19.6775 21.0145 19.4605 21.1505C19.4132 21.1802 19.3628 21.2052 19.3127 21.2301C19.2803 21.2462 19.2479 21.2622 19.2165 21.2795C18.9955 21.4015 18.7725 21.5205 18.5295 21.6125C18.4711 21.6347 
                          18.4088 21.6508 18.3465 21.6669C18.3021 21.6783 18.2577 21.6898 18.2145 21.7035C18.1929 21.7102 18.1713 21.7169 18.1497 21.7236C17.9326 21.7912 17.7162 21.8585 17.4825 21.8985C17.3471 21.9222 17.2034 21.9313 17.0596 21.9405C16.9974 21.9444 16.9351 21.9484 16.8735 21.9535C16.8073 21.9584 16.7423 21.9664 16.6773 21.9744C16.5716 21.9874 16.4656 22.0005 16.3535 22.0005H7.63751C7.26151 22.0005 6.90251 21.9625 6.55551 21.9055C6.54251 21.9035 6.53051 21.9015 6.51851 21.8995C5.16551 21.6665 4.04251 21.0135 3.25551 20.0285C3.25005 20.0285 3.2479 20.0248 3.24504 20.0199C3.24319 20.0167 3.24105 20.013 3.23751 20.0095C2.44651 
                          19.0135 1.99951 17.6745 1.99951 16.1025V7.88849C1.99951 4.36249 4.27051 2.00049 7.63751 2.00049H16.3535ZM11.0001 8.51505C11.0001 9.87 9.86639 11.0001 8.50496 11.0001C7.30825 11.0001 6.2879 10.1257 6.05922 8.99372C6.02143 8.82387 6.00011 8.64919 6.00011 8.46872C6.00011 7.10412 7.10864 6.00009 8.47879 6.00009C9.17647 6.00009 9.80825 6.29347 10.2608 6.76152C10.7152 7.21317 11.0001 7.83564 11.0001 8.51505Z"
                                    fill="currentColor"></path>
                            </svg>

                        </i>
                        <span>Gallery</span>
                    </a>
                </li>

                {{-- branches --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin/branches')  ? 'active' : '' }}" aria-current="page"
                        href="{{route('admin/branches')}}">
                        <i class="icon">
                            <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.9 2H15.07C17.78 2 19.97 3.07 20 5.79V20.97C20 21.14 19.96 21.31 19.88 21.46C19.75 21.7 19.53 21.88 19.26 21.96C19 22.04 18.71 22 18.47 21.86L11.99 18.62L5.5 21.86C5.351 21.939 5.18 21.99 5.01 21.99C4.45 21.99 4 21.53 4 20.97V5.79C4 3.07 6.2 2 8.9 2ZM8.22 9.62H15.75C16.18 9.62 16.53 9.269 16.53 8.83C16.53 8.39 16.18 8.04 15.75 8.04H8.22C7.79 8.04 7.44 8.39 7.44 8.83C7.44 9.269 7.79 9.62 8.22 9.62Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span>Branches</span>
                    </a>
                </li>

                {{-- logs --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin/logs')  ? 'active' : '' }}" aria-current="page"
                        href="{{route('admin/logs')}}">
                        <i class="icon">
                            <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.3764 20.0279L18.1628 8.66544C18.6403 8.0527 18.8101 7.3443 18.6509 6.62299C18.513 5.96726 18.1097 5.34377 17.5049 4.87078L16.0299 3.69906C14.7459 2.67784 13.1541 2.78534 12.2415 3.95706L11.2546 5.23735C11.1273 5.39752 11.1591 5.63401 11.3183 5.76301C11.3183 5.76301 13.812 7.76246 13.8651 7.80546C14.0349 7.96671 14.1622 8.1817 14.1941 8.43969C14.2471 8.94493 13.8969 9.41792 13.377 9.48242C13.1329 9.51467 12.8994 9.43942 12.7297 9.29967L10.1086 7.21422C9.98126 7.11855 9.79025 7.13898 9.68413 7.26797L3.45514 15.3303C3.0519 15.8355 2.91395 16.4912 3.0519 17.1255L3.84777 20.5761C3.89021 20.7589 4.04939 20.8879 4.24039 20.8879L7.74222 20.8449C8.37891 20.8341 8.97316 20.5439 9.3764 20.0279ZM14.2797 18.9533H19.9898C20.5469 18.9533 21 19.4123 21 19.9766C21 20.5421 20.5469 21 19.9898 21H14.2797C13.7226 21 13.2695 20.5421 13.2695 19.9766C13.2695 19.4123 13.7226 18.9533 14.2797 18.9533Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span>Logs</span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>