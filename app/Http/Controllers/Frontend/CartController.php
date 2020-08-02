<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Cart;

class CartController extends Controller
{
    public function addCart(Request $request){

        // dd($request->all()['books']);
        Cart::destroy();
        $data = array();

        foreach($request->all()['books'] as $id){
            $book = Book::find($id);
            $b = array();
            $b['id'] = $book->id;
            $b['name'] = $book->title;
            $b['qty'] = 1;
            $b['price'] = $book->price;
            $b['weight'] = 1;
            $b['options']['cover'] = $book->cover;

            array_push($data,$b);
        }
        Cart::add($data);

        return redirect('/check-out'); 
              
    }

    public function clearCart(){
        Cart::destroy();
        // return redirect()->back()->with('message','Cart Cleared successfully');
        return redirect()->back()->with('message','Cart Cleared Successfully!');
    }
    public function addBookToCart($id){
        $book = Book::find($id);
        // dd($book);
        Cart::add(['id' => $book->id, 'name' => $book->title, 'qty' => 1, 'price' => $book->price, 'weight' => 1, 'options' => ['cover' => $book->cover]]);
            
        return redirect()->back()->with('message','Successfully added to cart');
    }

    public function deleteBookFromCart($rowId){
        // dd($rowId);
        Cart::remove($rowId);
    }
    public function updateQty(Request $request){
        // dd($request->newQty);
        Cart::update($request->rowId, $request->newQty);
    }
}
