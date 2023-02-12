<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('single-input', [])->html();
} elseif ($_instance->childHasBeenRendered('l653028641-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l653028641-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l653028641-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l653028641-0');
} else {
    $response = \Livewire\Livewire::mount('single-input', []);
    $html = $response->html();
    $_instance->logRenderedChild('l653028641-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
</div>
<?php /**PATH C:\WinNMP\WWW\ldd\resources\views/livewire/doc-viewer.blade.php ENDPATH**/ ?>