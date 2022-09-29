<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles/bootstrap-5.2.1/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')); ?>"></script>
</head>
<body>
<?php if (isset($component)) { $__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Nav::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Nav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480)): ?>
<?php $component = $__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480; ?>
<?php unset($__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480); ?>
<?php endif; ?>
   <h1>Search Results</h1> 
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <h2><a href="article/<?php echo e($result->id); ?>"><?php echo e($result->title); ?></a></h2>
        <p><?php echo e($result->created); ?> | Category: <a href="category/<?php echo e($result->cat_slug); ?>"><?php echo e($result->category); ?></a> | Tags: 
        
        <!--Tags--> 
        <?php
            $tagLi =explode(',', $result->tags);
        ?>
        <?php for($i = 0; $i<(count($tagLi)); $i++): ?>
            <a href="<?php echo e(url('/tag/'.$tagLi[$i])); ?>"><?php echo e($tagLi[$i]); ?></a>
        <?php endfor; ?>
        <!--end of tags-->
        </p>
        
        <p><?php echo e($result->content); ?></p>

    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    

</body>
</html><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/search.blade.php ENDPATH**/ ?>