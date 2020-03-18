<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INPUT MATAKULIAH</title>
</head>
<body>
    <form action="<?= base_url('client/create'); ?>" method="POST">
        <input type="text" name="kdmk"> 
        <input type="text" name="nmmk"> 
        <input type="text" name="sks"> 
        <input type="text" name="prodi"> 
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>