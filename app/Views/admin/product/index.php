<?= $this->extend('admin/table'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Product</h3>
        </div>
        <div class="card-body">
            
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
            <a href="/product/create" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($product as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->product; ?></td>
                        <td><?= $row->gambar; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("product/edit/$row->id_product"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("product/delete/$row->id_product") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>