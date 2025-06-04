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
                        <div class="overflow-x-auto">
                            <div class="overflow-x-auto">
    <div class="space-y-4">
        @foreach ($threads as $thread)
            <div class="mb-4 p-4 border rounded shadow">
                <h2 class="text-xl font-bold text-blue-700">{{ $thread->title }}</h2>
                <p class="text-sm text-gray-600">{{ $thread->user->name }} | {{ $thread->created_at->diffForHumans() }}</p>
                <p class="text-gray-700 mt-2">{{ Str::limit($thread->body, 150) }}</p>
                <a href="{{ route('threads.show', $thread) }}" class="text-blue-600 text-sm">View Thread</a>
            </div>
        @endforeach
    </div>
</div>

                        </div>
                    </div>
                </article>
            </section>

            <!-- Sidebar -->
            <aside class="md:w-1/4">
                <div class="card bg-base-100 shadow">
                    <div class="card-body">
                        <h2 class="card-title">Recent Activity</h2>
                        <ul class="menu">
                            <ul class="text-sm text-gray-700">
    @foreach ($activities as $activity)
        <li class="mb-1">
            <strong>{{ $activity->user->name }}</strong> {{ $activity->type }}
            <br><span class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}</span>
        </li>
    @endforeach
</ul>

                            <!-- Other activity items -->
                        </ul>
                    </div>
                </div>
                
                <div class="card bg-base-100 shadow mt-4">
                    <div class="card-body">
                        <h2 class="card-title">Popular Tags</h2>
                        <div class="flex flex-wrap gap-2">
                            <span class="badge badge-primary">React</span>
                            <span class="badge badge-secondary">JavaScript</span>
                            <!-- Other tags -->
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
</body>
</html>
</div>