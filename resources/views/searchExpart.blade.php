@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
<!-- This is an example component -->
<div class="container mx-auto shadow-lg rounded-lg">
        <!-- headaer -->
    <div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
    <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('expart')">
                        {{ __('EXPARTを探す') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('answer')" >
                        {{ __('みんなの相談を見る') }}
                    </x-nav-link>
                </div>
    </div>
      
      
      
      
      
      <div class="w-1/2">
        <input
          type="text"
          name=""
          id=""
          placeholder="キーワードで探す"
          class="rounded-2xl bg-gray-100 py-3 px-5 w-full justify-center items-center"
        />
      </div>
      <div
        class="h-12 w-12 p-2 bg-yellow-500 rounded-full text-white font-semibold flex items-center justify-center"
      >
        RA
      </div>
    </div>
    <!-- end header -->
    <!-- Chatting -->
    <div class="flex flex-row justify-between bg-white">
      <!-- chat list -->
      <!-- end chat list -->
      <!-- message -->
 <div class="container px-5 py-12 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="col-12 col-sm-12 col-md-10 col-lg-8">
      <!--質問-->
    <div class="flex flex-wrap">
        @if(count($users)>0)
            @foreach($users as $user)
            <div class="rounded border bg-green-50 p-3 w-1/3 h-50px">
            <x-exparts id="{{$user->id}}">
                <x-slot name="image">{{$user->image}}</x-slot>
                <x-slot name="time">{{$user->created_at}}</x-slot>
                <x-slot name="title">{{$user->item_name}}</x-slot>
                <x-slot name="number">{{$user->item_name}}</x-slot>
                <x-slot name="comment">{{$user->comment}}</x-slot>
                <x-slot name="item_URL">{{$user->item_URL}}</x-slot>
                <x-slot name="user_id">{{$user->id}}</x-slot>
                <x-slot name="user_name">{{$user->name}}</x-slot>
            </x-exparts>
            </div>
            
            @endforeach
        @endif
    </div>

                </div>
            </div>
        </div>
      
      </div>
    </div>
</div>

    
    
  </x-app-layout>