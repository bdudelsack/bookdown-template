<?php
    $page = $this->page;

    if(!$page->isIndex()) {
        $page = $page->getRoot();
    }
?>

<?php if (! $page->hasTocEntries()) {
    return;
} ?>

<div class="toc">
<dl>
<?php
$entries = $page->getTocEntries();
$baseLevel = reset($entries)->getLevel();
$lastLevel = $baseLevel;
$currLevel = $lastLevel;

foreach ($entries as $entry) {

    while ($entry->getLevel() > $currLevel) {
        echo "<dd><dl>" . PHP_EOL;
        $currLevel ++;
    }

    while ($entry->getLevel() < $currLevel) {
        $currLevel --;
        echo "</dl></dd>" . PHP_EOL;
    }

    echo "<dt>{$entry->getNumber()} "
        . $this->anchorRaw($entry->getHref(), $entry->getTitle())
        . "</dt>" . PHP_EOL;
}

while ($currLevel > $baseLevel) {
    $currLevel --;
    echo "</dl></dd>" . PHP_EOL;
}
?>
</dl>
</div>