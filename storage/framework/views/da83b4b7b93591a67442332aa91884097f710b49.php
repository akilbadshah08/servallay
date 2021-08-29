

<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">

                <?php echo Form::model($librarys, ['route' => ['admin-librarys.update', $librarys->id], "method" =>  "put","files" => true]); ?>


                <?php echo Form::bsFile("img[]","Library Image"); ?>

                <?php echo Form::bsText("library_name","Library Name"); ?>

                <?php echo Form::bsText("library_url","Library URL"); ?>

                <?php echo Form::bsTextArea("library_detail","Library Detail",null,["class" => "summernote"]); ?>

                <?php echo Form::bsSubmit("Update"); ?>

                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>