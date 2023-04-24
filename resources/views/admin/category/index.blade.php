<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-lg">Categories are used to Categorize Subjects</h1><br>
                    <a href="/category/create">Add a Category</a>

                    <code-manager></code-manager>

                    @foreach($categories as $category)
                        <div>
                            <br>
                            <article>
                                <h1>{{ $category->name }}</h1>

                            </article>
                            <br>
                            <hr>
                        </div>
                    @endforeach
                </div>
</div>
</div>
</div>
</x-app-layout>