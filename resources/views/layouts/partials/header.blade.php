<header>
    <div class="container">
        <div class="header-data">
            <div class="logo" style="padding-bottom:5px;">
                <a href="#" title="">
                    <img src="{{asset('mosaconnect/images/logo.png')}}" width=40 height=40 alt=""></a>
            </div>
            <!--logo end-->
            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>
            <!--search-bar end-->
            <nav>
                <ul>
                    <li>
                        <a href="index.html" title="">
                            <span>
                                <i class="fa fa-home" style="font-size:16px" aria-hidden="true"></i>
                            </span>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="projects.html" title="">
                            <span>
                                <i class="fa fa-life-ring" style="font-size:16px" aria-hidden="true"></i>
                            </span>
                            Komunitas
                        </a>

                    </li>

                    <li>
                        <a href="jobs.html" title="">
                            <span>
                                <i class="fa fa-newspaper-o" style="font-size:16px" aria-hidden="true"></i>
                            </span>
                            Loker
                        </a>
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span>
                                <i class="fa fa-inbox" style="font-size:16px" aria-hidden="true"></i>
                            </span>
                            Pesan
                        </a>

                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span>
                                <i class="fa fa-bell" style="font-size:16px" aria-hidden="true"></i>
                            </span>
                            Notifikasi
                        </a>
                        <!--notification-box end-->
                    </li>
                </ul>
            </nav>
            <!--menu-btn end-->
            <div class="user-account">
                <div class="user-info">
                    <ul>
                        <li>
                            @if(auth()->user()->avatar)
                            <img src="{{auth()->user()->avatar}}" alt="" width="32" height="32" style="vertical-align: middle; margin-right: 8px;">
                            @endif

                        </li>

                        </style>
                        <li>

                            <div class="dropdown">
                                <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php
                                    $arr1 = explode(' ', trim(Auth::user()->name));
                                    echo $arr1[0]; ?>
                                </a>
                                <span class="caret"></span>
                                <ul class="dropdown-menu" style="background-color:#1DA1F2;">
                                    <li> 
                                        <a class="dropdown-item" href="">
                                            <span>
                                                <i class="fa fa-star" style="font-size:16px" aria-hidden="true"></i>
                                            </span>
                                            Profile
                                        </a>
                                    </li><br>
                                    <li>
                                        <a class="dropdown-item" href="">
                                            <span>
                                                <i class="fa fa-sign-out" style="font-size:16px" aria-hidden="true"></i>
                                            </span>
                                            Logout</a>
                                    </li>


                                </ul>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>