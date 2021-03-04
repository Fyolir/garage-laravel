<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Comment;
class AnnouncementController extends Controller
{
    public function show(Request $request)
    {
        $announcements = Announcement::where('enabled', '1')->get();

        return view('announcements.show', ['announcements' => $announcements]);
    }

    public function details($id)
    {
     $annoucement = Announcement::findOrFail($id);
     $comments = Comment::where('announcement_id', $id)->get();

        return view('announcements.details', ['announcement' => $annoucement, 'comments' => $comments]);
    }

    public function disable($id)
    {
        $annoucement = Announcement::findOrFail($id);

        $announcement->update([
           'enabled' => '0',
        ]);
    }
}
