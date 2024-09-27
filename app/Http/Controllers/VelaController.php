<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use DB;

class VelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('admin/pages/header');
          $users = DB::table('product')->get();

        return view('pages/home', ['users' => $users]);

    }
     public function producthome()
    {
        //
        //return view('admin/pages/header');
       $users = DB::table('product')->get();

        return view('pages/home', ['users' => $users]);

    }

       public function save_user()
    {
        //
        //return view('admin/pages/header');
        $sub=Input::get('sub');
        if(isset($sub))
        {
        $title = Input::get('title');
        $link = Input::get('link');
        $dup=DB::table('product')
            ->select('title')
            ->orderBy('pid', 'desc')
            ->value('title');
            if($dup!=$title)
            {
        $id= DB::table('product')->insertGetId(
          ['title'=>$title,'link'=>$link]
            );
         if($id!='')
         {
            
           return redirect('/admin');
         }
         else{
            ?>
            <script type="text/javascript">
            alert('not inserted');
        </script>
            <?php
         }

            }
          }
      }

      public function proshow($id)
    {
        $users = DB::table('product')->get()->where('pid',$id);

        return view('pages/editpro', ['users' => $users]);
    
         }
          public function save_pro()
    {

         $sub=Input::get('sub');
        if(isset($sub))
        {
            
             $id = Input::get('hid');
             $title1 = Input::get('title1');
             $link = Input::get('link');
            
            $sc=DB::table('product')
            ->where('pid', $id)
            ->update(['title' => $title1,'link'=>$link]);
            if($sc!='')
            {
              return redirect('/product');  
            }
           }
    }

    public function delpro($id)
        {

           $sc=DB::table('product')->where('pid',$id)->delete();
           if($sc!='')
           {
             return redirect('/product'); 
           }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
