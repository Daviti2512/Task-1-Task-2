<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            width: 300px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
<h2>ნიშნების უწყისი</h2>
<form method="POST" action="">
    <label for="saxeli">სტუდენტის სახელი:</label>
    <input type="text" id="saxeli" name="saxeli" required>

    <label for="gvari">სტუდენტის გვარი:</label>
    <input type="text" id="gvari" name="gvari" required>

    <label for="kursi">კურსი:</label>
    <input type="text" id="kursi" name="kursi" required>

    <label for="semestri">სემესტრი:</label>
    <input type="text" id="semestri" name="semestri" required>

    <label for="saswavlo_kursi">სასწავლო კურსი:</label>
    <input type="text" id="saswavlo_kursi" name="saswavlo_kursi" required>

    <label for="nishani">მიღებული ნიშანი:</label>
    <input type="number" id="nishani" name="nishani" required min="0" max="100">

    <label for="leqtoris_saxeli">ლექტორის სახელი:</label>
    <input type="text" id="leqtoris_saxeli" name="leqtoris_saxeli" required>

    <label for="leqtoris_gvari">ლექტორის გვარი:</label>
    <input type="text" id="leqtoris_gvari" name="leqtoris_gvari" required>

    <label for="dekanissaxeli">დეკანის სახელი:</label>
    <input type="text" id="dekanissaxeli" name="dekanissaxeli" required>

    <label for="dekanisgvari">დეკანის გვარი:</label>
    <input type="text" id="dekanisgvari" name="dekanisgvari" required>

    <input type="submit" value="gagzavna">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $saxeli = $_POST['saxeli'];
    $gvari = $_POST['gvari'];
    $kursi = $_POST['kursi'];
    $semestri = $_POST['semestri'];
    $saswavlo_kursi = $_POST['saswavlo_kursi'];
    $nishani = $_POST['nishani'];
    $leqtoris_saxeli = $_POST['leqtoris_saxeli'];
    $leqtoris_gvari = $_POST['leqtoris_gvari'];
    $dekanissaxeli = $_POST['dekanissaxeli'];
    $dekanisgvari = $_POST['dekanisgvari'];

    if ($nishani >= 91) {
        $shefaseba = "A - ფრიადი";
    } elseif ($nishani >= 81) {
        $shefaseba = "B - ძალიან კარგი";
    } elseif ($nishani >= 71) {
        $shefaseba = "C - კარგი";
    } elseif ($nishani >= 61) {
        $shefaseba = "D - დამაკმაყოფილებელი";
    } else {
        $shefaseba = "F - დაუკმაყოფილებელი";
    }
?>
    <h2>შეტანილი მონაცემები:</h2>
    <table>
        <tr>
            <th>სტუდენტის სახელი</th>
            <td><?php echo htmlspecialchars($saxeli); ?></td>
        </tr>
        <tr>
            <th>სტუდენტის გვარი</th>
            <td><?php echo htmlspecialchars($gvari); ?></td>
        </tr>
        <tr>
            <th>კურსი</th>
            <td><?php echo htmlspecialchars($kursi); ?></td>
        </tr>
        <tr>
            <th>სემესტრი</th>
            <td><?php echo htmlspecialchars($semestri); ?></td>
        </tr>
        <tr>
            <th>სასწავლო კურსი</th>
            <td><?php echo htmlspecialchars($saswavlo_kursi); ?></td>
        </tr>
        <tr>
            <th>მიღებული ნიშანი</th>
            <td><?php echo htmlspecialchars($nishani); ?></td>
        </tr>
        <tr>
            <th>შეფასება</th>
            <td><?php echo htmlspecialchars($shefaseba); ?></td>
        </tr>
        <tr>
            <th>ლექტორის სახელი</th>
            <td><?php echo htmlspecialchars($leqtoris_saxeli); ?></td>
        </tr>
        <tr>
            <th>ლექტორის გვარი</th>
            <td><?php echo htmlspecialchars($leqtoris_gvari); ?></td>
        </tr>
        <tr>
            <th>დეკანის სახელი</th>
            <td><?php echo htmlspecialchars($dekanissaxeli); ?></td>
        </tr>
        <tr>
            <th>დეკანის გვარი</th>
            <td><?php echo htmlspecialchars($dekanisgvari); ?></td>
        </tr>
    </table>

<?php
}
?>
</body>
</html>