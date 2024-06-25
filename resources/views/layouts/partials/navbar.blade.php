        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('home') }}" id="topnav-dashboard"
                                    role="button">
                                    <i data-feather="home"></i><span data-key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                    role="button">
                                    <i data-feather="arrow-up"></i><span data-key="t-components">Penjual</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="{{ route('room') }}" class="dropdown-item" data-key="t-forms">Chat</a>

                                    <a href="{{ route('invoice') }}" class="dropdown-item"
                                    data-key="t-tables">Transaksi List</a>
                                </div>
                            </li>

                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                    role="button">
                                    <i data-feather="arrow-down"></i><span data-key="t-extra-pages">Pembeli</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="{{ route('room') }}" class="dropdown-item" data-key="t-authentication">Chat</a>

                                    <a href="{{ route('invoice') }}" class="dropdown-item"
                                    data-key="t-utility">Transaksi List</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                    role="button">
                                    <i data-feather="briefcase"></i><span data-key="t-popo">Transaksi</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="{{ route('invoice') }}" class="dropdown-item" data-key="tss">Invoice</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
