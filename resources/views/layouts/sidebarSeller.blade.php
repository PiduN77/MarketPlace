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
                <span class="text-secondary">seller</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link" href="{{ route('DashboardSeller') }}" role="button" aria-expanded="false"
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
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider"/>
                        </div>
                    </div>
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#produk" data-bs-toggle="collapse" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="fa-solid fa-box"></i>
                            </span>
                            <span class="nav-link-text ps-1">Produk</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="produk">
                        <li class="nav-item">
                            <a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text ps-1">Tambah Produk</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app/email/email-detail.html" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text ps-1">Data Produk</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages-->
                    <a class="nav-link" href="app/chat.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-comments"></span>
                            </span>
                            <span class="nav-link-text ps-1">Chat</span>
                        </div>
                    </a>
                    <!-- parent pages-->
                    <a class="nav-link" role="button"
                        aria-expanded="false" aria-controls="events">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="fa-solid fa-clipboard"></i>
                            </span>
                            <span class="nav-link-text ps-1">Pesanan</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E
                                commerce</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="e-commerce">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="product">
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-commerce/product/product-list.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Product list</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-commerce/product/product-grid.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Product grid</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-commerce/product/product-details.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Product details</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="orders">
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/orders/order-list.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order
                                                list</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-commerce/orders/order-details.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order
                                                details</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/customers.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Customers</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/customer-details.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer
                                        details</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/shopping-cart.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping
                                        cart</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/checkout.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Checkout</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/billing.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/e-commerce/invoice.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link" href="app/kanban.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-share-alt"></span></span><span
                                class="nav-link-text ps-1">Social</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="social">
                        <li class="nav-item"><a class="nav-link" href="app/social/feed.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/social/activity-log.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity
                                        log</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/social/notifications.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Notifications</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="app/social/followers.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Followers</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Statistik
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link" href="pages/starter.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link" href="pages/landing.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-lock"></span></span><span
                                class="nav-link-text ps-1">Authentication</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="authentication">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="simple">
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/login.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/logout.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/register.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Confirm mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/simple/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="card">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/register.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Confirm mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="split">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/split/login.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/logout.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/register.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Confirm mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/split/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#authentication-modal" data-bs-toggle="modal"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="user">
                        <li class="nav-item"><a class="nav-link" href="pages/user/profile.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/user/settings.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Settings</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="pricing">
                        <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-default.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing
                                        default</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-alt.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing
                                        alt</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-question-circle"></span></span><span
                                class="nav-link-text ps-1">Faq</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="faq">
                        <li class="nav-item"><a class="nav-link" href="pages/faq/faq-basic.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq
                                        basic</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/faq/faq-alt.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/faq/faq-accordion.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq
                                        accordion</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-exclamation-triangle"></span></span><span
                                class="nav-link-text ps-1">Errors</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="errors">
                        <li class="nav-item"><a class="nav-link" href="pages/errors/404.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/errors/500.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-thumbtack"></span></span><span
                                class="nav-link-text ps-1">Miscellaneous</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="miscellaneous">
                        <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/associations.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Associations</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/invite-people.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite
                                        people</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/miscellaneous/privacy-policy.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy
                                        policy</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
