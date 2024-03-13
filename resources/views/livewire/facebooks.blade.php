<x-slot name="header">

    <div class=" flex items-end justify-center align-items-center ">
        <button type="button" btn-primary btn-lg class="fb-share" data-layout="standard" data-href="" data-action="share"
            data-show-faces="true" data-size="large" data-share="true">
        </button>
        <button type="button" btn-primary btn-lg class="fb-like px-16 py-5" data-layout="standard" data-href=""
            data-action="like" data-show-faces="true" data-size="large" data-share="true">
        </button>
    </div>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0"
                nonce="nPBxBbYi"></script>
            <div class="container mt-4">
                @foreach ($facebooks as $facebook)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $facebook->title }}</h5>
                            <p class="card-text">{{ $facebook->url }}</p>
                            <p class="card-text">{{ $facebook->category }}</p>
                            <p class="card-text">{{ $facebook->description }}</p>
                        </div>
                    </div>
                @endforeach

                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <!-- Your video code -->
                {{-- <header class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
                    <div class="relative z-30 p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl">
                        <!-- Your share button code -->
                        <div class=" flex items-end justify-center align-items-center px-10 py-4">
                            <button type="button" btn-primary btn-lg class="fb-share" data-layout="standard"
                                data-href="" data-action="share" data-show-faces="true" data-size="large"
                                data-share="true">
                            </button>


                            <button type="button" btn-primary btn-lg class="fb-like px-16 py-5" data-layout="standard"
                                data-href="" data-action="like" data-show-faces="true" data-size="large"
                                data-share="true">
                            </button>
                        </div>
                        <!--https://www.your-domain.com/your-page.html-->

                    </div>
                    <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
                        <source
                            src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
                            type="video/mp4" />
                    </video>
                </header>
                <div class="max-w-lg m-auto">

                </div> --}}



            </div>
        </div>
    </div>
</div>
