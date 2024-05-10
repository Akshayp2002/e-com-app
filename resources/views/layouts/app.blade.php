<div class="flex flex-col h-screen bg-gray-100">
    <!-- Page Content -->
    <main class="flex flex-1">
        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto">
            @include('layouts.navigation')
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Your main content here -->
            {{ $slot }}
        </div>
    </main>
</div>
