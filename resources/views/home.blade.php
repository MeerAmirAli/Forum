<div>
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

    <!-- Main Content -->
    <main class="container mx-auto grow p-4">
        <div class="flex flex-col md:flex-row gap-4">
            <!-- Main Section -->
            <section class="grow md:w-3/4">
                <!-- Categories -->
                <!-- Categories -->
<article class="card bg-base-100 shadow mb-4">
    <div class="card-body">
        <h2 class="card-title">Popular Categories</h2>
        @foreach ($categories as $category)
            <div class="card bg-base-200 mb-2">
                <div class="card-body">
                    <h3 class="card-title">{{ $category->name }}</h3>
                    <div class="card-actions justify-end">
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-sm btn-primary">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</article>


                <!-- Recent Threads -->
<article class="card bg-base-100 shadow">
    <div class="card-body">
        <h2 class="card-title">Recent Threads</h2>
        <div class="space-y-4">
            @forelse ($threads as $thread)
                <div class="border p-4 rounded hover:shadow transition">
                    <h3 class="text-xl font-semibold text-blue-600">
                        {{ $thread->title }}
                    </h3>
                    <p class="text-sm text-gray-600">
                        Asked by {{ $thread->user->name ?? 'Anonymous' }} • {{ $thread->created_at->diffForHumans() }}
                    </p>
                    <p class="mt-2 text-gray-700">
                        {{ \Illuminate\Support\Str::limit($thread->desc, 150) }}
                    </p>
                    <a onclick="question('{{$thread->title}}','{{$thread->user->name }}','{{$thread->desc}}')" class="text-blue-500 text-sm mt-1 inline-block">View Full Question</a>
                </div>
            @empty
                <p>No recent threads found.</p>
            @endforelse
        </div>
    </div>
</article>

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


            </section>

            <!-- Sidebar -->
            <aside class="md:w-1/4">
            
                <div class="card bg-base-100 shadow mt-4">
                    <div class="card-body">
                        <h2 class="card-title">Popular Tags</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach($categories as $category)
    

    @foreach($category->questions as $question)
        

        @php
            $tags = explode(',', $question->tags); // split comma-separated tags
        @endphp

        @foreach($tags as $tag)
            <span class="badge badge-secondary">{{ trim($tag) }}</span>
        @endforeach
    @endforeach
@endforeach

                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    
    <!-- Floating Action Button -->
    <div class="fixed bottom-4 right-4">
        <button class="btn btn-primary btn-circle btn-lg shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    </div>
    
    <x-footer-banner />

    <script>
    function question(question_title, user, desc,comments = []){
        document.getElementById('modalTitle').innerHTML = question_title;
        document.getElementById('modalUser').innerHTML = user;
        document.getElementById('modalDesc').innerHTML = desc;

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