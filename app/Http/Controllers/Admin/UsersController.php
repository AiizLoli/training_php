<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User as UserMod;
use App\Model\Shop as ShopMod;

use App\Model\Product as ProductMod; 

class UsersController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //phpinfo();
        //$mods = UserMod::all();
        /*$mods = UserMod::where('active', 1)
                ->where('city', 'bangkok')
                ->orderBy('name', 'desc')
                ->take(100)
                ->get(); */

                /*$mods = UserMod::find([1,2,3,4,10]);

         foreach ($mods as $item) {
            echo $item->name."  ".$item->surname."  ".$item->email."<br />";
        }*/
        /*$count = UserMod::where('active', 1)->count();
        echo $count;*/

      /*$mods = UserMod::all();
        return view('test', compact('mods')  ); 

        $data = [
           'name' => 'My Name',
           'surname' => 'My SurName',
           'email' => 'myemail@gmail.com'
       ];

        $user = UserMod::find(1);

        $mods = UserMod::all();

        return view('test', compact('data', 'user', 'mods')); */

        //return view('admin.layouts.template');
        //return view('admin.user.lists');

        $mods = UserMod::paginate(15);
         return view('admin.user.lists', compact('mods') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$mod = UserMod::find(1);
        $mod->name = 'New Flight Name';
        $mod->email = $request->email;
        $mod->password = bcrypt($request->password);
        $mod->save();
		*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$mod = UserMod::find(id);
        echo $mod->name."  ".$mod->surname."  ".$mod->email."<br />"; 
        $shop = UserMod::find($id)->shop;
		echo $shop->name;

		$shop = ShopMod::find($id);
		echo $shop->name;

		echo "<br />";
		echo $shop->user->name;*/

		/*$products = ShopMod::find($id)->products;
 
		foreach ($products as $product) {
			echo $product->name;
			echo "<br />";
		}

		echo "OR <br />";
		
		$shop = ShopMod::find($id);
		echo $shop->name;
		echo "<br />";

		foreach ($shop->products as $product) 
		{
			echo $product->name;
			echo "5555";
			echo "<br />";
		}

		$product = ProductMod::find($id);
		echo "Product name Is : ".$product->name;
		echo "<br /><br />";
		echo "Shop Owner Is : ".$product->shop->name;
    */
        return view('test');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$mod = UserMod::find($id);
        $mod->name = 'New Flight Name';
        $mod->email = $request->email;
        $mod->password = bcrypt($request->password);
        $mod->save();
        echo "Update Successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod = UserMod::find($id);
		$mod->delete();
		echo "Delete Successfully";
    }
}
