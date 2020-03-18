<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INPUT MATAKULIAH</title>
</head>
<body>
    <form action="<?= base_url('client/update'); ?>" method="POST">
        <input type="text" name="kdmk" value="<?= $data->kdmk; ?>"> 
        <input type="text" name="nmmk" value="<?= $data->nmmk; ?>"> 
        <input type="text" name="sks" value="<?= $data->sks; ?>"> 
        <input type="text" name="prodi" value="<?= $data->prodi; ?>"> 
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>