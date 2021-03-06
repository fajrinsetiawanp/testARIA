<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart as Cart;


class WishlistController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.wishlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('/frontend/wishlist')->withSuccessMessage('Produk sudah ada di favorit kamu!');
        }

        Cart::instance('wishlist')->add($request->kode_sku, $request->judul, 1, $request->harga);
        return redirect('/frontend/wishlist')->withSuccessMessage('Produk telah di tambahkan ke favorit!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);
        return redirect('/frontend/wishlist')->withSuccessMessage('Produk berhasil dihapus dari favorit!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();
        return redirect('/frontend/wishlist')->withSuccessMessage('Favorit berhasil di kosongkan!');
    }

    /**
     * Switch item from wishlist to shopping cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);

        Cart::instance('wishlist')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('/frontend/cart')->withSuccessMessage('Produk sudah ada di keranjang kamu!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price);
        return redirect('/frontend/cart')->withSuccessMessage('Produk berhasil di pindahkan ke keranjang!');

    }
}
