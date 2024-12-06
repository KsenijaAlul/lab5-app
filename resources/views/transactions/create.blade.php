<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <input type="text" name="employee_name" placeholder="Employee Name" required>
    <input type="text" name="sender_name" placeholder="Sender Name" required>
    <input type="text" name="receiver_name" placeholder="Receiver Name" required>
    <input type="text" name="sender_account" placeholder="Sender Account" required>
    <input type="text" name="receiver_account" placeholder="Receiver Account" required>
    <input type="number" name="amount" placeholder="Amount" step="0.01" required>
    <button type="submit">Save</button>
</form>
