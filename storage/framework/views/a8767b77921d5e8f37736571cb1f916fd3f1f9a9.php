<div>

   <div class="bg-primary text-white bg-opacity-50">
      <div class="container-fluid text-center">
     
         <div class="row p-2">
            <div class="col">
               <?php if (isset($component)) { $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Search::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Search::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65)): ?>
<?php $component = $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65; ?>
<?php unset($__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65); ?>
<?php endif; ?>
            </div>
            <div class="col">
               <a class="link-secondary text-decoration-none" href="<?php echo e(url('/legal/tos')); ?>">Terms of Service</a>
            </div>
            <div class="col">
               <a class="link-secondary text-decoration-none" href="<?php echo e(url('/legal/privacy')); ?>">Privacy</a> 
            </div>
         </div>
      </div class="row p-2">
         <div class="col">
            <p class="text-center">&copy; 2022 CoolTech.com or its affliates. All rights reserved.</p>
         </div>
      </div>
   
   </div> 
   
</div><?php /**PATH C:\Users\Bane\Dropbox\rb21100002484\4. Advanced Web Development with the MERN Stack\Task 10\cool-tech\resources\views/components/footer.blade.php ENDPATH**/ ?>