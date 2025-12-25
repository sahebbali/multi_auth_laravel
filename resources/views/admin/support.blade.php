<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <x-slot name="header">
                <div class="flex justify-between items-center">
                    <h2 class="font-semibold text-xl text-gray-800">
                        {{ __('Support Tickets') }}
                    </h2>
                    <span class="text-sm text-gray-500">
                        {{ now()->format('d M Y') }}
                    </span>
                </div>
            </x-slot>

            <div class="py-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                    <!-- Header Actions -->
                    <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-600">
                            Manage and respond to user support requests.
                        </p>
                        <a href="{{ route('admin.support.create') }}"
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 transition">
                            Create Ticket
                        </a>
                    </div>

                    <!-- Ticket Table -->
                    <div class="bg-white rounded-xl shadow overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gray-50 border-b">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-gray-600">Ticket ID</th>
                                        <th class="px-6 py-3 text-left text-gray-600">User</th>
                                        <th class="px-6 py-3 text-left text-gray-600">Subject</th>
                                        <th class="px-6 py-3 text-left text-gray-600">Priority</th>
                                        <th class="px-6 py-3 text-left text-gray-600">Status</th>
                                        <th class="px-6 py-3 text-left text-gray-600">Created</th>
                                        <th class="px-6 py-3 text-right text-gray-600">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y">
                                    <!-- Ticket Row -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 font-medium">#TK-1023</td>
                                        <td class="px-6 py-4">User001</td>
                                        <td class="px-6 py-4">
                                            Wallet balance not updated
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-700 font-semibold">
                                                High
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700 font-semibold">
                                                Open
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-500">
                                            14 Sep 2025
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('admin.support.show', 1) }}"
                                                class="text-blue-600 hover:underline text-sm font-medium">
                                                View
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Another Row -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 font-medium">#TK-1022</td>
                                        <td class="px-6 py-4">User002</td>
                                        <td class="px-6 py-4">
                                            Deposit verification issue
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700 font-semibold">
                                                Medium
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700 font-semibold">
                                                Resolved
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-500">
                                            13 Sep 2025
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('admin.support.show', 2) }}"
                                                class="text-blue-600 hover:underline text-sm font-medium">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
