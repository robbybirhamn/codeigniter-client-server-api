<?php echo $this->session->flashdata('hasil'); ?>

<h1>MATA KULIAH UNISBANK</h1>

<table width="100%">
    <tr>
        <th>No</th>
        <th>Kode Makul</th>
        <th>Nama Makul</th>
        <th>Jml.Sks</th>
        <th>Prodi</th>
        <th>--</th>
    </tr>
        <?php 
        $no = 1;
        foreach($data as $dt){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dt->kdmk; ?></td>
            <td><?= $dt->nmmk; ?></td>
            <td><?= $dt->sks; ?></td>
            <td><?= $dt->prodi; ?></td>
            <td>
                <a href="<?= base_url('client/edit/'.$dt->kdmk); ?>"><button>edit</button></a>
                <a href="<?= base_url('client/delete/'.$dt->kdmk); ?>"><button>delete</button></a>
            </td>
        </tr>
        <?php } ?>
</table>