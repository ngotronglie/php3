<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "list game";
        $ListGame = game::all();

        return view('musican.list-music', compact('title', 'ListGame'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'add game';
        return view('musican.add-music', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'game_title' => 'required',
                'developer' => 'required',
                'release_year' => 'required',
            ], [
                'game_title.required' => 'vui long nhap ten game',
                'developer.required' => 'vui long nhap ten developer',
                'release_year.required' => 'vui long nhap nam san xuat',
            ]);
        }
        $param = $request->except('_token');
        if ($request->hasFile('cover_art')) {
            $filePath = $request->file('cover_art')->store('uploads/game', 'public');
        } else {
            $filePath = null;
        }
        $param['cover_art'] = $filePath;
        game::create($param);
        return redirect()->route('list-game')->with('message', 'them thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = game::find($id);
        $title = 'edit game';
        return view('musican.update-music', compact('title', 'game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = game::findOrFail($id);
        if ($request->isMethod('PUT')) {
            $param = $request->except('_token', '_method');

            // Xác thực dữ liệu đầu vào
            $request->validate([
                'game_title' => 'required',
                'developer' => 'required',
                'release_year' => 'required',
            ], [
                'game_title.required' => 'Vui lòng nhập tên game',
                'developer.required' => 'Vui lòng nhập tên developer',
                'release_year.required' => 'Vui lòng nhập năm sản xuất',
            ]);

            // Lấy tất cả các tham số trừ '_token'

            // Xử lý việc upload file cover_art
            if ($request->hasFile('cover_art')) {
                // Nếu đã có ảnh cũ, kiểm tra và xóa nếu nó tồn tại
                if ($game->cover_art && Storage::disk('public')->exists($game->cover_art)) {
                    Storage::disk('public')->delete($game->cover_art);
                }
                // Lưu file ảnh mới và lấy đường dẫn
                $filePath = $request->file('cover_art')->store('uploads/game', 'public');
            } else {
                // Nếu không có file mới, giữ nguyên đường dẫn ảnh cũ
                $filePath = $game->cover_art;
            }

            // Cập nhật đường dẫn ảnh mới vào tham số
            $param['cover_art'] = $filePath;

            // Cập nhật dữ liệu game
            $game->update($param);

            // Chuyển hướng về route `update-game` với thông báo thành công
            return redirect()->route('list-game')->with('message', 'Sửa thành công');
        }
        // Tìm game theo ID, nếu không tìm thấy sẽ trả về lỗi 404

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = game::find($id);
        $game->delete();
        if ($game->cover_art && Storage::disk('public')->exists($game->cover_art)) {
            Storage::disk('public')->delete($game->cover_art);
        }
        return redirect()->route('list-game')->with('message', 'xoa thanh cong');
    }
}
