<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index',[
            'books_data' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('books.create',[
            'authors_list' => Author::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        

        //Fetching the selected Authors information from the Database:
        $selected_authors = Author::find(request('selected_authors'));


        //Creating the Book and saving it to the '$book' variable:
        $book = Book::create(request(['name','description','isbn']));


        //Attaching the selected author's information with the Book:
        $book->authors()->attach($selected_authors);


        return redirect('/books');
    

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
        $book = Book::find($id);
        $authors_list = Author::all();
        return view('books.edit', compact('book', 'authors_list'));
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


        //Finding the existing Book:
        $book = Book::find($id);

        
        //Finding the existing Authors attached with this Book:
        $existing_authors = $book->authors;


        //Deleting all attachments with existing Authors:
        $book->authors()->detach($existing_authors);


        //Updating the new Book Information:
        $book->update(request(['name','description','isbn']));


        //Fetching the new selected authors information from the database:
        $selected_authors = Author::find(request('selected_authors'));
        
        
        //Attaching the new selected author's information with the book:
        $book->authors()->attach($selected_authors);


        return redirect('/books');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //Finding the existing Book:
        $book = Book::find($id);

        //Finding the existing Authors attached with this Book:
        $existing_authors = $book->authors;

        //Deleting all attachments with existing Authors:
        $book->authors()->detach($existing_authors);
        
        //Deleting the Book information:
        $book->delete();
        
        return back();
        
    }
}
