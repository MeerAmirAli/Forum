<!-- Navigation Bar -->
<nav class="navbar bg-base-100 shadow-lg px-4 sm:px-8">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">Tech Forum</a>
            <div class="hidden sm:flex gap-1">
                <a href="home" class="btn btn-ghost btn-sm">Home</a>
                <a href="home" class="btn btn-ghost btn-sm">Categories</a>
                <a href="latest" class="btn btn-ghost btn-sm">Latest Posts</a>
                <a href="latest" class="btn btn-ghost btn-sm">Ask Post</a>
            </div>
        </div>
        <div class="flex-none gap-2">
            <form class="join">
                <input type="text" placeholder="Search..." class="input input-bordered join-item" />
                <button class="btn join-item">Search</button>
            </form>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="User avatar" />
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Profile</a></li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>