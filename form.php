<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="input">
        <form action="" method="post">
            <input type="text" id="name" name="name"> <br>
            <input type="text" id="nim" name="nim"> <br>
            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>

    <?php 
    if(isset($_POST['submit'])){
        $nama = $_POST['name'];
        $nim = $_POST['nim'];

        echo "Nama saya : $nama <br>";
        echo "NIM : $nim";
    }
    
    
    ?>
</body>
</html>