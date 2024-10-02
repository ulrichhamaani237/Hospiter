<!DOCTYPE html>
<html lang="en">
@include('admin.body.entete')
<body class=" bg-pink-50">
    <main>
        <!--start the project-->
        <div id="main-wrapper" class=" flex p-5 xl:pr-0">

            @include('admin.body.sidebar')

            <div class=" w-full  page-wrapper xl:px-6 px-0">

                <!-- Main Content -->
                <main class="h-full   max-w-full">

                    <div class="container  full-container p-0 flex flex-col gap-6">
                        <!--  Header Start -->
                       @include('admin.body.header')
                      
                        @yield('content')

                       @include('admin.body.footer')
                    </div>
                </main>
                <!-- Main Content End -->

            </div>
        </div>
        <!--end of project-->
    </main>

@include('admin.body.footerjs')

</body>

</html>
