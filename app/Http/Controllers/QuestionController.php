<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Exception;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */




    public function index()
    {
        $categories = Category::all();
        return view('questions', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('questions', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'desc' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'tags' => 'required|string|max:255'
        ]);

        try {
            Question::create([
                'user_id' => Auth::id(),
                'category_id' => $validated['category_id'],
                'title' => $validated['title'],
                'desc' => $validated['desc'],
                'tags' => $validated['tags'],
            ]);

            return redirect()->route('question.index')->with('success', 'Question has been added');
        } catch (\Exception $e) {
            Log::error('Question Added error' . $e->getMessage());
            return back()->withInput()->with('Error', 'Failed to Add Question');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::with(['questions.user'])->findOrFail($id);
        return view('category', compact('category'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
