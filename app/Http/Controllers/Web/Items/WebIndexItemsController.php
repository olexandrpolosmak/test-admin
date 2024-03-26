<?php
/**
 * Description of PublicIndexItemsController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Web\Items;


use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\View\View;

class WebIndexItemsController extends Controller
{
    public function __invoke(): View
    {
        $items = Item::all();

        return view('web.products', [
            'items' => $items,
        ]);
    }
}
