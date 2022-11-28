<?= $this->extend('admin/table'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Produk Anjing</h3>
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
                        <td>DOG CHOIZE BEEF 20KG MAKANAN ANJING</td>
                        <td><img src="<?= base_url('assets/img/dog1.webp'); ?>"></td>
                        <td>557.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pdg Lamb 1,5Kg</td>
                        <td><img src="<?= base_url('assets/img/dog2.jpg'); ?>"></td>
                        <td>67.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>KALUNG ANJING KULIT ASLI ACC STAINLESS</td>
                        <td><img src="<?= base_url('assets/img/dog3.jpg'); ?>"></td>
                        <td>150.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>OBAT PENGGEMUK ANJING</td>
                        <td><img src="<?= base_url('assets/img/dog4.jpg'); ?>"></td>
                        <td>16.800</td>
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