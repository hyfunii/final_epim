<?php
include "db.php";
include "session.php";

$error = "";
$user = $isset($_POST['user'];)
$user_id = $isset($_POST['user_id']);



if ($_SERVER('REQUEST_METHOD') === 'POST') {
    $querypayment = "SELECT * FROM user where id = ?";
    $stmt = $conn->prepare($querypayment);
    $stmt->bind_param('i', $user);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQL_ASSOC);

    if ($result-> num_rows > 0) {
        $user = $_SESSION['user'];
        $user_id = $_SESSION['user_id'];

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>

    </style>
</head>
<body>
    <div class="payment-page">
        <div class="payment-tittle">
            <h2>De Grandeur</h2>
            <p>Feel the grandeur, embrace the euphoria</p>
        </div>
        <form id="paymentForm">
            <h3> Payment Detail</h3>
            <label for="ticket">Ticket</label>
            <select name="ticket" id="ticket">
                <option value="bronze-ticket">Bronze Ticket</option>
                <option value="silver-ticket">Silver Ticket</option>
                <option value="gold-ticket">Gold Ticket</option>
            </select>
            <label for="quantity">Quantity</label>
            <input type="number" id="ticket" min="1" value="1" required>

            <label for="email">Email</label>
            <input type="email" id="email" readonly>

            <div class="total-container">
                <p>Total container = $0.00</p>
            </div>

            <button type="submit">Simpan</button>

        </form>
    </div>
</body>
</html>