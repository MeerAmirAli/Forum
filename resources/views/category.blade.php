<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
  <!DOCTYPE html>
<html lang="en" data-theme="light" data-theme-version="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Forum</title>
    <!-- DaisyUI 5.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen flex flex-col">
    <x-navbar-banner />  


<div class="max-w-4xl mx-auto mb-40 mt-12 px-6 py-8 bg-base-100 rounded-2xl shadow-lg border border-base-300">
    <h1 class="text-3xl font-bold text-primary mb-8">Category: {{ $category->name }}</h1>

    @forelse ($category->questions as $question)
        <div class="mb-6 p-6 rounded-xl border border-base-200 bg-base-200 hover:bg-base-300 transition">
            <h3 class="text-2xl font-semibold text-blue-700 mb-2 hover:underline">
                <a onclick="question('{{$question->user->name}}','{{$question->category->name}}','{{$question->title}}','{{$question->desc}}','{{$question->tags}}')">{{ $question->title }}</a>
            </h3>
            <p class="text-sm text-gray-500 mb-2">By <span class="font-medium text-gray-700">{{ $question->user->name ?? 'Anonymous' }}</span></p>
            <p class="text-gray-800">{{ Str::limit($question->desc, 150) }}</p>
        </div>
    @empty
        <p class="text-gray-500">No questions found in this category.</p>
    @endforelse
</div>

<!-- Question Modal -->
<dialog id="questionModal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box max-w-2xl bg-white p-6 rounded-lg shadow-lg relative">
        <button onclick="closeQuestionModal()" class="btn btn-sm btn-circle absolute right-4 top-4">✕</button>

        <h2 id="modalTitle" class="text-2xl font-bold text-blue-700 mb-2"></h2>
        <p id="modalUser" class="text-sm text-gray-600 mb-2">By User</p>
        <p id="modalDesc" class="mb-4 text-gray-800">Question Description...</p>

        <div id="modalComments" class="space-y-3">
            <p class="font-semibold">Comments:</p>
            <!-- Comments dynamically added here -->
        </div>
    </div>
</dialog>




<x-footer-banner />
<script>
    function question(user, category_name, question_title, question_desc, question_tags, comments = [] ){
        document.getElementById('modalTitle').innerHTML = question_title;
        document.getElementById('modalUser').innerHTML = user;
        document.getElementById('modalDesc').innerHTML = question_desc;

        const commentsDiv = document.getElementById('modalComments');
        commentsDiv.innerHTML = '<p class="font-semibold">Comments:</p>';

        if (comments.length > 0) {
        comments.forEach(comment => {
            const div = document.createElement('div');
            div.className = 'p-3 bg-gray-100 rounded';
            div.innerHTML = `<p class="text-sm text-gray-600">${comment.user}</p><p>${comment.text}</p>`;
            commentsDiv.appendChild(div);
        });
    } else {
        commentsDiv.innerHTML += '<p class="text-gray-500">No comments yet.</p>';
    }

        document.getElementById('questionModal').showModal();
    }
    function closeQuestionModal(){
        document.getElementById('questionModal').close();
    }
</script>
</body>
</html>
</div>
