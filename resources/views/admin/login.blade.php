<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.body.entete')
</head>
<body>
    <main>
        <!-- Main Content -->

        <div class="flex flex-col w-full   overflow-hidden relative min-h-screen bg-pink-50 items-center justify-center g-0 px-4">

            <div class="justify-center items-center  w-full card lg:flex max-w-md ">
                <div class=" w-full card-body">
                    <p class="mb-4 text-pink-400 text-3xl  text-center">Hospiter manage</p>
                    <!-- form -->
                    <form method="POST" action="{{ route('login_store') }}">
                        @csrf

                        <!-- username -->
                        <div class="mb-4">
                            <label for="forName" class="block text-sm  mb-2 text-gray-400">Name/Email/Phone/userName</label>
                            <input type="text" name="login" id="forName" class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                        </div>

                        <!-- password -->
                        <div class="mb-4">
                            <label for="forPassword" class="block text-sm  mb-2 text-gray-400">Password</label>
                            <input type="password" name='password' id="forPassword" class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm  focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                        </div>

                        <!-- button -->
                        <div class="grid my-6">
                            <button type="submit" class="btn py-[10px] text-base transition-colors animate-pulse duration-1000   delay-100 ease-in text-white font-medium hover:bg-blue-700">Sign In</button>
                        </div>
                </div>
                </form>
            </div>
        </div>

        </div>
        <!--end of project-->
    </main>
</body>
@include('admin.body.footerjs')
</html>
