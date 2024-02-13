<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation">
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
                </span>
            </button>
        </div>
        <a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3">
                <span class="font-sans-serif">DANUS</span>
                <span class="text-secondary">admin</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('DashboardAdmin') }}" role="button" aria-expanded="false"
                        aria-controls="dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="fa-solid fa-house"></i>
                            </span>
                            <span class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Database</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider"/>
                        </div>
                    </div>
                    <a class="nav-link dropdown-indicator" href="#database" data-bs-toggle="collapse" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="fa-solid fa-box"></i>
                            </span>
                            <span class="nav-link-text ps-1">Tabel</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="database">
                        <li class="nav-item">
                            <a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text ps-1">Tabel 1</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a class="nav-link" href="app/chat.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-comments"></span>
                            </span>
                            <span class="nav-link-text ps-1">Chat</span>
                        </div>
                    </a>
                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Data Statistic
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="pages/starter.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                            <span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
