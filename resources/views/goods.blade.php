@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

<div class="container mx-auto shadow-lg rounded-lg">
    <!--↓↓ 検索フォーム ↓↓-->
<div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
<div class="w-1/3">
  <form action="{{ route('search') }}" method="GET">
    <div class="flex mt-[18px] gap-[18px]">
    <input type="text" name="keyword" placeholder="キーワードを入力してください" class="rounded-2xl bg-gray-100 py-3 px-5 w-full">
    <input type="submit" value="検索">
    </div>
  </form>
</div>
</div>
    <!--↑↑ 検索フォーム ↑↑-->
 

    
    <!--compenent部分[start]-->
    <div class="flex flex-wrap">
        @if(count($books)>0)
            @foreach($books as $book)
            <div class="rounded border bg-green-50 p-3 w-1/3 h-50px">
            <x-goods id="{{$book->id}}">
                <x-slot name="image">{{$book->image}}</x-slot>
                <x-slot name="time">{{$book->created_at}}</x-slot>
                <x-slot name="title">{{$book->item_name}}</x-slot>
                <x-slot name="number">{{$book->item_name}}</x-slot>
                <x-slot name="comment">{{$book->comment}}</x-slot>
                <x-slot name="item_URL">{{$book->item_URL}}</x-slot>
                <x-slot name="user_id">{{$book->user_id}}</x-slot>
                <x-slot name="user_name">{{$book->user->name}}</x-slot>
            </x-goods>
            </div>
            
            @endforeach
        @endif
    </div>
    <!--compenent部分[end]-->
    
    </div>
</div>
</x-app-layout>
    