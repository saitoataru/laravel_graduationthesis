@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <!--ヘッダー[START]-->
    <x-slot name="header">
      
    </x-slot>
    <!--ヘッダー[END]-->
    
    <!--compenent部分[start]-->
    <div class="flex flex-wrap">
        @if(count($books)>0)
            @foreach($books as $book)
            <div class="rounded border bg-green-50 p-3 w-1/3">
            <x-goods id="{{$book->id}}">
                <x-slot name="image">{{$book->image}}</x-slot>
                <x-slot name="time">{{$book->created_at}}</x-slot>
                <x-slot name="title">{{$book->item_name}}</x-slot>
                <x-slot name="number">{{$book->item_name}}</x-slot>
                <x-slot name="comment">{{$book->comment}}</x-slot>
                <x-slot name="item_URL">{{$book->item_URL}}</x-slot>
            </x-goods>
            </div>
            
            @endforeach
        @endif
    </div>
    <!--compenent部分[end]-->
    
    </div>
</x-app-layout>
    