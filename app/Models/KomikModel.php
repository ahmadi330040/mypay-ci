<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'blog';
    protected $useTimestaps = true;
    protected $allowedFields = ['judul','slug','author','deskripsi_display','imgpath','content'];

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}