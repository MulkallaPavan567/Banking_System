// scripts.js

// Example client-side validation function for the transfer_money.php page
function validateTransfer() {
    const amount = parseFloat(document.getElementById('amount').value);
    const sender = document.getElementById('sender').value;
    const receiver = document.getElementById('receiver').value;

    if (isNaN(amount) || amount <= 0) {
        alert('Please enter a valid amount greater than 0.');
        return false;
    }

    if (sender === receiver) {
        alert('Sender and receiver cannot be the same.');
        return false;
    }

    // Additional validation can be added as needed

    return true;
}
