<center>
<?php
function calculateSalary($basic, $designation) {
    $allowances = [
        'Manager' => ['conveyance' => 1000, 'extra' => 500],
        'Supervisor' => ['conveyance' => 750, 'extra' => 200],
        'Clerk' => ['conveyance' => 500, 'extra' => 100],
        'Peon' => ['conveyance' => 250, 'extra' => 0]
    ];
    
    // Calculate HRA (25% of basic)
    $hra = $basic * 0.25;
    
    // Get allowances based on designation
    $conveyance = $allowances[$designation]['conveyance'];
    $extra = $allowances[$designation]['extra'];
    
    // Calculate gross salary
    $gross = $basic + $hra + $conveyance + $extra;
    
    // Calculate income tax
    if ($gross <= 2500) {
        $tax = 0;
    } elseif ($gross <= 4000) {
        $tax = $gross * 0.03;
    } elseif ($gross <= 5000) {
        $tax = $gross * 0.05;
    } else {
        $tax = $gross * 0.08;
    }
    
    // Calculate net salary
    $net = $gross - $tax;
    
    return [
        'hra' => $hra,
        'conveyance' => $conveyance,
        'extra' => $extra,
        'gross' => $gross,
        'tax' => $tax,
        'net' => $net
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $basic = $_POST['basic'];
    $designation = $_POST['designation'];
    $salary = calculateSalary($basic, $designation);
}
?>

<?php if(isset($salary)): ?>
    <div class="payslip">
        <h3>Pay Slip</h3>
        <table border="1" cellpadding="10" style="border-collapse: collapse; margin: 0 auto;">
            <tr>
                <th>Field</th>
                <th>Details</th>
            </tr>
            <tr>
                <td><strong>Employee Name</strong></td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td><strong>Designation</strong></td>
                <td><?php echo $designation; ?></td>
            </tr>
            <tr>
                <td><strong>Basic Salary</strong></td>
                <td>₹<?php echo number_format($basic, 2); ?></td>
            </tr>
            <tr>
                <td><strong>HRA (25% of Basic)</strong></td>
                <td>₹<?php echo number_format($salary['hra'], 2); ?></td>
            </tr>
            <tr>
                <td><strong>Conveyance Allowance</strong></td>
                <td>₹<?php echo number_format($salary['conveyance'], 2); ?></td>
            </tr>
            <tr>
                <td><strong>Extra Allowance</strong></td>
                <td>₹<?php echo number_format($salary['extra'], 2); ?></td>
            </tr>
            <tr>
                <td><strong>Gross Salary</strong></td>
                <td>₹<?php echo number_format($salary['gross'], 2); ?></td>
            </tr>
            <tr>
                <td><strong>Income Tax</strong></td>
                <td>₹<?php echo number_format($salary['tax'], 2); ?></td>
            </tr>
            <tr>
                <td><strong>Net Salary</strong></td>
                <td>₹<?php echo number_format($salary['net'], 2); ?></td>
            </tr>
        </table>
    </div>
<?php endif; ?>
</center>
