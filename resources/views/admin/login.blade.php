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
                        <a href="../" class="py-4 block"><img src="../assets/images/logos/logo-light.svg" alt="" class="mx-auto"/></a>
                        <p class="mb-4 text-gray-400 text-sm text-center">Your Social Campaigns</p>
                    <!-- form -->
                    <form>
                        <!-- username -->
                        <div class="mb-4">
                            <label for="forName"
                            class="block text-sm  mb-2 text-gray-400">Name</label>
                        <input type="text" id="forName"
                            class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                        </div>
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="forEmail"
                            class="block text-sm  mb-2 text-gray-400">Email Address</label>
                        <input type="email" id="forEmail"
                            class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                        </div>
                        <!-- password -->
                        <div class="mb-4">
                            <label for="forPassword"
                            class="block text-sm  mb-2 text-gray-400">Password</label>
                        <input type="password" id="forPassword"
                            class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                        </div>
                
                            <!-- button -->
                              <div class="grid my-6">
                                <a href="../" class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign Up</a>
                              </div>

                            <div class="flex justify-center gap-2 items-center">
                                <p class="text-base font-semibold text-gray-400">Already have an Account?</p>
                                <a href="" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Sign In</a>
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