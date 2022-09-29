<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Articles</title>
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
<h2><?php echo e($Title); ?> | Article </Article></h2>


<form action="<?php echo e(route('update')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
    <label for="">Title</label><br>
    <input class="form-control" type="text" name="title" size="72" value="<?php echo e($data->title); ?>">
    <span style="color:red"><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
    <label for="">Content</label><br>
    <textarea class="form-control" name="content" cols="60" rows="20"><?php echo e($data->content); ?></textarea><br>
    <span style="color:red"><?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    <label for="">Categories</label>
    <p>Current: <?php echo e($data->category); ?></p>
    <select class="form-select" name="category" id="" >
        <option style="color: Red ;" value="<?php echo e($data->category); ?>"><?php echo e($data->category); ?></option>
        <option value="Tech news">Tech News</option>
        <option value="Software reviews">Software Reviews</option>
        <option value="Hardware reviews">Hardware Reviews</option>
        <option value="Opinion pieces">Opinion Pieces</option>
    </select><br>
    <label for="">Tags</label>
    <input class="form-control" type="text" name="tags" id="" value="<?php echo e($data->tags); ?>"><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
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

</div>

</body>
<footer>
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
</footer>
</html><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/admin/edit.blade.php ENDPATH**/ ?>