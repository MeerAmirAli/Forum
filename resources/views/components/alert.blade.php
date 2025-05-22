<!-- Add this at the bottom of your body content -->
<div class="toast toast-top toast-end z-50">
    <!-- Toast Alert -->
    @if(session('response'))
        <div class="alert alert-{{ session('response')['status'] }} shadow-lg animate-fade-in-up mb-4">
            <div class="flex items-center">
                <!-- Status Icon -->
                @if(session('response')['status'] == 'success')
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                @elseif(session('response')['status'] == 'error')
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                @elseif(session('response')['status'] == 'info')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                @elseif(session('response')['status'] == 'warning')
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                @endif
                
                <div class="ml-2">
                    <h3 class="font-bold">{{ session('response')['status'] }}</h3>
                    <span class="text-xs">{{ session('response')['message'] }}</span>
                </div>
                
                <!-- Close Button -->
                <button class="btn btn-sm btn-ghost ml-auto" onclick="this.parentElement.parentElement.remove()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>

<!-- Auto-close toast after 5 seconds -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toast = document.querySelector('.toast .alert');
        if(toast) {
            setTimeout(() => {
                toast.remove();
            }, 5000);
        }
    });
</script>