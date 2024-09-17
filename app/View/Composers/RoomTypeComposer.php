<?php
 
namespace App\View\Composers;

use App\Models\Roomtype;
use Illuminate\View\View;
 
class RoomTypeComposer
{

    protected $users;
    public function __construct() {

    }
    
    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        $roomtypes =  Roomtype::select('name' , 'id', 'parent_id')->where('active', 1)->orderByDesc('id')->get();
        $view->with('roomtypes', $roomtypes);
    }
}