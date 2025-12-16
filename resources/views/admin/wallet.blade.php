<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <?php
    // Dummy data (replace with database values)
    $totalBalance = 125000;
    $totalCredit = 250000;
    $totalDebit = 125000;
    
    $transactions = [['id' => 1, 'user' => 'User001', 'type' => 'Credit', 'amount' => 5000, 'status' => 'Success'], ['id' => 2, 'user' => 'User002', 'type' => 'Debit', 'amount' => 2000, 'status' => 'Success'], ['id' => 3, 'user' => 'User003', 'type' => 'Credit', 'amount' => 10000, 'status' => 'Failed']];
    ?>

    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Admin Wallet Dashboard</h1>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow p-6">
                <p class="text-sm text-gray-500">Total Balance</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">৳ <?php echo number_format($totalBalance); ?></p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <p class="text-sm text-gray-500">Total Credit</p>
                <p class="text-3xl font-bold text-green-600 mt-2">৳ <?php echo number_format($totalCredit); ?></p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <p class="text-sm text-gray-500">Total Debit</p>
                <p class="text-3xl font-bold text-red-600 mt-2">৳ <?php echo number_format($totalDebit); ?></p>
            </div>
        </div>

        <!-- Transactions Table -->
        <div class="bg-white rounded-xl shadow overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left font-medium text-gray-600">ID</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-600">User</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-600">Type</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-600">Amount</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-600">Status</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($transactions as $trx): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4"><?php echo $trx['id']; ?></td>
                        <td class="px-6 py-4 font-medium"><?php echo $trx['user']; ?></td>
                        <td class="px-6 py-4"><?php echo $trx['type']; ?></td>
                        <td class="px-6 py-4">৳ <?php echo number_format($trx['amount']); ?></td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold <?php echo $trx['status'] === 'Success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
                                <?php echo $trx['status']; ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <button
                                class="bg-green-600 hover:bg-green-700 text-white px-3 py-1.5 rounded text-xs">Credit</button>
                            <button
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-xs">Debit</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
