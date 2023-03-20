@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
<!-- This is an example component -->
<div class="container mx-auto shadow-lg rounded-lg">
        <!-- headaer -->
    <div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
    <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('book_index')">
                        {{ __('相談するプロを探す') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('good')" >
                        {{ __('みんなの相談を見る') }}
                    </x-nav-link>
                </div>
                <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">-->
                <!--    <x-nav-link :href="route('comment')" >-->
                <!--        {{ __('プロに質問してみる') }}-->
                <!--    </x-nav-link>-->
                <!--</div>-->
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
      <div class="flex flex-col w-1/3 border-r-2 overflow-y-auto">
        <!-- search compt -->
        <div class="border-b-2 py-4 px-2">
          <input type="text" placeholder="プロを探す" class="py-2 px-2 border-2 border-gray-200 rounded-2xl w-full"/>
        </div>
        <!-- end search compt -->
        <!-- user list -->
        
        
        
        
        
        
        
        
        <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
          <div class="w-1/4">
            <img
              src="https://source.unsplash.com/_7LbC5J-jw4/600x600"
              class="object-cover h-12 w-12 rounded-full"
              alt=""
            />
          </div>
          <div class="w-full">
            <div class="text-lg font-semibold">キクチさん</div>
            <span class="text-gray-500">キャンプ用品が得意です</span>
          </div>
        </div>
      <!-- end user list -->
      </div>
      <!-- end chat list -->
      <!-- message -->
 <div class="container px-5 py-12 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="col-12 col-sm-12 col-md-10 col-lg-8">
      <!--質問-->
      <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md my-8 mx-auto">
          <div class="flex items-center justify-between">
              <div class="flex items-center">
                <div class="font-bold text-gray-700">
                <div class="w-10 h-10 mx-2 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                  <p>田中プロへの質問</p>
                </div>
                </div>
              <a href="https://gussy.sakura.ne.jp/quesdev/question/search?categoryId=10" class="px-3 py-1 text-sm font-bold transition-colors duration-300 transform bg-[#F8E978] rounded cursor-pointer hover:bg-[#DBCC56]">道具</a>
          </div>
              <div class="mt-2">
                <p class="mt-2 text-gray-600">キャンプを始めようと思っているのですがどの商品から始めたら良いでしょうか？？</p>
              </div>
            <div class="flex items-center justify-between mt-4">        
            <form action="{{route('question')}}" method="GET">
                @csrf
            <button><p class="truncate text-xl font-bold">プロからの回答をみる</p></button>
              
            </form>
            </div>
              
              
      </div>
                                                                                                                        
 
 
                                                                        
                    <p class="text-2xl sm:py-8 py-2 font-semibold title-font text-center">
                        <a class="text-lg sm:text-2xl py-2 px-8 rounded-full border-2 border-gray-300 hover:bg-gray-100  hover:border-gray-100 sm:py-4 sm:px-16" href="https://gussy.sakura.ne.jp/quesdev/question/list">質問をもっと見る</a>
                    </p>
                </div>
            </div>
        </div>
      
      
      <!-- end message -->
      <!--<div class="w-2/5 border-l-2 px-5">-->
      <!--  <div class="flex flex-col">-->
      <!--    <div class="font-semibold text-xl py-4">Mern Stack Group</div>-->
      <!--    <img-->
      <!--      src="https://source.unsplash.com/L2cxSuKWbpo/600x600"-->
      <!--      class="object-cover rounded-xl h-64"-->
      <!--      alt=""-->
      <!--    />-->
      <!--    <div class="font-semibold py-4">Created 22 Sep 2021</div>-->
      <!--    <div class="font-light">-->
      <!--      Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,-->
      <!--      perspiciatis!-->
      <!--    </div>-->
      <!--    </div>-->
      <!--  </div>-->
      </div>
    </div>
</div>

    
    
  </x-app-layout>