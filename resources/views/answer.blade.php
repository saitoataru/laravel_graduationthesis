@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
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
                  <p>質問</p>
                </div>
                </div>
              <a href="https://gussy.sakura.ne.jp/quesdev/question/search?categoryId=10" class="px-3 py-1 text-sm font-bold transition-colors duration-300 transform bg-[#F8E978] rounded cursor-pointer hover:bg-[#DBCC56]">道具</a>
          </div>
              <div class="mt-2">
                <p class="mt-2 text-gray-600">キャンプを始めようと思っているのですがどの商品から始めたら良いでしょうか？？</p>
              </div>
              <div class="flex items-center justify-between mt-4">        

            </div>
      </div>
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
                  <p>田中プロの回答</p>
                </div>
                </div>
              <a href="https://gussy.sakura.ne.jp/quesdev/question/search?categoryId=10" class="px-3 py-1 text-sm font-bold transition-colors duration-300 transform bg-[#F8E978] rounded cursor-pointer hover:bg-[#DBCC56]">道具</a>
          </div>
              <div class="mt-2">
                <p class="mt-2 text-gray-600">安いテントから始めた方が良いと思います！</p>
              </div>
              <div class="flex items-center justify-between mt-4">        
            <form action="{{route('question')}}" method="GET">
                @csrf
            <button><p class="truncate text-xl font-bold">プロからの回答をみる</p></button>
              
            </form>
            </div>
      </div>

</x-app-layout>
