@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    @foreach($users as $user)
    <x-userInfo>
          <x-slot name="user_name">{{$user->name}}</x-slot>
    </x-userInfo>
    @endforeach
    
        <div class="flex flex-wrap">
        @if(count($books)>0)
            @foreach($books as $book)
                <div class="rounded border bg-green-50 p-3 w-1/3 h-50px">
                    <x-userInfo-goods id="{{$book->id}}">
                        <x-slot name="image">{{$book->image}}</x-slot>
                        <x-slot name="time">{{$book->created_at}}</x-slot>
                        <x-slot name="title">{{$book->item_name}}</x-slot>
                        <x-slot name="number">{{$book->item_name}}</x-slot>
                        <x-slot name="comment">{{$book->comment}}</x-slot>
                        <x-slot name="item_URL">{{$book->item_URL}}</x-slot>
                        <x-slot name="user_id">{{$book->user->name}}</x-slot>
                    </x-userInfo-goods>
                </div>        
            @endforeach
        @endif
    </div>

</x-app-layout>