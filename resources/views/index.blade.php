@extends('layout')

@section('chat_content')

<div class="basis-2/3 bg-primary flex flex-col justify-end">
    <div class="overflow-y-scroll chat-window">

    <!-- Start of recieved messages -->
    <div class="dialog mr-auto bg-secondary max-w-md m-2 p-2 rounded-xl text-primary">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad corrupti animi quo pariatur qui?
        Ipsam,
        omnis! Omnis, optio maiores!</p>
        <p class="text-right">20:14<i class="fa-solid fa-check ml-1 text-sm"></i></p>
    </div>
    <!-- End of recieved messages -->

    <!-- Start of sent messages -->
    <div class="dialog ml-auto bg-tertiary max-w-md m-2 p-2 rounded-xl text-primary">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad corrupti animi quo pariatur qui?</p>
        <p class="text-right">20:14<i class="fa-regular fa-clock ml-1 text-sm"></i></p>
    </div>
    <!-- End of sent messages -->
    </div>

    <!-- Start of send message form -->
    <form class="w-full bg-secondary p-3 flex flex-row items-center">
    <input type="text" placeholder="Your text message here..."
        class="basis-11/12 py-2 px-4 rounded-2xl outline-0">
    <button type="submit" class="basis-1/12" id="send"><i
        class="fa-solid fa-paper-plane text-primary border-2 rounded-2xl p-2 hover:scale-105 transition duration-100 active:scale-95"></i></button>
    </form>

</div>
@endsection

