<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('admin.body.entete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class=" bg-pink-50">
    <main>
        <!--start the project-->
        <div id="main-wrapper" class=" flex p-5 xl:pr-0">

            <?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class=" w-full  page-wrapper xl:px-6 px-0">

                <!-- Main Content -->
                <main class="h-full   max-w-full">

                    <div class="container  full-container p-0 flex flex-col gap-6">
                        <!--  Header Start -->
                       <?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      
                        <?php echo $__env->yieldContent('content'); ?>

                       <?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </main>
                <!-- Main Content End -->

            </div>
        </div>
        <!--end of project-->
    </main>

<?php echo $__env->make('admin.body.footerjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home/ulrich/Documents/laravels/Hospiter/resources/views/admin/admin_hospyter.blade.php ENDPATH**/ ?>