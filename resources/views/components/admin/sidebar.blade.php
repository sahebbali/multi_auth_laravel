<aside class="w-64 bg-white border-r min-h-screen fixed">
    <div class="p-6 border-b">
        <h2 class="text-lg font-bold text-gray-800">
            Admin Panel
        </h2>
    </div>

    <nav class="p-4 space-y-2">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100
           {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100 font-semibold' : '' }}">
            Dashboard
        </a>

        <!-- Wallet -->
        <a href="{{ route('admin.wallet') }}"
            class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100
           {{ request()->routeIs('admin.wallet') ? 'bg-gray-100 font-semibold' : '' }}">
            Wallet
        </a>

        <!-- Deposit -->
        <a href="{{ route('admin.deposit') }}"
            class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100
           {{ request()->routeIs('admin.deposit') ? 'bg-gray-100 font-semibold' : '' }}">
            Deposit
        </a>

        <!-- Support Tickets -->
        <a href="{{ route('admin.support') }}"
            class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100
           {{ request()->routeIs('admin.support') ? 'bg-gray-100 font-semibold' : '' }}">
            Support Tickets
        </a>
    </nav>
</aside>
