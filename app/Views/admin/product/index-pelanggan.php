<?= $this->extend('admin/table'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Pelanggan</h3>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
               
                    <tr>
                        <td>1</td>
                        <td>Ade Maria U</td>
                        <td>ademariau@gmail.com</td>
                        <td>Jl. Jakarta No.11</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Faisal M.</td>
                        <td>faisl40@gmail.com</td>
                        <td>Jl. Bandung No.1E</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Clarisa Putri</td>
                        <td>clariss101@gmail.com</td>
                        <td>Jl. Soekarno Hatta No.107</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Matthew Angga</td>
                        <td>mathhewang@gmail.com</td>
                        <td>Jl. Danau Toba No.55D</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Umbu Michael</td>
                        <td>umichaelfa@gmail.com</td>
                        <td>Jl. Danau Senggini No.33</td>
                        <td>
                            <a title="Edit" href="" class="btn btn-info">Edit</a>
                            <a title="Delete" href="" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Annisa Gunawan</td>
                        <td>agunnawan@gmail.com</td>
                        <td>Jl. Bendungan Sutami No.78</td>
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