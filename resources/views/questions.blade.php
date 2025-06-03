<div>
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
<div class="min-h-screen bg-base-200 flex items-center justify-center p-4">

    <div class="w-full max-w-2xl">
        <!-- Question Form Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <!-- Header -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold">Ask a Question</h1>
                    <p class="text-base-content/70 mt-2">Share your knowledge with the community</p>
                </div>

                <!-- Question Form -->
                <form action="{{Route('question.store')}}" method="post" class="space-y-4">
                    @csrf
                    <!-- Question Title -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Question Title</span>
                        </label>
                        <input 
                            type="text" 
                            placeholder="Enter your question title" 
                            class="input input-bordered" 
                            required
                            name="title"
                        />
                    </div>

                    <!-- Category Selection -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Category</span>
                        </label>
                        <select name="category_id" class="select select-bordered w-full">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tags -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tags</span>
                        </label>
                        <input 
                            type="text" 
                            placeholder="Add tags (comma separated)" 
                            class="input input-bordered" 
                            name="tags"
                        />
                        <label class="label">
                            <span class="label-text-alt">Max 5 tags allowed</span>
                        </label>
                    </div>

                    <!-- Question Details -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Question Details</span>
                        </label>
                        <textarea 
                            class="textarea textarea-bordered h-48" 
                            placeholder="Explain your question in detail..."
                            required
                            name="desc"
                        ></textarea>
                    </div>


                    
                    <!-- Form Actions -->
                    <div class="flex gap-4 mt-6">
                        <a href="/" class="btn btn-ghost flex-1">Cancel</a>
                        <button type="submit" class="btn btn-primary flex-1">Post Question</button>
                    </div>

                    
                </form>
            </div>
        </div>

        <!-- Footer Note -->
        <p class="text-center mt-4 text-sm text-base-content/70">
            By posting, you agree to our <a href="#" class="link link-primary">community guidelines</a>
        </p>

    </div>
</div>
<x-footer-banner />

    
</body>
</html>
</div>
