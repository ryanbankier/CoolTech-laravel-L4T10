<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Reviews</title>
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
<div class="container-fluid">
    <h1>Software Reviews</h1>
    <?php $__currentLoopData = $softReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><a class="text-decoration-none" href="article/<?php echo e($soft->id); ?>"><?php echo e($soft->title); ?></a></h2>
        <p><?php echo e($soft->created); ?> | Category: <a class="text-decoration-none" href="category/<?php echo e($soft->cat_slug); ?>"><?php echo e($soft->category); ?></a> | Tags: 
    <!--Tags--> 
    <?php
            $tagLi =explode(',', $soft->tags);
        ?>
        <?php for($i = 0; $i<(count($tagLi)); $i++): ?>
            <a class="text-decoration-none" href="<?php echo e(url('/tag/'.$tagLi[$i])); ?>"><?php echo e($tagLi[$i]); ?></a>
        <?php endfor; ?>
        <!--end of tags-->
    </p>
        
        <p><?php echo e(substr($soft->content, 0, 350)); ?> <a class="text-decoration-none" href="article/<?php echo e($soft->id); ?>">Read More</a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php if (isset($component)) { $__componentOriginal9ab46f9d1633ea9bfc0704335a89334cd5a75e60 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CookieNotice::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cookie-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\CookieNotice::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ab46f9d1633ea9bfc0704335a89334cd5a75e60)): ?>
<?php $component = $__componentOriginal9ab46f9d1633ea9bfc0704335a89334cd5a75e60; ?>
<?php unset($__componentOriginal9ab46f9d1633ea9bfc0704335a89334cd5a75e60); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
        
    
</body>
</html><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/softreviews.blade.php ENDPATH**/ ?>