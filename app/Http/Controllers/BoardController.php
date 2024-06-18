<?php declare(strict_type=1);

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BoardController extends Controller
{
    private $headers = [];

    public function getBoardView()
    {
        $boarditems = Board::all();;

        return view('pages.home', ['boarditems' => $boarditems]);
    }

    public function updateBoard(Request $request)
    {
        Board::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()
                ->view('/',[$message => 'updated'])
                ->withHeaders($headers);
    }

    public function deleteItem()
    {
        return response()
                ->view('/',[$message => 'updated'])
                ->withHeaders($headers);
    }
}