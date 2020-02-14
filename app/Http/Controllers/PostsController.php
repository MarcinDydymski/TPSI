<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Repositories\UserRepository;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('title','desc')->get();
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        $posts = Post::orderBy('title','desc')->paginate(5);
        

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('posts.create');
       /* if(Auth::user()->type != 'doctor' && Auth::user()->type != 'admin')
        {
            return redirect()->route('login');
        }
        */
        
        return view('posts.create',["footerYear"=>date("Y") ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if(Auth::user()->type != 'doctor' && Auth::user()->type != 'admin')
        {
            return redirect()->route('login');
        }*/

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
        
                
      /*  $doctor = new User;
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->password = bcrypt($request->input('password'));
        $doctor->phone = $request->input('phone');
        $doctor->address = $request->input('address');
        $doctor->pesel = $request->input('pesel');
        $doctor->status = $request->input('status');
        $doctor->type = 'doctor';
        $doctor->save();

        $doctor->specializations()->sync($request->input('specializations'));

        return redirect()->action('DoctorController@index');
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
        $post = Post::find($id);
        //$postString = $post;
        return view('posts.show')->with('post',$post);
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->with('post',$post);
       /* if(Auth::user()->type != 'doctor' && Auth::user()->type != 'admin')
        {
            return redirect()->route('login');
        }

        //$doctor = $userRepo->update(["name" => "Dydymski Paweł"], $id);
        $doctor = $userRepo->find($id);
        $specializations = Specialization::all();
        
        return view('doctors.edit',["specializations"=> $specializations,
                                    "doctor"=> $doctor,
                                    "footerYear"=>date("Y") ]);
        */
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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');


        /*if(Auth::user()->type != 'doctor' && Auth::user()->type != 'admin')
        {
          return redirect()->route('login');
        }
    
        $doctor = $userRepo->delete($id);
    
        return redirect('doctors');
        */
    }
}
