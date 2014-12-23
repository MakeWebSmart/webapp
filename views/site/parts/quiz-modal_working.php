<script>
BootstrapDialog.show({
            title: 'Default Title',
            message: 'Click buttons below.',
            buttons: [{
                label: 'Title 1',
                action: function(dialog) {
                    dialog.setTitle('Title 1');
                }
            }, {
                label: 'Title 2',
                action: function(dialog) {
                    dialog.setTitle('Title 2');
                }
            }]
        });
</script>