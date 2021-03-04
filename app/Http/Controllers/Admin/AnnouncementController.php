<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Comment;
class AnnouncementController extends Controller
{
    public function show()
    {
        $announcements = Announcement::all();

        return view('announcements.show', ['announcements' => $announcements]);
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);

        return view('admin.announcements.edit', ['announcement' => $announcement]);
    }

    public function update($id, Request $request)
    {
        $announcement = Announcement::findOrFail($id);

        $announcement->enabled = $request->get();
        $announcement->save();

        return redirect()->route('admin.announcements.show');
    }
}
