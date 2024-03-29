<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hworld $hworld
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hworld'), ['action' => 'edit', $hworld->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hworld'), ['action' => 'delete', $hworld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hworld->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hworld'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hworld'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hworld view large-9 medium-8 columns content">
    <h3><?= h($hworld->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hworld->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Vkey') ?></h4>
        <?= $this->Text->autoParagraph(h($hworld->vkey)); ?>
    </div>
    <div class="row">
        <h4><?= __('Vvalue') ?></h4>
        <?= $this->Text->autoParagraph(h($hworld->vvalue)); ?>
    </div>
</div>
