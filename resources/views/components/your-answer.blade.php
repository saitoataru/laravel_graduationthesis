      
      
      <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md my-8 mx-auto">
          <div class="flex items-center justify-between">
              <div class="flex items-center">
                <div class="font-bold text-gray-700">
                <div class="w-10 h-10 mx-2 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400" src="https://pbs.twimg.com/profile_images/1600686707028164608/ZjhjvESu_400x400.jpg">
                    <div src="https://pbs.twimg.com/profile_images/1600686707028164608/ZjhjvESu_400x400.jpg"></div>
                </div>
                  <p>{{$answer_id}}さんへの質問</p>
                </div>
                </div>
          </div>
            <div class="mt-2">
                <p class="mt-2 text-gray-600">タイトル：{{$que_title}}</p>
              </div>
              <div class="mt-2">
                <p class="mt-2 text-gray-600">詳細：{{$que_comment}}</p>
              </div>
            <div class="flex items-center justify-between mt-4">        
            <form action="{{route('answer_to_que',$id)}}" method="GET">
                @csrf
            <button><p class="truncate text-xl font-bold">回答する</p></button>
              
            </form>
            </div>
              
              
      </div>