<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>

            <span class="text-sm text-gray-500">
                {{ now()->format('d M Y') }}
            </span>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Users</p>
                    <p class="text-3xl font-bold text-gray-800 mt-2">1,245</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Wallet Balance</p>
                    <p class="text-3xl font-bold text-green-600 mt-2">৳ 125,000</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Credit</p>
                    <p class="text-3xl font-bold text-blue-600 mt-2">৳ 250,000</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Debit</p>
                    <p class="text-3xl font-bold text-red-600 mt-2">৳ 125,000</p>
                </div>
            </div>

            <!-- Recent Activities -->
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
                                <th class="px-6 py-3 text-left text-gray-600">User</th>
                                <th class="px-6 py-3 text-left text-gray-600">Type</th>
                                <th class="px-6 py-3 text-left text-gray-600">Amount</th>
                                <th class="px-6 py-3 text-left text-gray-600">Status</th>
                                <th class="px-6 py-3 text-left text-gray-600">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium">User001</td>
                                <td class="px-6 py-4">Credit</td>
                                <td class="px-6 py-4">৳ 5,000</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700 font-semibold">
                                        Success
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">12 Sep 2025</td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium">User002</td>
                                <td class="px-6 py-4">Debit</td>
                                <td class="px-6 py-4">৳ 2,000</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-700 font-semibold">
                                        Failed
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">11 Sep 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
