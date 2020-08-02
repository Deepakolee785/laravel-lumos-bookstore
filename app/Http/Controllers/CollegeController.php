<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Repositories\CollegeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class CollegeController extends AppBaseController
{
    /** @var  CollegeRepository */
    private $collegeRepository;

    public function __construct(CollegeRepository $collegeRepo)
    {
        $this->collegeRepository = $collegeRepo;
    }

    /**
     * Display a listing of the College.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $colleges = $this->collegeRepository->all();

        return view('colleges.index')
            ->with('colleges', $colleges);
    }

    /**
     * Show the form for creating a new College.
     *
     * @return Response
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created College in storage.
     *
     * @param CreateCollegeRequest $request
     *
     * @return Response
     */
    public function store(CreateCollegeRequest $request)
    {
        $input = $request->all();

        $college = $this->collegeRepository->create($input);

        Flash::success('College saved successfully.');

        return redirect(route('colleges.index'));
    }

    /**
     * Display the specified College.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $college = $this->collegeRepository->find($id);
        $college = DB::table('colleges')
            ->join('groups', 'colleges.id', '=', 'groups.college_id')
            // ->join('groups', 'groups.id', '=', 'college_group_books.group_id')
            ->where('colleges.id', '=', $id)
            ->select('colleges.id AS college_id','colleges.name AS college', 'groups.name AS group')
            ->get();
        // dd($college);
        if (empty($college)) {
            Flash::error('College not found');
            $c = DB::table('colleges')->find($id);
            return redirect(route('colleges.index'));
        }

        if($college->count() === 0){
            $c = DB::table('colleges')->find($id);
            return view('colleges.show', compact('college','c'));
        }

        return view('colleges.show', compact('college'));
    }

    /**
     * Show the form for editing the specified College.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $college = $this->collegeRepository->find($id);

        if (empty($college)) {
            Flash::error('College not found');

            return redirect(route('colleges.index'));
        }

        return view('colleges.edit')->with('college', $college);
    }

    /**
     * Update the specified College in storage.
     *
     * @param int $id
     * @param UpdateCollegeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCollegeRequest $request)
    {
        $college = $this->collegeRepository->find($id);

        if (empty($college)) {
            Flash::error('College not found');

            return redirect(route('colleges.index'));
        }

        $college = $this->collegeRepository->update($request->all(), $id);

        Flash::success('College updated successfully.');

        return redirect(route('colleges.index'));
    }

    /**
     * Remove the specified College from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $college = $this->collegeRepository->find($id);

        if (empty($college)) {
            Flash::error('College not found');

            return redirect(route('colleges.index'));
        }

        $this->collegeRepository->delete($id);

        Flash::success('College deleted successfully.');

        return redirect(route('colleges.index'));
    }
}
