<?php 
namespace App\Http\ViewComposers;
 
use Illuminate\Contracts\View\View;
use App\Institution as Institution;

use Auth;
class InstitutionComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        if(Auth()->guard('web_institution')->check())
        {
            $institution = Auth::guard('web_institution')->user();
            $view->with('institution', $institution);
        }
        
    }
 
}