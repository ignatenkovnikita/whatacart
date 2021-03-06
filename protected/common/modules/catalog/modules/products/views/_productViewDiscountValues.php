<?php
use usni\UsniAdaptor;
?>
<table id="discount-value-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <td class="text-left"><?php echo UsniAdaptor::t('customer', 'Customer Group'); ?></td>
            <td class="text-right"><?php echo UsniAdaptor::t('products', 'Quantity'); ?></td>
            <td class="text-left"><?php echo UsniAdaptor::t('products', 'Priority'); ?></td>
            <td class="text-right"><?php echo UsniAdaptor::t('products', 'Price'); ?></td>
            <td class="text-left"><?php echo UsniAdaptor::t('products', 'Start Date'); ?></td>
            <td class="text-right"><?php echo UsniAdaptor::t('products', 'End Date'); ?></td>
            <td class="text-left"></td>
        </tr>
    </thead>
    <tbody>
        <?php echo $rows; ?>
    </tbody>
</table>

