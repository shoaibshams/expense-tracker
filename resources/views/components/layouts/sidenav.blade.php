<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-2 pt-3">

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ route('home') }}" wire:navigate class="nav-link d-flex align-items-center">
                  <span class="sidebar-icon me-3">
                    <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                  </span>
                    <span class="mt-1 ms-1 sidebar-text">Expense Tracker</span>
                </a>
            </li>

            <li @class(['nav-item','active' => request()->routeIs('home')])>
                <a href="{{ route('home') }}" class="nav-link" wire:navigate>
                    <i class="fa fa-tachometer-alt me-1"></i>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>

            <li @class(['nav-item','active' => request()->routeIs('transaction')])>
                <a href="{{ route('transaction') }}" class="nav-link" wire:navigate>
                    <i class="fas fa-money-bill-wave me-1"></i>
                    <span class="sidebar-text">Transactions</span>
                </a>
            </li>

            <li @class(['nav-item','active' => request()->routeIs('category')])>
                <a href="{{ route('category') }}" class="nav-link" wire:navigate>
                    <i class="fa fa-list me-1"></i>
                    <span class="sidebar-text">Categories</span>
                </a>
            </li>

            <li @class(['nav-item','active' => request()->routeIs('home')])>
                <a href="{{ route('home') }}" class="nav-link" wire:navigate>
                    <i class="fa fa-calculator me-1"></i>
                    <span class="sidebar-text">Accounts</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
