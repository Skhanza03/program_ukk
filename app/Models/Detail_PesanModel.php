<?php 
namespace App\Models;

use CodeIgniter\Model;

class Detail_PesanModel extends Model{
    protected $table      = 'tb_detail_pesan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pesan','id_menu','jumlah','harga'];
}