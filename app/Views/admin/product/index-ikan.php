<?= $this->extend('admin/table'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Produk Ikan</h3>
        </div>
        <div class="card-body">
            
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
            <a href="" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
               
                    <tr>
                        <td>1</td>
                        <td>Makanan Ikan Takari</td>
                        <td><img src="<?= base_url('assets/img/ikan1.png'); ?>"></td>
                        <td>18.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Obat Ikan Anti Jamur & Bakteri</td>
                        <td><img src="<?= base_url('assets/img/ikan2.jpg'); ?>"></td>
                        <td>11.700</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Akuarium Ikan Besar</td>
                        <td><img src="<?= base_url('assets/img/ikan3.jpg'); ?>"></td>
                        <td>45.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>LED Akuarium</td>
                        <td><img src="<?= base_url('assets/img/ikan4.jpg'); ?>"></td>
                        <td>22.800</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
            </table>
           
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>