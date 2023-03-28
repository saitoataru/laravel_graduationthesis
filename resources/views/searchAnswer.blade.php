@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
<!-- This is an example component -->
<div class="container mx-auto shadow-lg rounded-lg">
        <!-- headaer -->
    <div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
    <div class="flex">
                <!-- Navigation Links -->
                <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">-->
                <!--    <x-nav-link :href="route('expart')">-->
                <!--        {{ __('相談するプロを探す') }}-->
                <!--    </x-nav-link>-->
                <!--</div>-->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('answer')" >
                        {{ __('みんなの相談を見る') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('your_answer')" >
                        {{ __('あなたへの質問に答える') }}
                    </x-nav-link>
                </div>
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
        @if(count($AnswerToQues)>0)
            @foreach($AnswerToQues as $AnswerToQue)
            <div class="rounded border bg-green-50 p-3 w-1/3 h-50px">
            <x-answer id="{{$AnswerToQue->id}}">
                <x-slot name="answer_id">{{$AnswerToQue->answer_id}}</x-slot>
                <x-slot name="que_title">{{$AnswerToQue->que_title}}</x-slot>
                <x-slot name="que_comment">{{$AnswerToQue->que_comment}}</x-slot>
                <x-slot name="answer_comment">{{$AnswerToQue->answer_comment}}</x-slot>
                <x-slot name="answer_item_URL">{{$AnswerToQue->answer_item_URL}}</x-slot>
            </x-answer>
            </div>
            @endforeach
        @endif
    </div>
 
                                                                    
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