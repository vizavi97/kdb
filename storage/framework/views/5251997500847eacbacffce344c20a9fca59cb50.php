<?php $__env->startSection('database-column-default-template'); ?>

<input
    :value="column.default"
    :type="options.type"
    :step="options.step"
    :min="options.min"
    :max="options.max"
    :class="options.class"
    :disabled="options.disabled"
    @input="onDefaultInput"
    class="form-control">

<?php $__env->stopSection(); ?>

<script>
    let defaultOptions = {
        type: 'text',
        step: false,
        min: false,
        max: false,
        class: false,
        disabled: false
    };

    Vue.component('database-column-default', {
        props: {
            column: {
                type: Object,
                required: true
            }
        },
        template: `<?php echo $__env->yieldContent('database-column-default-template'); ?>`,
        methods: {
            onDefaultInput(event) {
                let defaultValue = event.target.value.trim();

                if (defaultValue == '') {
                    defaultValue = null;
                }

                this.column.default = defaultValue;
            },
            getOption(option) {
                if (this.column.type.default[option]) {
                    return this.column.type.default[option];
                }

                return false;
            },
            getType() {
                let type = this.getOption('type');

                if (type) {
                    return type;
                }

                return 'text';
            }
        },
        computed: {
            options() {
                if (!this.column.type.default) {
                    return defaultOptions;
                }

                return {
                    type: this.getType(),
                    step: this.getOption('step'),
                    min: this.getOption('min'),
                    max: this.getOption('max'),
                    class: this.getOption('class'),
                    disabled: this.getOption('disabled')
                };
            }
        }
    });
</script>
<?php /**PATH /usr/local/www/apache24/data/vendor/tcg/voyager/src/../resources/views/tools/database/vue-components/database-column-default.blade.php ENDPATH**/ ?>