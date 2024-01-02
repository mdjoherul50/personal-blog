<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{route('post.index')}}">All posts</a>

        </h2>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a  href="{{route('category.index')}}">All Category</a>

        </h2>
    </x-slot>

</x-app-layout>
