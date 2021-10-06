<?php

namespace App\Http\Controllers;

use App\Models\Item;

class NewsController extends Controller {
    private $types;

    public function __construct() {
        $this->types = array(
            'top',
            'ask',
            'job',
            'new',
            'show'
        );
    }

    public function index($type = 'top', $page = 1, $limit = 10) {
        $items = Item::where('is_' . $type, true)->forPage($page, $limit)->get();

        $page_data = array(
            'title' => $type,
            'types' => $this->types,
            'items' => $items
        );

        $data = [
            'message' => 'success',
            'data' => $page_data
        ];

        return response($data, 200);
    }
}
