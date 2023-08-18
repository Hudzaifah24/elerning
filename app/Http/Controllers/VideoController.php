<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::get();
        
        return view('pages.admin.videos.index', compact('videos'));
    }

    public function create() {
        return view('pages.admin.videos.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'link' => 'required|url',
            'desc' => 'required',
        ]);

        Video::create($validated);
        
        return redirect()->route('admin.video.index');
    }

    public function show($id) {
        $video = Video::find($id);
        
        return view('pages.admin.videos.show', compact('video'));
    }

    public function edit($id) {
        $video = Video::find($id);
        
        return view('pages.admin.videos.edit', compact('video'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'link' => 'required|url',
            'desc' => 'required',
        ]);

        $video = Video::find($id);

        $video->update($validated);

        return redirect()->route('admin.video.index');
    }

    public function destroy($id) {
        $video = Video::find($id);

        if ($video->userVideo) {
            $video->userVideo()->delete();
        }
        
        $video->delete();

        return redirect()->route('admin.video.index');
    }

    public function destroy_all(Request $request) {
        if ($request->id) {
            foreach ($request->id as $key => $value) {
                $video = Video::find($key);
    
                if ($video->userVideo) {
                    $video->userVideo()->delete();
                }
                
                $video->delete();
            }
        }

        return redirect()->route('admin.video.index');
    }
}
