<?php if (isset($tabs) AND is_array($tabs)): ?>
    <ul class="nav nav-tabs">
        <?php if (!empty($tabs)): ?>
            <?php foreach ($tabs as $i => $tab): ?>
                <?php
                if(isset($tab['url']) AND is_array($tab['url'])) {
                    foreach($tab['url'] AS $urlIndex => $url) {
                        if(is_numeric($urlIndex) AND $url == null) {
                            unset($tab['url'][$urlIndex]);
                            reset($tab['url']);
                        }
                    }
                }
                ?>
                <?php if (isset($tab['active'])) : ?>
                    <li class="active dropdown">
                        <?= $this->Html->link(__($tab['name'], true), $tab['url']); ?>
                    </li>
                <?php else: ?>
                    <li>
                        <?= $this->Html->link(__($tab['name'], true), $tab['url']); ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
<?php endif; ?>
