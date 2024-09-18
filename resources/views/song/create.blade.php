<x-app-layout>
    <div class="container mx-auto max-w-lg mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Create Song</h1>
        <form action="{{ route('song.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="tag" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" id="tag" name="title" required>
            </div>
            <div class="form-group">
                <label for="tag" class="block text-sm font-medium text-gray-700">Artist</label>
                <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" id="tag" name="artist" required>
            </div>
            <div class="form-group">
                <label for="tag" class="block text-sm font-medium text-gray-700">Genre</label>
                <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" id="tag" name="genre" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Create
            </button>
        </form>
    </div>
</x-app-layout>
