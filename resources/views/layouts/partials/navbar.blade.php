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
                                    <i data-feather="grid"></i><span data-key="t-apps">Apps</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="{{ route('chat') }}" class="dropdown-item" data-key="t-chat">Chat</a>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-invoice" role="button">
                                            <span data-key="t-invoices">Invoices</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                            <a href="apps-invoices-list.html" class="dropdown-item"
                                                data-key="t-invoice-list">Invoice List</a>
                                            <a href="apps-invoices-detail.html" class="dropdown-item"
                                                data-key="t-invoice-detail">Invoice Detail</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-contact" role="button">
                                            <span data-key="t-contacts">Contacts</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                            <a href="apps-contacts-grid.html" class="dropdown-item"
                                                data-key="t-user-grid">User Grid</a>
                                            <a href="apps-contacts-list.html" class="dropdown-item"
                                                data-key="t-user-list">User List</a>
                                            <a href="apps-contacts-profile.html" class="dropdown-item"
                                                data-key="t-profile">Profile</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle d-flex justify-content-between align-items-center"
                                            href="#" id="topnav-contact" role="button">
                                            <span data-key="t-contacts" class="">Blog</span>
                                            <span class="badge bg-danger-subtle text-danger">New</span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                            <a href="apps-blog-grid.html" class="dropdown-item"
                                                data-key="t-blog-grid">Blog Grid</a>
                                            <a href="apps-blog-list.html" class="dropdown-item"
                                                data-key="t-blog-list">Blog List</a>
                                            <a href="apps-blog-detail.html" class="dropdown-item"
                                                data-key="t-blog-details">Blog Details</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement"
                                    role="button">
                                    <i data-feather="briefcase"></i>
                                    <span data-key="t-elements">Elements</span>
                                    <div class="arrow-down"></div>
                                </a>

                                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                    aria-labelledby="topnav-uielement">
                                    <div class="ps-2 p-lg-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div>
                                                    <div class="menu-title">Elements</div>
                                                    <div class="row g-0">
                                                        <div class="col-lg-5">
                                                            <div>
                                                                <a href="ui-alerts.html" class="dropdown-item"
                                                                    data-key="t-alerts">Alerts</a>
                                                                <a href="ui-buttons.html" class="dropdown-item"
                                                                    data-key="t-buttons">Buttons</a>
                                                                <a href="ui-cards.html" class="dropdown-item"
                                                                    data-key="t-cards">Cards</a>
                                                                <a href="ui-carousel.html" class="dropdown-item"
                                                                    data-key="t-carousel">Carousel</a>
                                                                <a href="ui-dropdowns.html" class="dropdown-item"
                                                                    data-key="t-dropdowns">Dropdowns</a>
                                                                <a href="ui-grid.html" class="dropdown-item"
                                                                    data-key="t-grid">Grid</a>
                                                                <a href="ui-images.html" class="dropdown-item"
                                                                    data-key="t-images">Images</a>
                                                                <a href="ui-modals.html" class="dropdown-item"
                                                                    data-key="t-modals">Modals</a>
                                                                <a href="ui-offcanvas.html" class="dropdown-item"
                                                                    data-key="t-offcanvas">Offcanvas</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div>
                                                                <a href="ui-progressbars.html" class="dropdown-item"
                                                                    data-key="t-progress-bars">Progress Bars</a>
                                                                <a href="ui-placeholders.html" class="dropdown-item"
                                                                    data-key="t-progress-bars">Placeholders</a>
                                                                <a href="ui-tabs-accordions.html" class="dropdown-item"
                                                                    data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                                <a href="ui-typography.html" class="dropdown-item"
                                                                    data-key="t-typography">Typography</a>
                                                                <a href="ui-toasts.html" class="dropdown-item"
                                                                    data-key="t-toasts">Toasts</a>
                                                                <a href="ui-video.html" class="dropdown-item"
                                                                    data-key="t-video">Video</a>
                                                                <a href="ui-general.html" class="dropdown-item"
                                                                    data-key="t-general">General</a>
                                                                <a href="ui-colors.html" class="dropdown-item"
                                                                    data-key="t-colors">Colors</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div>
                                                    <div class="menu-title">Extended</div>
                                                    <div>
                                                        <a href="extended-lightbox.html" class="dropdown-item"
                                                            data-key="t-lightbox">Lightbox</a>
                                                        <a href="extended-rangeslider.html" class="dropdown-item"
                                                            data-key="t-range-slider">Range Slider</a>
                                                        <a href="extended-sweet-alert.html" class="dropdown-item"
                                                            data-key="t-sweet-alert">SweetAlert 2</a>
                                                        <a href="extended-session-timeout.html" class="dropdown-item"
                                                            data-key="t-session-timeout">Session Timeout</a>
                                                        <a href="extended-rating.html" class="dropdown-item"
                                                            data-key="t-rating">Rating</a>
                                                        <a href="extended-notifications.html" class="dropdown-item"
                                                            data-key="t-notifications">Notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                    role="button">
                                    <i data-feather="box"></i><span data-key="t-components">Components</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-form" role="button">
                                            <span data-key="t-forms">Forms</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="form-elements.html" class="dropdown-item"
                                                data-key="t-form-elements">Basic Elements</a>
                                            <a href="form-validation.html" class="dropdown-item"
                                                data-key="t-form-validation">Validation</a>
                                            <a href="form-advanced.html" class="dropdown-item"
                                                data-key="t-form-advanced">Advanced Plugins</a>
                                            <a href="form-editors.html" class="dropdown-item"
                                                data-key="t-form-editors">Editors</a>
                                            <a href="form-uploads.html" class="dropdown-item"
                                                data-key="t-form-upload">File Upload</a>
                                            <a href="form-wizard.html" class="dropdown-item"
                                                data-key="t-form-wizard">Wizard</a>
                                            <a href="form-mask.html" class="dropdown-item"
                                                data-key="t-form-mask">Mask</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-table" role="button">
                                            <span data-key="t-tables">Tables</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href="tables-basic.html" class="dropdown-item"
                                                data-key="t-basic-tables">Bootstrap Basic</a>
                                            <a href="tables-datatable.html" class="dropdown-item"
                                                data-key="t-data-tables">Data Tables</a>
                                            <a href="tables-responsive.html" class="dropdown-item"
                                                data-key="t-responsive-table">Responsive</a>
                                            <a href="tables-editable.html" class="dropdown-item"
                                                data-key="t-editable-table">Editable</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-charts" role="button">
                                            <span data-key="t-charts">Charts</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                            <a href="charts-apex.html" class="dropdown-item"
                                                data-key="t-apex-charts">Apex charts</a>
                                            <a href="charts-echart.html" class="dropdown-item"
                                                data-key="t-e-charts">E charts</a>
                                            <a href="charts-chartjs.html" class="dropdown-item"
                                                data-key="t-chartjs-charts">Chartjs</a>
                                            <a href="charts-knob.html" class="dropdown-item"
                                                data-key="t-knob-charts">Jquery Knob</a>
                                            <a href="charts-sparkline.html" class="dropdown-item"
                                                data-key="t-sparkline-charts">Sparkline</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-icons" role="button">
                                            <span data-key="t-icons">Icons</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                            <a href="icons-boxicons.html" class="dropdown-item"
                                                data-key="t-boxicons">Boxicons</a>
                                            <a href="icons-materialdesign.html" class="dropdown-item"
                                                data-key="t-material-design">Material Design</a>
                                            <a href="icons-dripicons.html" class="dropdown-item"
                                                data-key="t-dripicons">Dripicons</a>
                                            <a href="icons-fontawesome.html" class="dropdown-item"
                                                data-key="t-font-awesome">Font Awesome 5</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-map" role="button">
                                            <span data-key="t-maps">Maps</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-map">
                                            <a href="maps-google.html" class="dropdown-item"
                                                data-key="t-g-maps">Google</a>
                                            <a href="maps-vector.html" class="dropdown-item"
                                                data-key="t-v-maps">Vector</a>
                                            <a href="maps-leaflet.html" class="dropdown-item"
                                                data-key="t-l-maps">Leaflet</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more"
                                    role="button">
                                    <i data-feather="file-text"></i><span data-key="t-extra-pages">Extra Pages</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-auth" role="button">
                                            <span data-key="t-authentication">Authentication</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="auth-login.html" class="dropdown-item"
                                                data-key="t-login">Login</a>
                                            <a href="auth-register.html" class="dropdown-item"
                                                data-key="t-register">Register</a>
                                            <a href="auth-recoverpw.html" class="dropdown-item"
                                                data-key="t-recover-password">Recover Password</a>
                                            <a href="auth-lock-screen.html" class="dropdown-item"
                                                data-key="t-lock-screen">Lock Screen</a>
                                            <a href="auth-logout.html" class="dropdown-item" data-key="t-logout">Log
                                                Out</a>
                                            <a href="auth-confirm-mail.html" class="dropdown-item"
                                                data-key="t-confirm-mail">Confirm Mail</a>
                                            <a href="auth-email-verification.html" class="dropdown-item"
                                                data-key="t-email-verification">Email verification</a>
                                            <a href="auth-two-step-verification.html" class="dropdown-item"
                                                data-key="t-two-step-verification">Two step verification</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-utility" role="button">
                                            <span data-key="t-utility">Utility</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                            <a href="pages-starter.html" class="dropdown-item"
                                                data-key="t-starter-page">Starter Page</a>
                                            <a href="pages-maintenance.html" class="dropdown-item"
                                                data-key="t-maintenance">Maintenance</a>
                                            <a href="pages-comingsoon.html" class="dropdown-item"
                                                data-key="t-coming-soon">Coming Soon</a>
                                            <a href="pages-timeline.html" class="dropdown-item"
                                                data-key="t-timeline">Timeline</a>
                                            <a href="pages-faqs.html" class="dropdown-item"
                                                data-key="t-faqs">FAQs</a>
                                            <a href="pages-pricing.html" class="dropdown-item"
                                                data-key="t-pricing">Pricing</a>
                                            <a href="pages-404.html" class="dropdown-item"
                                                data-key="t-error-404">Error 404</a>
                                            <a href="pages-500.html" class="dropdown-item"
                                                data-key="t-error-500">Error 500</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html"
                                    role="button">
                                    <i data-feather="layout"></i><span data-key="t-horizontal">Horizontal</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
