<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model {
	
	protected $table = 'district';
	protected $primaryKey = 'id';
	protected $fillable = ['id'];
  
}
?>