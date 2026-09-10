<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['category_id', 'judul', 'penulis', 'penerbit', 'tahun', 'stok']; // fillable data yang bisa diisi secara bersamaan atau masal

    // penamaaan function untuk relasi harus ditulis dengan nama table nya
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
