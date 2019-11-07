<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use Validator;
use Illuminate\Http\Request as RequestAlias;
use App\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Homepage extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(2);
        $categories = Category::orderBy('name', 'ASC')->get();
        $pages = Page::orderBy('order', 'ASC')->get();
        return view('front.homepage', compact('articles', 'categories', 'pages'));
    }

    public function single($category, $slug)
    {
        $category = Category::whereSlug($category)->first() ?? abort(403, 'Böyle bir kategori bulunamadı.');
        $article = Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403, 'Böyle bir yazı bulunamadı.');
        $article->increment('hit');
        $data['article'] = $article;
        $data['categories'] = Category::orderBy('name', 'ASC')->get();
        return view('front.single', $data);
    }

    public function category($slug)
    {
        $category = Category::whereSlug($slug)->first() ?? abort(403, 'Böyle bir kategori bulunamadı.');
        $data['category'] = $category;
        $data['articles'] = Article::where('category_id', $category->id)->orderBy('created_at', 'DESC')->get();
        $data['categories'] = Category::orderBy('name', 'ASC')->get();
        return view('front.category', $data);
    }

    public function page($slug)
    {
        $page = Page::whereSlug($slug)->first() ?? abort(403, 'Böyle bir sayfa bulunamadı.');
        $data['page'] = $page;
        $pages = Page::orderBy('order', 'ASC')->get();
        return view('front.page', $data);

    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contactpost(RequestAlias $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'topic' => 'required',
            'message' => 'required|min:10'

        ];

        $validate = Validator::make($request->post(), $rules);

        if ($validate->fails()) {
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->topic = $request->topic;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success', 'Mesaj iletilmiştir. Teşekkürler :D');
    }
}
