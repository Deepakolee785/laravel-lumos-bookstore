<?php

namespace App\Providers;
use App\Models\Book;
use App\Models\Group;
use App\Models\College;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['college_group_books.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['college_group_books.fields'], function ($view) {
            $groupItems = Group::pluck('name','id')->toArray();
            $view->with('groupItems', $groupItems);
        });
        View::composer(['college_group_books.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $groupItems = Group::pluck('name','id')->toArray();
            $view->with('groupItems', $groupItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $groupItems = Group::pluck('name','id')->toArray();
            $view->with('groupItems', $groupItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $bookItems = Book::pluck('title','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $groupItems = Group::pluck('name','id')->toArray();
            $view->with('groupItems', $groupItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $bookItems = Book::pluck('name','id')->toArray();
            $view->with('bookItems', $bookItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $groupItems = Group::pluck('name','id')->toArray();
            $view->with('groupItems', $groupItems);
        });
        View::composer(['college_group_book.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        View::composer(['groups.fields'], function ($view) {
            $collegeItems = College::pluck('name','id')->toArray();
            $view->with('collegeItems', $collegeItems);
        });
        //
    }
}