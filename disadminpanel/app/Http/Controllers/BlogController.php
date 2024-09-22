<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Role;
use App\Models\User;
use Auth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs', 'roles','users'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('blogs.create', compact('roles','users'));
    }

    // Store a newly created blog in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:published,draft'
        ]);
        $blog = new Blog();
        $blog->user_id = Auth::user()->id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->status = $request->status;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $blog->image = basename($path);
        }

        // Oturum açma kontrolü
        if (auth()->check()) {
            $blog->user_id = auth()->id(); // Kullanıcı ID'sini al
            $blog->role_id = auth()->user()->role_id; // Rol ID'sini al
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to create a blog.');
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }


    // Display the specified blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $roles = Role::all(); // Rolleri ekle
        return view('blogs.show', compact('blog', 'roles'));
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $roles = Role::all(); // Rolleri ekle
        return view('blogs.edit', compact('blog', 'roles'));
    }

    // Update the specified blog in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:published,draft'
        ]);
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->status = $request->status;

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->move(public_path('bloglar'), $fileName);
            $blog->image = 'bloglar/' . $fileName;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Remove the specified blog from storage
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            Storage::delete('public/images/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
