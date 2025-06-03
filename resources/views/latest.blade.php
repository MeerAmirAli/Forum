<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <!-- resources/views/questions/show.blade.php -->
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask Question - Tech Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body >

<x-navbar-banner /> 



<div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Latest Questions</h2>

    @forelse ($questions as $question)
        <div class="mb-10 border-b pb-6">
            {{-- Question --}}
            <h3 class="text-xl font-semibold text-blue-700">{{ $question->title }}</h3>
            <p class="text-gray-700 mt-2">{{ $question->desc }}</p>

            <div class="text-sm text-gray-500 mt-2">
                Category: <span class="text-gray-700">{{ $question->category->name ?? 'Uncategorized' }}</span> |
                Tags: <span class="text-gray-700">{{ $question->tags }}</span> |
                By: <span class="text-gray-700">{{ $question->user->name ?? 'Anonymous' }}</span>
            </div>

            {{-- Comments --}}
            <div class="mt-4 pl-4 border-l-2 border-gray-200">
                <h4 class="text-base font-medium text-gray-700 mb-2">Comments</h4>
                @forelse ($question->comments as $comment)
                    <div class="border p-2 mb-2 rounded bg-gray-100 text-sm">
                        <strong>{{ $comment->user->name }}:</strong> {{ $comment->body }}
                    </div>
                @empty
                    <p class="text-sm text-gray-500">No comments yet.</p>
                @endforelse
            </div>

            {{-- Comment form --}}
            @auth
                <form method="POST" action="" class="mt-4">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <textarea name="body" rows="2" class="w-full border rounded p-2 text-sm" placeholder="Add a comment..."></textarea>
                    <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded text-sm hover:bg-blue-700">Post Comment</button>
                </form>
            @else
                <p class="text-sm text-gray-400 mt-2">
                    Please <a href="{{ route('login') }}" class="text-blue-600 underline">login</a> to comment.
                </p>
            @endauth

        </div>
    @empty
        <p class="text-gray-600">No questions found.</p>
    @endforelse

    <div class="mt-6">
        {{ $questions->links() }} {{-- Pagination --}}
    </div>
</div>





<x-footer-banner />

</body>
</html>

</div>
