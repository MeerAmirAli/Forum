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
                <form action="{Route(questions.store)}" method="post" class="space-y-4">
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
                        <select class="select select-bordered w-full">
                            <option disabled selected>Select Category</option>
                            <option>Web Development</option>
                            <option>Mobile Development</option>
                            <option>DevOps</option>
                            <option>Cloud Computing</option>
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
                            name="question_detail"
                        ></textarea>
                    </div>

                    <!-- Anonymous Post -->
                    <div class="form-control">
                        <label class="label cursor-pointer justify-start gap-2">
                            <input type="checkbox" class="checkbox checkbox-sm" />
                            <span class="label-text">Post anonymously</span>
                        </label>
                    </div>

                    <!-- Attachments -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Add Attachments</span>
                        </label>
                        <div class="flex items-center gap-4">
                            <input type="file" name="file" class="hidden" id="file-upload" />
                            <label for="file-upload" class="btn btn-outline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/>
                                </svg>
                                Upload File
                            </label>
                            <span class="text-sm text-base-content/70" id="file-name">No file chosen</span>
                        </div>
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

    <!-- File Upload Script -->
    <script>
        document.getElementById('file-upload').addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'No file chosen';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</body>
</html>
</div>
