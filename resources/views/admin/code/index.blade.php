<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <h1 class="text-lg">Programming Languages, Frameworks and Tech Stacks</h1><br>
                    <a href="/code/create">Add Programming Language</a>

                    <code-manager></code-manager>

                    @foreach($codes as $code)
                        <div>
                            <br>
                            <article>
                                <h1>{{ $code->name }}</h1>

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
