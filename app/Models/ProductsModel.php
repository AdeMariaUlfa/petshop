<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductsModel extends Model
{
    protected $table = "product";
    protected $primaryKey = "id_product";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_product', 'product', 'gambar'];

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_product' => $id]);
        }
    }
    public function saveProduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_product' => $id));
        return $query;
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_product' => $id));
        return $query;
    }
}