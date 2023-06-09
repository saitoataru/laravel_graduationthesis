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
          <div class="flex items-center gap-[6px]">
            <form action="{{route('user',$user_id)}}" method="GET">
            @csrf
            <button><p class="truncate text-xl font-bold">{{$user_name}}</p></button>
            </form>
              <svg width="13px" height="14px" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="6.5" cy="6.5" r="6.5" fill="#159DFF"></circle>
                <path d="M5.55273 10.9766C5.89258 10.9766 6.15039 10.8477 6.33203 10.5781L10.5742 4.0918C10.7031 3.89258 10.7617 3.71094 10.7617 3.53516C10.7617 3.07227 10.4102 2.73828 9.93555 2.73828C9.61328 2.73828 9.41406 2.85547 9.21484 3.16602L5.53516 8.99023L3.6543 6.64062C3.47266 6.41797 3.27344 6.31836 2.99805 6.31836C2.51758 6.31836 2.17188 6.6582 2.17188 7.12695C2.17188 7.33203 2.23633 7.51367 2.41211 7.71875L4.79102 10.6133C4.99609 10.8594 5.23633 10.9766 5.55273 10.9766Z" fill="white">
                </path>
              </svg>
            </div>
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">aaaa</h3>
        <div class="mt-[18px] flex gap-[18px]">
            <a href="" target="_blank" rel="noopener noreferrer">
                <svg width="22px" height="22px" viewBox="0 0 23.5 23.5" fill="#FFF" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 8.876A3.13 3.13 0 0 0 8.876 12 3.13 3.13 0 0 0 12 15.124 3.13 3.13 0 0 0 15.124 12 3.13 3.13 0 0 0 12 8.876ZM21.37 12c0-1.294.012-2.576-.06-3.867-.073-1.5-.415-2.831-1.512-3.928-1.1-1.1-2.428-1.44-3.928-1.512-1.294-.073-2.576-.061-3.867-.061-1.294 0-2.576-.012-3.868.061-1.5.073-2.831.415-3.928 1.512-1.1 1.099-1.439 2.428-1.512 3.928-.072 1.294-.06 2.576-.06 3.867s-.012 2.576.06 3.867c.073 1.5.415 2.831 1.512 3.928 1.1 1.1 2.428 1.44 3.928 1.512 1.294.073 2.576.061 3.867.061 1.294 0 2.576.012 3.868-.06 1.5-.074 2.83-.416 3.928-1.513 1.099-1.099 1.439-2.428 1.512-3.928.075-1.291.06-2.573.06-3.867ZM12 16.807A4.8 4.8 0 0 1 7.193 12 4.8 4.8 0 0 1 12 7.193 4.8 4.8 0 0 1 16.807 12 4.8 4.8 0 0 1 12 16.807Zm5.004-8.688a1.121 1.121 0 0 1-1.123-1.123c0-.621.502-1.123 1.123-1.123a1.121 1.121 0 0 1 .43 2.16 1.122 1.122 0 0 1-.43.086Z" fill="#FFF"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/3110ataru/" target="_blank" rel="noopener noreferrer">
                <svg width="22px" height="22px" viewBox="0 0 24 24" fill="#676767" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.102 5.938a8.259 8.259 0 0 1-2.368.65 4.135 4.135 0 0 0 1.813-2.283c-.81.48-1.695.82-2.619 1a4.126 4.126 0 0 0-7.027 3.763A11.712 11.712 0 0 1 3.4 4.758a4.126 4.126 0 0 0 1.277 5.507 4.115 4.115 0 0 1-1.869-.516v.053a4.126 4.126 0 0 0 3.309 4.044 4.153 4.153 0 0 1-1.863.071 4.126 4.126 0 0 0 3.853 2.863 8.276 8.276 0 0 1-5.123 1.767c-.329 0-.657-.02-.984-.058a11.664 11.664 0 0 0 6.321 1.853c7.588 0 11.735-6.284 11.735-11.734 0-.177-.004-.356-.012-.533a8.384 8.384 0 0 0 2.057-2.134l.001-.003Z" fill="#676767">
                </path>
                </svg>
            </a>
            <a href="https://www.instagram.com/3110ataru/" target="_blank" rel="noopener noreferrer">
                <svg width="22px" height="22px" viewBox="0 0 24 24" fill="#676767" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.583 7.19a2.508 2.508 0 0 0-1.768-1.77C18.255 5 12 5 12 5s-6.254 0-7.815.417a2.503 2.503 0 0 0-1.768 1.77C2 8.75 2 12.01 2 12.01s0 3.259.417 4.82c.23.86.909 1.54 1.768 1.77 1.56.419 7.815.419 7.815.419s6.255 0 7.815-.42a2.503 2.503 0 0 0 1.768-1.77c.417-1.56.417-4.82.417-4.82s0-3.258-.417-4.818ZM10.013 15V9.018l5.179 2.969L10.013 15Z" fill="#676767">
                </path>
                </svg>
            </a>
            <a href="https://www.instagram.com/3110ataru/" target="_blank" rel="noopener noreferrer">
                <svg width="22px" height="22px" viewBox="0 0 25 24" fill="#676767" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.883 6.832a4.465 4.465 0 0 1-.386-.225 5.432 5.432 0 0 1-.992-.843 4.677 4.677 0 0 1-1.117-2.306h.004c-.085-.498-.05-.821-.045-.821h-3.369v13.025c0 .175 0 .348-.007.519l-.003.064c0 .01 0 .019-.002.029v.007a2.86 2.86 0 0 1-1.44 2.27 2.81 2.81 0 0 1-1.393.368 2.85 2.85 0 0 1-2.842-2.86 2.85 2.85 0 0 1 2.842-2.86c.297 0 .592.046.875.138l.004-3.43a6.258 6.258 0 0 0-4.822 1.41 6.611 6.611 0 0 0-1.442 1.78c-.142.245-.679 1.23-.744 2.829-.04.907.232 1.847.362 2.236v.008c.081.229.398 1.01.914 1.668.416.528.908.992 1.46 1.377v-.008l.008.008c1.63 1.108 3.439 1.035 3.439 1.035.313-.012 1.361 0 2.552-.564 1.32-.626 2.072-1.558 2.072-1.558a6.471 6.471 0 0 0 1.13-1.877 7.029 7.029 0 0 0 .406-2.146v-6.91c.041.024.585.384.585.384s.784.503 2.008.83c.877.233 2.06.282 2.06.282V7.347c-.414.045-1.256-.086-2.117-.515Z" fill="#676767">
                </path>
                </svg>
            </a>
        </div>
            
          <!--<h2 class="mt-1">コメント</h2>-->
          <!--<div class"m-3">-->
　　　　　
　　　　　<!--</div>-->
          
          <!--<div class="rounded-[16px] border-[3px] border-black px-[20px] py-[15px] text-xs font-bold">-->
          <div class="mt-2">
          <p class="mt-2 text-gray-600">キャンプ料理が得意です！！</p>
          <!--</div>-->
          </div>
      <!--</div>-->
         <div>
            <form action="{{ route('question',$user_id)}}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-gray-100 text-gray-900">{{ __('質問してみる！') }}</x-button>
            </form>
        </div>
      

      <!--ユーザー紹介-->



    <!--</div>-->

    <!--</div>-->
  <!--</div>-->
</section>


  