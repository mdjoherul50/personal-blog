<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{route('post.index')}}">All posts</a>

        </h2>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a  href="{{route('category.index')}}">All Category</a>

        </h2>
    </x-slot>
       
    
    @foreach($categorys as $menu)
    <div style="float: left; margin-right: 20px; font-size: 30px;">
        <a href="{{route('category.post',$menu->id)}}">{{$menu->name}}</a>
    </div>
    @endforeach
   


</x-app-layout>
