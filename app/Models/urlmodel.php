<?php

namespace App\Models;

use CodeIgniter\Model;

class urlmodel extends Model
{

    protected $table = 'urls';

    protected $primaryKey = 'id';

    protected $allowedFields = ['full_url', 'short_url', 'urlcount']; //insert only colunm DB


    public function wheres($url)
    {
        return $this->db->table('urls')
            ->getWhere(['short_url' => $url])
            ->getResult();
    }

    public function urlcounts($url)
    {
        return $this->db->table('urls')
            ->select('urlcount')
            ->Where('short_url', $url);
            // ->get();
    }
}
