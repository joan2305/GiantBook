<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookcategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PageController extends AppController
{
    public function index(){
        $books = Book::all();
        return view('index', compact('books'));
    }
    public function detail(Request $request){
        $book = Book::findOrFail($request->id);
        return view('detail', compact('book'));
    }
    public function publisher(){
        $publishers = Publisher::all();
        return view('publisher.publisher', compact('publishers'));
    }
    public function publisherDetail($id){
        $publisher = Publisher::findOrFail($id);
        $books = Book::where('publisher_id', '=', $id)->get();
        return view('publisher.detail', compact('publisher', 'books'));
    }
    public function showCategory($id){
        $bookcategories = Bookcategory::where('category_id', '=', $id)->get();
        return view('category.index', compact('bookcategories'));
    }
    public function contact(){
        return view('contact');
    }
    public function search(Request $request){
        $books = Book::where('title', 'like', '%'.$request->searchInput.'%')->get();

        return view('result', compact('books'));
    }
}