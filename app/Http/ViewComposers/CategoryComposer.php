<?php 
namespace App\Http\ViewComposers;
 
use Illuminate\Contracts\View\View;
use App\Category as Category;

use Auth;
class CategoryComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    	$categories = Category::all();
    	$view->with('categories', $categories);
    }
 
}