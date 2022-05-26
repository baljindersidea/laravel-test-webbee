<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{
    public function getMenuItems() {
        echo "<pre>";
        print_r( MenuItem::with('children')
            ->whereNull('parent_id')->get()->toArray() );
        die;
    }
}
