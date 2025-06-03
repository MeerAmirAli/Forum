<!-- Forum Navigation Bar -->
<nav class="navbar bg-base-100 shadow-lg px-4 sm:px-8">
    <div class="flex-1">
        <a href="{{ url('/') }}" class="btn btn-ghost text-xl">Tech Forum</a>
        <div class="hidden sm:flex gap-1">
            <a href="{{ url('/home') }}" class="btn btn-ghost btn-sm">Home</a>
            <a href="{{ url('/categories') }}" class="btn btn-ghost btn-sm">Categories</a>
            <a href="{{ url('/latest') }}" class="btn btn-ghost btn-sm">Latest Posts</a>
            <a href="{{ url('question') }}" class="btn btn-primary btn-sm text-white">Ask a Question</a>
        </div>
    </div>

    <div class="flex-none gap-2">
        <!-- Search Bar -->
        <form method="GET" action="{{ url('/search') }}" class="join">
            <input type="text" name="query" placeholder="Search..." class="input input-bordered join-item" />
            <button type="submit" class="btn join-item">Search</button>
        </form>

        <!-- User Dropdown -->
        @auth
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="{{ Auth::user()->profile_photo_url ?? 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg' }}" alt="User avatar" />
                </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="">Profile</a></li>
                <li><a href="{{ url('/settings') }}">Settings</a></li>
                <li>
                    <form method="POST" action="">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        @else
       <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Login</a>
<a href="{{ route('signup') }}" class="btn btn-primary btn-sm text-white">Register</a>


        @endauth
    </div>
</nav>
