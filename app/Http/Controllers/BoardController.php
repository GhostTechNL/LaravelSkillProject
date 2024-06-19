<?php declare(strict_type=1);

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class BoardController extends Controller
{
    private $headers = [];

    public function getBoardView()
    {
        $boarditems = Board::all();;

        return view('pages.home', ['boarditems' => $boarditems]);
    }

    public function updateBoard(Request $request): RedirectResponse
    {
        Board::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/');
    }

    public function deleteBoardItem(Request $request, int $id): RedirectResponse
    {
        Board::destroy($id);

        return redirect('/');
    }
}