        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('home') }}"
                                    id="topnav-dashboard" role="button">
                                    <i data-feather="home"></i><span data-key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0);"
                                    id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="file-plus"></i>
                                    <span data-key="t-apps">Penjual</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="{{ route('room-seller.index') }}" class="dropdown-item"
                                        data-key="t-calendar">Room Chat Penjual</a>
                                    <a href="{{ route('transaksi.penjual') }}" class="dropdown-item"
                                        data-key="t-chat">Transaksi Penjual</a>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0);"
                                    id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="shopping-cart"></i>
                                    <span data-key="t-apps">Pembeli</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="{{ route('room-buyer.index') }}" class="dropdown-item"
                                        data-key="t-calendar">Room Chat Pembeli</a>
                                    <a href="{{ route('transaksi.pembeli') }}" class="dropdown-item"
                                        data-key="t-chat">Transaksi Pembeli</a>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('invoice') }}"
                                    id="topnav-dashboard" role="button">
                                    <i data-feather="book"></i><span data-key="t-invoice">Invoice</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('rekening.index') }}"
                                    id="topnav-dashboard" role="button">
                                    <i data-feather="book"></i><span data-key="t-invoice">Rekening</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
