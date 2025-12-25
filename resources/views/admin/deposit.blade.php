<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <x-slot name="header">
                <div class="flex justify-between items-center">
                    <h2 class="font-semibold text-xl text-gray-800">
                        {{ __('Deposit Request') }}
                    </h2>
                    <span class="text-sm text-gray-500">
                        {{ now()->format('d M Y') }}
                    </span>
                </div>
            </x-slot>

            <div class="py-10">
                <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

                    <div class="bg-white shadow rounded-xl">
                        <div class="px-6 py-4 border-b">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Submit Deposit Information
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                                Please provide accurate transaction details for verification.
                            </p>
                        </div>

                        <form action="{{ route('admin.deposit.store') }}" method="POST" enctype="multipart/form-data"
                            class="p-6 space-y-6">
                            @csrf

                            <!-- Amount -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Deposit Amount (৳)
                                </label>
                                <input type="number" name="amount" placeholder="Enter deposit amount"
                                    class="mt-2 w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200 focus:border-blue-500"
                                    required />
                            </div>

                            <!-- Transaction ID -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Transaction ID
                                </label>
                                <input type="text" name="transaction_id" placeholder="Enter transaction ID"
                                    class="mt-2 w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200 focus:border-blue-500"
                                    required />
                            </div>

                            <!-- Proof Image -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Payment Proof (Image)
                                </label>

                                <div class="mt-2 flex items-center justify-center w-full">
                                    <label
                                        class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 16v-8m4 4h-8M4 16v-1a3 3 0 013-3h10a3 3 0 013 3v1" />
                                            </svg>
                                            <p class="text-sm text-gray-500">
                                                Click to upload proof image
                                            </p>
                                            <p class="text-xs text-gray-400 mt-1">
                                                JPG, PNG (max 2MB)
                                            </p>
                                        </div>
                                        <input type="file" name="proof_image" accept="image/*" class="hidden"
                                            required />
                                    </label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                    Submit Deposit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
