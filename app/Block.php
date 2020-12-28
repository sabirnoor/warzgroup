<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model {
	
	protected $table = 'block';
	protected $primaryKey = 'id';
	protected $fillable = ['id'];
  
}
?>