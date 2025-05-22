<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
        $categories = Category::all();
        return view('questions.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:10|max:255',
            'body' => 'required|min:20',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'sometimes|array'
        ]);

        // This works without User import
        $question = auth()->user()->questions()->create(
            $request->validate([
                'title' => 'required',
                'body' => 'required'
            ])
        );

        if ($request->has('tags')) {
            $question->tags()->attach($request->tags);
        }

        return redirect()->route('questions.show', $question)
            ->with('success', 'Question posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user->questions;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(question $question)
    {
        //
    }
}
