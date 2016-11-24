<?php

namespace App\Http\Controllers;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TestModel;
//use App\Http\Controllers\Controller;
class UserController extends Controller
{
    //测试composer普通包是否能正常工作
    public function test()
    {
        $title = '测试哈哈哈哈';
        $data = (new TestModel())->addItem($title);
        //var_dump($data[0]->title);
        return view('user.user',[
            'title'=>$data[0]->title
        ]);
    }











    public function getAdduser()
    {

		return view('show/add');
   	}
   	// public function postAdduser(Request $request)
   	// {

	   //  return \Response::json(['age'=>$request->input('age'),'name'=>$request->input('name')]);
   	// }
   	public function postAdduser()
   	{
   		echo "hahahah";
    }


    public function face()
    {
      /*facede原生方式*/
      //插入
      //$res =DB::insert('insert into student (name,age) values (?,?)',['haha',19]);
      //dd($res);
      $jj = $this->postAdduser();
        var_dump($jj);
      //查询
      $res = DB::select('select * from student where id =?',[1002]);
      dd($res);

      //更新
      //$res = DB::update("update student set name = 'huwei' where name=:name",['name'=>'huweihhahah']);
      //dd($res);

      /*查询构造器*/
      //插入
      // $res = DB::table('student')->insert(['name'=>'lar','age'=>18]);
      // var_dump($res);

      //查询
      //$num = DB::table('student')->get();
      //$num = DB::table('student')->where('name','huwei')->value('name');
      //echo "<pre/>";
      //DB::table('student')->chunk(3,function($student)
      //{
      //   var_dump($student);
      //}); 
       // $num = DB::table('student')->pluck('name','id');
       // foreach($num as $id=>$name)
       // {
       //     echo $name;
       // }

      //$num = DB::table('student')->avg('age');
      //$num = DB::table('student')->select();
      //$num = DB::table('student')->distinct()->get();
      //$first = DB::table('student')->whereNull('name');
      //$second = DB::table('student')->whereNull('age')->union($first)->get();
      //$second = DB::table('student')->where('name','like','la_')->get();

        /*$second = DB::table('student')
      ->inRandomOrder()
      ->first();
      dd($second);*/

    }

    //测试一下Request请求
    public function tt(Request $request,$id)
    {
        //var_dump($request->input('name'));
        //var_dump($id);
        //echo $request->input('id');
        //echo $request->input('haha');
        //echo $request->input('id');
        //$name = $request->input('name');
        //var_dump($name);
        //echo $request->path();
        /*if($request->is('user/tt/id'))
        {
            echo "正确";
        }
        else
        {
            echo "错误";
        }*/
        //echo $request->url();
        //echo $request->fullUrl();
        /*echo $request->method();
        if($request->isMethod('post'))
        {
            echo "争取文";
        }*/
        //echo $request->name;
        //echo $request->input('hhe','jjjjjj');

        //获取数组值？？
        //echo $request->input('name.0.name');
        if($request->has('name'))
        {
            echo "哈哈哈哈";
        }
        $request->flash();
    }
}
?>