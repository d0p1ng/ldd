<div>
    <?php $__currentLoopData = $componentNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $componentName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($componentName, [])->html();
} elseif ($_instance->childHasBeenRendered('l362461572-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l362461572-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l362461572-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l362461572-0');
} else {
    $response = \Livewire\Livewire::mount($componentName, []);
    $html = $response->html();
    $_instance->logRenderedChild('l362461572-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\WinNMP\WWW\ldd\resources\views/livewire/global-wrapper.blade.php ENDPATH**/ ?>