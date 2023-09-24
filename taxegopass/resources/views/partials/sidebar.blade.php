<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">Menu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                        
                           <li class="nav-item">
                                <a href="{{ route('dashboard.show')}}" class="nav-link" data-key="t-analytics"> Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('agent.show') }}" class="nav-link" data-key="t-analytics"> Agent </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('avion.show') }}" class="nav-link" data-key="t-ecommerce"> Avion </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('compagnie.show') }}" class="nav-link" data-key="t-ecommerce"> Compagnie </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('paiement.show')}}" class="nav-link" data-key="t-ecommerce"> Paiement</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('passager.show') }}" class="nav-link" data-key="t-ecommerce"> Passager</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('vol.show') }}" class="nav-link" data-key="t-ecommerce"> Vol</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ti ti-layout-board"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ti ti-dots"></i> <span data-key="t-apps">Apps</span></li>

                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ti ti-calendar"></i> <span data-key="t-calendar">Calendar</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-chat.html" class="nav-link menu-link"> <i class="ti ti-messages"></i> <span data-key="t-chat">Chat</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-email.html" class="nav-link menu-link"> <i class="ti ti-mail"></i> <span data-key="t-email">Email</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-file-manager.html" class="nav-link menu-link"> <i class="ti ti-folders"></i> <span data-key="t-file-manager">File Manager</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-to-do.html" class="nav-link menu-link"> <i class="ti ti-list"></i> <span data-key="t-to-do">To Do</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-contacts.html" class="nav-link menu-link"> <i class="ti ti-address-book"></i> <span data-key="t-contacts">Contacts</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-kanbanboard.html" class="nav-link menu-link"> <i class="ti ti-subtask"></i> <span data-key="t-kanaban-board">Kanban Board</span> </a>
                </li>

                <li class="nav-item">
                    <a href="#sidebarInvoices" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class="ti ti-file-invoice"></i> <span data-key="t-invoices">Invoices</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoices">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice">Create Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ti ti-dots"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ti ti-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-signin.html" class="nav-link" role="button" data-key="t-signin"> Sign In </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signup.html" class="nav-link" role="button" data-key="t-signup"> Sign Up </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-reset.html" class="nav-link" role="button" data-key="t-password-reset">
                                    Password Reset
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-change.html" class="nav-link" role="button" data-key="t-password-create">
                                    Password Create
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-lockscreen.html" class="nav-link" role="button" data-key="t-lock-screen">
                                    Lock Screen
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-logout.html" class="nav-link" role="button" data-key="t-logout"> Logout </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-success-msg.html" class="nav-link" role="button" data-key="t-success-message"> Success Message </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-twostep.html" class="nav-link" role="button" data-key="t-two-step-verification"> Two Step Verification </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404.html" class="nav-link" data-key="t-404-error"> 404 Error </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ti ti-brand-adobe"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-profile.html" class="nav-link" data-key="t-profile"> Profile </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-profile-settings.html" class="nav-link" data-key="t-profile-setting"> Profile Settings </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-privacy-policy.html" class="nav-link" data-key="t-privacy-policy"> Privacy Policy </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-term-conditions.html" class="nav-link" data-key="t-term-conditions"> Term & Conditions </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ti ti-dots"></i> <span data-key="t-components">Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ti ti-atom"></i> <span data-key="t-bootstrap-ui-1">Bootstrap UI 1</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ti ti-atom"></i> <span data-key="t-bootstrap-ui-2">Bootstrap UI 2</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUI2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-links.html" class="nav-link" data-key="t-links">Links</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ti ti-bat"></i> <span data-key="t-advance-ui">Advance UI</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ti ti-bow"></i> <span data-key="t-widgets">Widgets</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ti ti-file-stack"></i> <span data-key="t-forms">Forms</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select.html" class="nav-link" data-key="t-form-select">Form Select</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxes-radios">Checkboxes & Radios</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers.html" class="nav-link" data-key="t-pickers">Pickers</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider">Range Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ti ti-brand-airtable"></i> <span data-key="t-tables">Tables</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ti ti-chart-donut"></i> <span data-key="t-apexcharts">Apexcharts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="charts-apex-line.html" class="nav-link" data-key="t-line">Line</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-area.html" class="nav-link" data-key="t-area">Area</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-column.html" class="nav-link" data-key="t-column">Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar">Bar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed">Mixed</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick">Candlstick</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">Boxplot</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">Bubble</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">Scatter</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">Heatmap</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">Treemap</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie">Pie</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar">Radialbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar">Radar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">Polar Area</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ti ti-triangle-square-circle"></i> <span data-key="t-icons">Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-bootstrap.html" class="nav-link" data-key="t-bootstrap">Bootstrap</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-phosphor.html" class="nav-link" data-key="t-phosphor">Phosphor</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ti ti-map"></i> <span data-key="t-maps">Maps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google.html" class="nav-link" data-key="t-google">Google</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector.html" class="nav-link" data-key="t-vector">Vector</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">Leaflet</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ti ti-brand-stackshare"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- ======================================== -->
        <!--============== Sidebar ====================-->
    </div>

    <div class="sidebar-background"></div>
</div> 
    
    
    
    
    
    