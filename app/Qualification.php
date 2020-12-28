<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model {
	
	protected $table = 'qualification';
	protected $primaryKey = 'id';
	protected $fillable = ['id'];
  
}
?>