@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="text-gray-600 body-font">
  @csrf
<!--<div class="container px-5 py-24 mx-auto">-->
    <!--<div class="flex flex-wrap -m-4">-->
      <form action="{{ url('books') }}" method="POST" class="w-full max-w-lg"　enctype="multipart/form-data">
      <!--<div class="p-4 lg:w-1/3">-->
        <a class="block relative h-48 rounded overflow-hidden">
          
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="storage/{{$image}}">
        </a>
        <!--<video loop autoplay playsinline controls>-->
        <!--  <video src="public/video/700749421.782887.mp4" type="video/mp4"></iframe>-->
        <!--</video>-->
        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/xAOLF1ebxKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $title }}</h3>
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
      </form>
      <div class="flex space-x-4">
        <div>
          <form action="{{$item_URL}}" method="GET" class="w-full max-w-lg">
          @csrf
            <x-button class="bg-gray-100 text-gray-900">{{ __('購入する') }}</x-button>
          </form>
        </div>
        <div>
          <form action="{{ route('comment')}}" method="GET" class="w-full max-w-lg">
        
            <x-button class="bg-gray-100 text-gray-900">{{ __('個別に質問してみる！') }}</x-button>
          </form>
        </div>
        <div>
          <form action="{{ route('video')}}" method="GET" class="w-full max-w-lg">
        
            <x-button class="bg-gray-100 text-gray-900">{{ __('使用動画を見る') }}</x-button>
          </form>
        </div>
        </div>
      </div>
      <!--ユーザー紹介-->

    <!--</div>-->

    <!--</div>-->
  <!--</div>-->
</section>


  