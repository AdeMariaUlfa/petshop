<?= $this->extend('admin/table'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            
            <h3>Tambah Data Product</h3>
        </div>
        <div class="card-body">
        
            
            <form method="post"  action="<?php echo base_url('product/save') ?>">
           <div class="form-group">
                    <label for="product">Product</label>
                    <input type="text" class="form-control" name="produk" required="required">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="text" class="form-control" name="gambar" required="required">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" required="required">
                </div>
                <!-- <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required="required">
                    </div> -->
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info" />
                </div>
 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>