<?= $this->extend('admin/table'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Produk Reptil</h3>
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
                        <td>Tempat Makan Reptil</td>
                        <td><img src="<?= base_url('assets/img/reptil1.jpg'); ?>"></td>
                        <td>25.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Obat Flu Hewan Reptil</td>
                        <td><img src="<?= base_url('assets/img/reptil2.jpg'); ?>"></td>
                        <td>45.000</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Aksesoris Kadal Hammock Ayunan Hewan Peliharaan Kursi Reptil</td>
                        <td><img src="<?= base_url('assets/img/reptil3.jpg'); ?>"></td>
                        <td>50.000</td>
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