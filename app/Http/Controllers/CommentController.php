<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'content' => 'required'
        ]);

        try {
            Comment::create([
                'user_id' => Auth::id(),
                'question_id' => $validated['question_id'],
                'content' => $validated['content']
            ]);

            return redirect()->route('latest.index')->with(
                'success',
                'Comment has been added'
            );
        } catch (ValidationException $e) {
            // Automatically redirects back with validation errors
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Comment Add Error: ' . $e->getMessage());
            return back()->with('error', 'Failed to add comment. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        //
    }
}
