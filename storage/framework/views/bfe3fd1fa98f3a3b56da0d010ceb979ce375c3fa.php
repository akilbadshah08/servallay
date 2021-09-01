<?php $__env->startSection('content'); ?>


 <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="py-3">
                            
                    </div>
                 
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Category</h5>
                        </div>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
                            <li class="breadcrumb-item">Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Category</h5>
                    </div>
                    <div class="card-body row">
                        <div class="py-3 col-sm-12">
                        <?php if(isset($category->parent_id) && $category->parent_id!=0): ?>
                         <a class="col-sm-3 btn btn-info" href="<?php echo e(url('admin-category/'.$category->parent_id .'/edit')); ?>">Back</a>
                        <?php else: ?>
                        <a class="col-sm-3 btn btn-info" href="<?php echo e(url('admin-category')); ?>">Back</a>
                        <?php endif; ?>
                        <a class="col-sm-3 btn btn-info" href="<?php echo e(url('admin-category')); ?>/create?parent_id=<?php echo e($category->id); ?>">Add Child Category</a>

                       
                    </div>
                           
               <div class="col-sm-4">
                    <img style="width: 300px; margin-bottom: 10px" src="<?php echo e(asset('uploads/category/'.$category->image)); ?>">

               </div>
                <div class="col-sm-8">
                <?php echo Form::model($category, ['route' => ['admin-category.update', $category->id], "method" =>  "put",'id' => "validation-form123","files" => true]); ?>


                <?php echo Form::bsFile("img[]","Image","validation-file form-control"); ?>


                <?php echo Form::bsText("name","Category Name"); ?>


                <input type="hidden" name="parent_id" value="<?php echo e($category->parent_id); ?>">
            </div>


                <?php echo Form::bsSubmit("Save"); ?>



                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>

        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <h5 class="col-sm-6">Child Category List</h5>
                    </div>
                    <div class="card-body">
                       
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Image</th>

                                        <th>name</th>


                                        <th>#</th>



                                    </tr>

                                </thead>

                                <tbody>

                                    <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                            <td><?php echo e($sub_category->id); ?></td>

                                            <td><img style="width: 30px" src="<?php echo e(url('uploads/category/'.$sub_category->image)); ?>"></td>


                                            <td><?php echo e($sub_category->name); ?></td>

                                            <td>

                                                <a href="<?php echo e(url('admin-category/'.$sub_category->id.'/edit')); ?>" class="ed"><i class="fa fa-edit"></i> Edit</a>

                                                <form style="display: inline" action="<?php echo e(route('admin-category.destroy', $sub_category->id)); ?>" method="POST">

                                                    <?php echo e(method_field('DELETE')); ?>


                                                    <?php echo e(csrf_field()); ?>


                                                    <button style="border: 0;" onclick='return confirm("Are you sure?")' class=""><i class="fa fa-trash"></i> Delete</button>

                                                </form>            
                                            </td>

                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td></td> <td></td> <td></td> <td></td>
                                    </tr>

                                </tbody>

                            </table>
                    
                        </div>
                    </div>
                </div>
            </div>    
        </div>


    <div class="container product_section_container" style="padding: 30px;">

        <div class="row">

            <div class="col-md-12">


            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('../')); ?>/assets/css/plugins/dataTables.bootstrap4.min.css">
<?php $__env->stopSection(); ?>    

<?php $__env->startSection('js'); ?>

    <!-- jquery-validation Js -->
<script src="<?php echo e(asset('../')); ?>/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('../')); ?>/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('../')); ?>/assets/js/pages/data-basic-custom.js"></script>


<script src="<?php echo e(asset('../')); ?>/assets/js/plugins/jquery.validate.min.js"></script>
<!-- form-picker-custom Js -->
<script type="text/javascript">
    $(document).ready(function() {
    $(function() {
        // [ Add phone validator ]
        <?php if(isset($_GET['success'])): ?>
         Swal.fire({
            icon: "success",
            title: 'Category <?php echo e($_GET["success"]); ?> Successfully',
        })
        <?php endif; ?>


        <?php if(isset($_GET['success'])): ?>
         Swal.fire({
            icon: "success",
            title: 'Category <?php echo e($_GET["success"]); ?> Successfully',
        })
        <?php endif; ?>

        // [ Initialize validation ]
        $('#validation-form123').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'name': {
                    required: true
                },
                'parent_id': {
                    required: true
                }
            },

        });
    });
});

</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>