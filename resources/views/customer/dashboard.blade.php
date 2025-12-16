<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Welcome back, {{ Auth::user()->name }}
                </h2>
                <p class="text-sm text-gray-500">
                    Here is an overview of your account
                </p>
            </div>

            <div class="text-sm text-gray-500">
                {{ now()->format('d M Y') }}
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Wallet Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white from-green-500 to-green-600 text-black p-6 rounded-xl shadow">
                    <p class="text-sm opacity-80 text-gray-500">Wallet Balance</p>
                    <p class="text-3xl font-bold mt-2">৳ 12,500</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Earned</p>
                    <p class="text-2xl font-bold text-green-600 mt-2">৳ 25,000</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Withdrawn</p>
                    <p class="text-2xl font-bold text-red-600 mt-2">৳ 12,500</p>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <a href="#" class="bg-white p-5 rounded-xl shadow hover:shadow-md transition text-center">
                    <div class="text-blue-600 text-3xl mb-2">💳</div>
                    <p class="font-semibold">Deposit</p>
                </a>

                <a href="#" class="bg-white p-5 rounded-xl shadow hover:shadow-md transition text-center">
                    <div class="text-green-600 text-3xl mb-2">📤</div>
                    <p class="font-semibold">Withdraw</p>
                </a>

                <a href="#" class="bg-white p-5 rounded-xl shadow hover:shadow-md transition text-center">
                    <div class="text-purple-600 text-3xl mb-2">📊</div>
                    <p class="font-semibold">Transactions</p>
                </a>

                <a href="#" class="bg-white p-5 rounded-xl shadow hover:shadow-md transition text-center">
                    <div class="text-gray-600 text-3xl mb-2">⚙️</div>
                    <p class="font-semibold">Profile</p>
                </a>
            </div>

            <!-- Recent Transactions -->
            <div class="bg-white rounded-xl shadow">
                <div class="p-6 border-b">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Recent Transactions
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-gray-600">Type</th>
                                <th class="px-6 py-3 text-left text-gray-600">Amount</th>
                                <th class="px-6 py-3 text-left text-gray-600">Status</th>
                                <th class="px-6 py-3 text-left text-gray-600">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">Credit</td>
                                <td class="px-6 py-4 text-green-600">৳ 5,000</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700 font-semibold">
                                        Success
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">12 Sep 2025</td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">Debit</td>
                                <td class="px-6 py-4 text-red-600">৳ 2,000</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700 font-semibold">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">10 Sep 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
