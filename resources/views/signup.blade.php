<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Forum - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-base-200 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Signup Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold">Create Account</h1>
                    <p class="text-base-content/70 mt-2">Join our tech community</p>
                </div>

                <!-- Signup Form -->
                <form action="/signup" method="post" class="space-y-4">
                    @csrf
                    <!-- Name Input -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input 
                            type="text" 
                            placeholder="Enter username" 
                            class="input input-bordered" 
                            required
                            name="username"
                             value="{{old('username')}}"
                        />
                    </div>
                    @error('username')
                    <span class="mt-2 text-error">{{$message}}</span>
                    @enderror

                    <!-- Email Input -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input 
                            type="email" 
                            placeholder="Enter your email" 
                            class="input input-bordered" 
                            required
                            name="email"
                             value="{{old('email')}}"
                        />
                    </div>
                    @error('email')
                    <span class="mt-2 text-error">{{$message}}</span>
                    @enderror

                    <!-- Password Input -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input 
                            type="password" 
                            placeholder="Create password" 
                            class="input input-bordered" 
                            required
                            name="password"
                             value="{{old('pass')}}"
                        />
                    </div>
                    @error('pass')
                    <span class="mt-2 text-error">{{$message}}</span>
                    @enderror

                    <!-- Confirm Password Input -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input 
                            type="password" 
                            placeholder="Confirm password" 
                            class="input input-bordered" 
                            required
                            name="password_confirmation"
                            value="{{old('confirm_pass')}}"
                        />
                    </div>
                    @error('confirm_pass')
                    <span class="mt-2 text-error">{{$message}}</span>
                    @enderror

                    <!-- Terms Checkbox -->
                    <div class="form-control">
                        <label class="label cursor-pointer justify-start gap-2">
                            <input type="checkbox" class="checkbox checkbox-sm" />
                            <span class="label-text">I agree to the <a href="#" class="link link-primary">Terms of Service</a></span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-primary w-full mt-4">Sign Up</button>

                    

                    <!-- Login Link -->
                    <p class="text-center mt-4">
                        Already have an account? 
                        <a href="/login" class="link link-primary">Log in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    @include('components.alert');
</body>
</html>
</div>
