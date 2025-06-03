<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <!DOCTYPE html>
<html lang="en" data-theme="light" data-theme-version="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Forum - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-base-200 flex items-center justify-center">
    <div class="w-full max-w-md p-4">
        <!-- Login Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold mb-2">Welcome Back</h1>
                    <p class="text-base-content/70">Login to continue to Tech Forum</p>
                </div>

                <!-- Login Form -->
                <form class="space-y-4" action="/login" method="POST">
                    @csrf
                    <!-- Email Input -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input 
                            type="email"
                            name="email" 
                            placeholder="Enter your email" 
                            class="input input-bordered" 
                            required
                        />
                    </div>

                    <!-- Password Input -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input 
                            type="password" 
                            name="password"
                            placeholder="Enter your password" 
                            class="input input-bordered" 
                            required
                        />
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                    </div>

                    <!-- Remember Me & Submit -->
                    <div class="form-control">
                        <div class="flex items-center justify-between mb-4">
                            <label class="cursor-pointer label gap-2">
                                <input type="checkbox" class="checkbox checkbox-sm" />
                                <span class="label-text">Remember me</span>
                            </label>
                        </div>
                        <button class="btn btn-primary w-full">Login</button>
                    </div>



                    <!-- Registration Link -->
                    <p class="text-center mt-4">
                        Don't have an account? 
                        <a href="{{route('signup')}}" class="link link-primary">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    @include('components.alert')
</body>
</html>
</div>
