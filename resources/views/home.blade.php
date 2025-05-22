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
                <article class="card bg-base-100 shadow mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Popular Categories</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="card bg-base-200">
                                <div class="card-body">
                                    <h3 class="card-title">Web Development</h3>
                                    <p>Latest post: 2 hours ago</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn btn-sm btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat other categories -->
                        </div>
                    </div>
                </article>

                <!-- Recent Threads -->
                <article class="card bg-base-100 shadow">
                    <div class="card-body">
                        <h2 class="card-title">Recent Threads</h2>
                        <div class="overflow-x-auto">
                            <table class="table">
                                <tbody>
                                    <!-- Thread Items -->
                                    <tr class="hover">
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="mask mask-circle w-12 h-12">
                                                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="User avatar" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="font-bold">How to use DaisyUI with React?</div>
                                                    <div class="text-sm opacity-50">Web Development</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            12 replies<br>
                                            <span class="text-sm">Last post 2h ago</span>
                                        </td>
                                    </tr>
                                    <!-- Repeat other threads -->
                                </tbody>
                            </table>
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
                            <li><a class="hover:bg-base-200">New post in Web Development</a></li>
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

    <x-footer-banner />

    <!-- Floating Action Button -->
    <div class="fixed bottom-4 right-4">
        <button class="btn btn-primary btn-circle btn-lg shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    </div>
</body>
</html>
</div>