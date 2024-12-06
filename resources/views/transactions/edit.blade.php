<form action="{{ route('transactions.update', $transaction) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="employee_name" value="{{ $transaction->employee_name }}" required>
    <input type="text" name="sender_name" value="{{ $transaction->sender_name }}" required>
    <input type="text" name="receiver_name" value="{{ $transaction->receiver_name }}" required>
    <input type="text" name="sender_account" value="{{ $transaction->sender_account }}" required>
    <input type="text" name="receiver_account" value="{{ $transaction->receiver_account }}" required>
    <input type="number" name="amount" value="{{ $transaction->amount }}" step="0.01" required>
    <button type="submit">Update</button>
</form>
