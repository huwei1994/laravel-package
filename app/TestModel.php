<?php
/**
 * Created by PhpStorm.
 * User: huwei
 * Date: 2016/11/23
 * Time: 10:07
 */

namespace App;
use DB;
use Gitcomposer\GitScmsCore;

class TestModel
{
    use GitScmsCore;
    //制定链接数据表
    protected $table = 'testcomposer';
    public function insert($sets)
    {
        $db = DB::table($this->getTable());
        $id = $db->insertGetId(['title'=>$sets]);
        $res = $db->where('id', $id)->get();
        return $res;
    }
}