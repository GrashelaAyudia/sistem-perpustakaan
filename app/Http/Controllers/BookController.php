<?php

namespace App\Http\Controllers;

use App\Exports\BookExport;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class BookController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::all();
        $active = 'book';

        return view('pages.book.index', compact('books', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illumin ate\Http\Response
     */
    public function create()
    {

        $active = 'book-create';

        return view('pages.book.create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->all();
        $data['cover'] = $request->file('cover')->store('assets/book', 'public');

        Book::create($data);

        SweetAlert::success('Success', 'Data Berhasil Ditambahkan');

        return redirect()->route('buku.index');
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
        $book = Book::findOrFail($id);
        $active = 'book';

        return view('pages.book.edit', compact('book', 'active'));
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
        $book = Book::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('assets/book', 'public');
        } else {
            $data['cover'] = $book->cover;
        }

        $book->update($data);

        SweetAlert::success('Success', 'Data Berhasil Diubah');

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        SweetAlert::success('Success', 'Data Berhasil Dihapus');

        return redirect()->route('buku.index');
    }


    public function export_excel()
    {
        return Excel::download(new BookExport, 'databuku.xlsx');
    }
}
