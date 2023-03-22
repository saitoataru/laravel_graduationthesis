@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="text-gray-600 body-font">
  @csrf
<!--<div class="container px-5 py-24 mx-auto">-->
    <!--<div class="flex flex-wrap -m-4">-->
     
      <!--<div class="p-4 lg:w-1/3">-->
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="storage/{{$image}}">
        </a>
          
          
        <!--<video loop autoplay playsinline controls>-->
        <!--  <video src="public/video/700749421.782887.mp4" type="video/mp4"></iframe>-->
        <!--</video>-->
        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/xAOLF1ebxKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">aaaa</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $number }}</h2>
          <!--<h2 class="mt-1">コメント</h2>-->
          <!--<div class"m-3">-->
　　　　　
　　　　　<!--</div>-->
          
          <div class="rounded-[16px] border-[3px] border-black px-[20px] py-[15px] text-xs font-bold">
          <div class="mt-2">
          <p class="mt-2 text-gray-600">{{ $comment }}</p>
          </div>
          </div>
          <h5 class="text-gray-900  font-thin text-right">投稿時間：{{ $time }}</h3>
      <!--</div>-->
     
      <div class="flex space-x-4">
        <div>
          <form action="{{$item_URL}}" method="GET" class="w-full max-w-lg">
          @csrf
            <x-button class="bg-gray-100 text-gray-900">{{ __('購入する') }}</x-button>
          </form>
        </div>
        <div>
          <form action="{{ route('question',$user_id)}}" method="GET" class="w-full max-w-lg">
        
            <x-button class="bg-gray-100 text-gray-900">{{ __('質問してみる！') }}</x-button>
          </form>
        </div>
        <div>
          <form action="{{ route('video')}}" method="GET" class="w-full max-w-lg">
        
            <x-button class="bg-gray-100 text-gray-900">{{ __('使用動画を見る') }}</x-button>
          </form>
        </div>
      </div>
      <!--ユーザー紹介-->
<div class="flex items-center gap-[6px]">
  <form action="{{route('user', $user_id)}}" method="GET">
    @csrf
   <button><p class="truncate text-xl font-bold">{{$user_name}}</p></button>
  </form>
  <svg width="13px" height="14px" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="6.5" cy="6.5" r="6.5" fill="#159DFF"></circle>
    <path d="M5.55273 10.9766C5.89258 10.9766 6.15039 10.8477 6.33203 10.5781L10.5742 4.0918C10.7031 3.89258 10.7617 3.71094 10.7617 3.53516C10.7617 3.07227 10.4102 2.73828 9.93555 2.73828C9.61328 2.73828 9.41406 2.85547 9.21484 3.16602L5.53516 8.99023L3.6543 6.64062C3.47266 6.41797 3.27344 6.31836 2.99805 6.31836C2.51758 6.31836 2.17188 6.6582 2.17188 7.12695C2.17188 7.33203 2.23633 7.51367 2.41211 7.71875L4.79102 10.6133C4.99609 10.8594 5.23633 10.9766 5.55273 10.9766Z" fill="white">
    </path>
  </svg>
</div>


    <!--</div>-->

    <!--</div>-->
  <!--</div>-->
</section>


  