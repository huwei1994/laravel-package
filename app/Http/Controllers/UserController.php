<?php
namespace Huwei1994\Test3;
use App\TestModel;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    //测试composer普通包是否能正常工作
    public function test()
    {
        $title = '测试哈哈哈哈';
        $data = (new TestModel())->addItem($title);
        return view('user.user',[
            'title'=>$data[0]->title
        ]);
    }
}
?>