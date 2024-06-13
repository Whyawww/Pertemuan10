<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 10</title>
    <style>
        
        table {
            width: 700px;
        }
        td {
            padding: 5px;
        }
        input[type="text"] {
            width: calc(100% - 10px); 
        }
        input[type="submit"] {
            width: 100%;
        }
    </style>
</head>
<body>
    <form method="POST" action="CHALLENGE_action.php">
        <table>
            <tr>
                <td>Masukkan Nama Anda:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Masukkan angka pertama (1-10):</td>
                <td><input type="text" name="angka1"></td>
            </tr>
            <tr>
                <td>Masukkan angka kedua (1-10):</td>
                <td><input type="text" name="angka2"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>
