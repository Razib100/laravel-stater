@extends('frontend.layouts.index')

@section('content')
    <header class="header__wrapper position-relative d-flex align-items-center justify-content-center pt-5">
        <img
            src="{{ asset('frontend/assets/images/banners/landing-bg.jpg') }}"
            alt="Tairot" width="1920" height="576"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0"
        >
        <div class="position-absolute top-0 start-0 end-0 bottom-0 z-1" style="background-color: rgba(0, 0, 0, 0.4);"></div>

        <div class="container z-2 text-center">
            <img
                src="{{ asset('frontend/assets/images/banners/Combine_Graphics.webp') }}"
                alt="Tairot" width="950" height="723"
                class="img-fluid position-relative z-1"
            >
            <div class="content__box bg-dark p-4 pt-5 rounded-3 mx-auto text-center d-inline-block position-relative z-0">
                <h1 class="fs-3 fw-bold text-white mb-0 text-uppercase lh-sm">
                    {{ !empty(\App\Helpers\Various::getSettingDetails()['homeDetails']->body_title) ? \App\Helpers\Various::getSettingDetails()['homeDetails']->body_title : 'POSTAW TAIROTA' }}
                </h1>
                <p class="text-white desc mb-sm-4">
                    {{ !empty(\App\Helpers\Various::getSettingDetails()['homeDetails']->body_desc) ? \App\Helpers\Various::getSettingDetails()['homeDetails']->body_desc : 'dzlenna dawka duchownoscl' }}
                </p>
                <a href="{{ url('zodiac') }}" class="btn btn-primary fw-semibold gap-3">
                    <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#fff" d="M209.955 488.202l-121.242-46.62c-11.308-4.34-11.643-12.087-.79-17.288L204.8 469.236c15.024 5.777 37.23 4.92 51.774-1.96l161.522-76.6c10.014 4.436 9.864 11.818-.67 16.798L250.43 486.668c-10.983 5.195-29.128 5.902-40.477 1.534zm0-32.37L88.713 409.21C79.09 405.52 77.41 399.36 83.81 394.4l120.99 46.517c15.024 5.776 37.23 4.92 51.774-1.96l165.393-78.433c5.855 4.417 4.38 10.36-4.542 14.58l-166.993 79.193c-10.983 5.196-29.128 5.903-40.477 1.534zm0-28.314L88.713 380.892c-9.624-3.69-11.302-9.85-4.902-14.813l120.99 46.523c15.024 5.77 37.23 4.914 51.774-1.96l165.393-78.438c5.855 4.416 4.38 10.36-4.542 14.58l-166.993 79.2c-10.983 5.194-29.128 5.895-40.477 1.533zm0-28.32L88.713 352.572c-9.624-3.69-11.302-9.85-4.902-14.812l120.99 46.524c15.024 5.776 37.23 4.92 51.774-1.96l165.393-78.44c5.855 4.424 4.38 10.368-4.542 14.586l-166.993 79.194c-10.983 5.196-29.128 5.897-40.477 1.534zm0-28.32L88.713 324.26c-11.35-4.355-11.643-12.15-.66-17.353l87.236-41.376 34.826 18.323c15.365 8.09 37.937 7.06 52.5-2.39l65.74-42.672 88.404 34.007c11.344 4.357 11.65 12.16.665 17.354l-166.993 79.195c-10.983 5.195-29.128 5.902-40.477 1.534zm6.85-99.73L93.44 206.22c-10.767-5.67-11.217-15.647-1.018-22.268l105.11-68.228h25.845l.015 64.962h58.664v-64.962H332.2l-27.487-41.39 118.91 62.584c10.763 5.67 11.212 15.646 1.013 22.268L254.803 269.418c-10.2 6.62-27.23 7.4-37.997 1.73zm21.637-105.523V100.67h-34.845l49.13-79.74 49.12 79.74H267v64.955h-28.558z"/>
                    </svg>
                    <span>Wybierz</span>
                </a>
            </div>
        </div>
    </header>
@endsection
