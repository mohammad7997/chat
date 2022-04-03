@include('partial.header')
<body class="flex items-center h-screen bg-primary">
<div class="container mx-auto wrapper flex flex-col content-center shadow-2xl rounded-xl overflow-hidden">
    <!-- Start of top bar -->
        @include('partial.top_bar')
    <!-- End of top bar -->
    <div class="flex wrapper">
        <div class="basis-1/3 bg-secondary overflow-y-auto h-full pb-2">

            <!-- Start of single chat item -- sidebar -- -->
                @include('partial.sidebar')
            <!-- End of single chat item -- sidebar -- -->

        </div>

        <!-- Chat Window -->
            @yield('chat_content')
        <!-- End of send message form -->

    </div>
</div>
@include('partial.footer')


