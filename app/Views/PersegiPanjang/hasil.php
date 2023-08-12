<table>
    <tr>
        <th colspan="2">KELILING PERSEGI PANJANG</th>
    </tr>
    <tr>
        <td>Panjang</td>
        <td><?= $persegiPanjang->panjang ?></td>
    </tr>
    <tr>
        <td>Lebar</td>
        <td><?= $persegiPanjang->lebar ?></td>
    </tr>
    <tr>
        <td>Keliling</td>
        <td><?= $persegiPanjang->hitungKeliling() ?></td>
    </tr>
    <tr>
        <td colspan="2"><a href="<?= site_url('persegipanjang/index') ?>">Kembali</a></td>
    </tr>
</table>