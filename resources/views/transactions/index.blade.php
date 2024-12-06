<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transactions</title>
</head>
<body>
    <h1>Transactions</h1>
    <a href="{{ route('transactions.create') }}">Add New Transaction</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Sender Account</th>
                <th>Receiver Account</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->employee_name }}</td>
                    <td>{{ $transaction->sender_name }}</td>
                    <td>{{ $transaction->receiver_name }}</td>
                    <td>{{ $transaction->sender_account }}</td>
                    <td>{{ $transaction->receiver_account }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>
                        <a href="{{ route('transactions.edit', $transaction) }}">Edit</a>
                        <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Total Transactions: {{ $totalTransactions }}</p>
    <p>Total Amount: {{ $totalAmount }}</p>
</body>
</html>
