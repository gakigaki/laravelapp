<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class person extends Model{
    //　テーブル定義
   protected $table = 'people';

    // プライマリーキー指定
    protected $primaryKey = 'id';

   // タイムスタンプ設定
   public $timestamps = false;

   public function getData()
   {
       return $this->id.':'.$this->name.'('.$this->age.')';
   }
}
