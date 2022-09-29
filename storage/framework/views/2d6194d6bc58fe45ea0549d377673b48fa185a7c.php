<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Articles</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles/bootstrap-5.2.1/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')); ?>"></script>
</head>
<body>

<div class="container-fluid">
<div>
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
    </div>
    
    <a href="author-admin" class="btn btn-primary">Add</a>

    <?php if(Session::get('success')): ?>
    <p style="color:green"><?php echo e(Session::get('success')); ?></p>
    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
    <p style="color:red"><?php echo e(Session::get('fail')); ?></p>
    <?php endif; ?>
        <h1>Articles</h1>

        <table>
            <tbody>
            <tr><th>ID</th><th>Title</th><th>Category</th><th>Created</th></tr>
          

    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($article->id); ?></td><td><?php echo e($article->title); ?></td><td><?php echo e($article->category); ?></td><td><?php echo e($article->created); ?></td>
            <td>
                <div class="btn-group">
                    <a href="delete/<?php echo e($article->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                    <a href="edit/<?php echo e($article->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                </div>
                
            </td>
            
        </tr>
      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
        </table>
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
</html><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/admin/index.blade.php ENDPATH**/ ?>