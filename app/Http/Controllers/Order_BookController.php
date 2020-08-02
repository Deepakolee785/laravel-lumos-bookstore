<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrder_BookRequest;
use App\Http\Requests\UpdateOrder_BookRequest;
use App\Repositories\Order_BookRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Order_BookController extends AppBaseController
{
    /** @var  Order_BookRepository */
    private $orderBookRepository;

    public function __construct(Order_BookRepository $orderBookRepo)
    {
        $this->orderBookRepository = $orderBookRepo;
    }

    /**
     * Display a listing of the Order_Book.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderBooks = $this->orderBookRepository->all();

        return view('order__books.index')
            ->with('orderBooks', $orderBooks);
    }

    /**
     * Show the form for creating a new Order_Book.
     *
     * @return Response
     */
    public function create()
    {
        return view('order__books.create');
    }

    /**
     * Store a newly created Order_Book in storage.
     *
     * @param CreateOrder_BookRequest $request
     *
     * @return Response
     */
    public function store(CreateOrder_BookRequest $request)
    {
        $input = $request->all();

        $orderBook = $this->orderBookRepository->create($input);

        Flash::success('Order  Book saved successfully.');

        return redirect(route('orderBooks.index'));
    }

    /**
     * Display the specified Order_Book.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderBook = $this->orderBookRepository->find($id);

        if (empty($orderBook)) {
            Flash::error('Order  Book not found');

            return redirect(route('orderBooks.index'));
        }

        return view('order__books.show')->with('orderBook', $orderBook);
    }

    /**
     * Show the form for editing the specified Order_Book.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderBook = $this->orderBookRepository->find($id);

        if (empty($orderBook)) {
            Flash::error('Order  Book not found');

            return redirect(route('orderBooks.index'));
        }

        return view('order__books.edit')->with('orderBook', $orderBook);
    }

    /**
     * Update the specified Order_Book in storage.
     *
     * @param int $id
     * @param UpdateOrder_BookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrder_BookRequest $request)
    {
        $orderBook = $this->orderBookRepository->find($id);

        if (empty($orderBook)) {
            Flash::error('Order  Book not found');

            return redirect(route('orderBooks.index'));
        }

        $orderBook = $this->orderBookRepository->update($request->all(), $id);

        Flash::success('Order  Book updated successfully.');

        return redirect(route('orderBooks.index'));
    }

    /**
     * Remove the specified Order_Book from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderBook = $this->orderBookRepository->find($id);

        if (empty($orderBook)) {
            Flash::error('Order  Book not found');

            return redirect(route('orderBooks.index'));
        }

        $this->orderBookRepository->delete($id);

        Flash::success('Order  Book deleted successfully.');

        return redirect(route('orderBooks.index'));
    }
}
