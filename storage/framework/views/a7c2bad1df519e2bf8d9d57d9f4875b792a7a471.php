<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div>
            <h1>DATA EXTRACTION</h1>
        </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-100 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('global-wrapper', [])->html();
} elseif ($_instance->childHasBeenRendered('6F77HTp')) {
    $componentId = $_instance->getRenderedChildComponentId('6F77HTp');
    $componentTag = $_instance->getRenderedChildComponentTagName('6F77HTp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6F77HTp');
} else {
    $response = \Livewire\Livewire::mount('global-wrapper', []);
    $html = $response->html();
    $_instance->logRenderedChild('6F77HTp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('doc-viewer', [])->html();
} elseif ($_instance->childHasBeenRendered('ZbD2Rli')) {
    $componentId = $_instance->getRenderedChildComponentId('ZbD2Rli');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZbD2Rli');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZbD2Rli');
} else {
    $response = \Livewire\Livewire::mount('doc-viewer', []);
    $html = $response->html();
    $_instance->logRenderedChild('ZbD2Rli', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\WinNMP\WWW\ldd\resources\views/welcome.blade.php ENDPATH**/ ?>