<?php
include "includes/header.php";

class Account
{
    public int $number;
    public string $type;
    public float $balance;



    public function __construct(int $number, string $type, float $balance = 0.00)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
    public function deposit($amount)
    {

        $this->balance += $amount;
        return $this->balance;

    }

    public function withdraw($withdraw)
    {
        $this->balance -= $withdraw;
        return $this->balance;
    }

}

$accountA = new Account(43161176, "Chequing", 32.00);
$accountB = new Account(20148896, "Savings", 756.00);


// Perform transactions
$accountA->deposit(12.00);
$accountB->withdraw(100.00);
$accountA->withdraw(5.00);
$accountB->deposit(300.00);

?>

<h2>Account Balances</h2>
<h2>Account Balances</h2>

<table>
    <tr>
        <th>Date</th>
        <th>Account A's type</th>
        <th>Account B's type</th>
    </tr>
    <tr>
        <td>23 June</td>
        <td><?php echo $accountA->type . " - $" . $accountA->balance ?></td>
        <td><?php echo $accountB->type . " - $" . $accountB->balance ?></td>
    </tr>
    <tr>
        <td>24 June</td>
        <td>Deposit $12.00 - <?= "New balance: $" . $accountA->balance ?></td>
        <td>Withdraw $100.00 - <?= "New balance: $" . $accountB->balance ?></td>
    </tr>
    <tr>
        <td>25 June</td>
        <td>Withdraw $5.00 - <?= "New balance: $" . $accountA->balance ?></td>
        <td>Deposit $300.00 - <?= "New balance: $" . $accountB->balance ?></td>
    </tr>
</table>



<?php
include "includes/footer.php";
?>