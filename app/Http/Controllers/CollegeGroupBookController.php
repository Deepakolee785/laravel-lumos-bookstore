<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCollegeGroupBookRequest;
use App\Http\Requests\UpdateCollegeGroupBookRequest;
use App\Repositories\CollegeGroupBookRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class CollegeGroupBookController extends AppBaseController
{
    /** @var  CollegeGroupBookRepository */
    private $collegeGroupBookRepository;

    public function __construct(CollegeGroupBookRepository $collegeGroupBookRepo)
    {
        $this->collegeGroupBookRepository = $collegeGroupBookRepo;
    }

    /**
     * Display a listing of the CollegeGroupBook.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $collegeGroupBooks = $this->collegeGroupBookRepository->all();
        $collegeGroupBooks = DB::table('college_group_books AS cgb')
            ->join('colleges AS c', 'c.id', 'cgb.college_id')
            ->join('groups AS g', 'g.id', 'cgb.group_id')
            ->join('books AS b', 'b.id', 'cgb.book_id')
            ->select('cgb.id','cgb.college_id','cgb.group_id','cgb.book_id','b.title as book','c.name AS college','g.name as group')
            ->get(); 
        // dd($collegeGroupBooks);
        return view('college_group_books.index')
            ->with('collegeGroupBooks', $collegeGroupBooks);
    }

    /**
     * Show the form for creating a new CollegeGroupBook.
     *
     * @return Response
     */
    public function create()
    {
        return view('college_group_books.create');
    }

    /**
     * Store a newly created CollegeGroupBook in storage.
     *
     * @param CreateCollegeGroupBookRequest $request
     *
     * @return Response
     */
    public function store(CreateCollegeGroupBookRequest $request)
    {
        $input = $request->all();

        $collegeGroupBook = $this->collegeGroupBookRepository->create($input);

        Flash::success('College Group Book saved successfully.');

        return redirect(route('collegeGroupBooks.index'));
    }

    /**
     * Display the specified CollegeGroupBook.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $collegeGroupBook = $this->collegeGroupBookRepository->find($id);

        if (empty($collegeGroupBook)) {
            Flash::error('College Group Book not found');

            return redirect(route('collegeGroupBooks.index'));
        }

        return view('college_group_books.show')->with('collegeGroupBook', $collegeGroupBook);
    }

    /**
     * Show the form for editing the specified CollegeGroupBook.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $collegeGroupBook = $this->collegeGroupBookRepository->find($id);

        if (empty($collegeGroupBook)) {
            Flash::error('College Group Book not found');

            return redirect(route('collegeGroupBooks.index'));
        }

        return view('college_group_books.edit')->with('collegeGroupBook', $collegeGroupBook);
    }

    /**
     * Update the specified CollegeGroupBook in storage.
     *
     * @param int $id
     * @param UpdateCollegeGroupBookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCollegeGroupBookRequest $request)
    {
        $collegeGroupBook = $this->collegeGroupBookRepository->find($id);

        if (empty($collegeGroupBook)) {
            Flash::error('College Group Book not found');

            return redirect(route('collegeGroupBooks.index'));
        }

        $collegeGroupBook = $this->collegeGroupBookRepository->update($request->all(), $id);

        Flash::success('College Group Book updated successfully.');

        return redirect(route('collegeGroupBooks.index'));
    }

    /**
     * Remove the specified CollegeGroupBook from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $collegeGroupBook = $this->collegeGroupBookRepository->find($id);

        if (empty($collegeGroupBook)) {
            Flash::error('College Group Book not found');

            return redirect(route('collegeGroupBooks.index'));
        }

        $this->collegeGroupBookRepository->delete($id);

        Flash::success('College Group Book deleted successfully.');

        return redirect(route('collegeGroupBooks.index'));
    }
}
