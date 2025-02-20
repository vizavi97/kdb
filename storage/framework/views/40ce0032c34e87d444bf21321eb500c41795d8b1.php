<?php $__env->startSection('database-types-template'); ?>

<div>
    <select :value="column.type.name" @change="onTypeChange" class="form-control">
        <optgroup v-for="(types, category) in dbTypes" :label="category">
            <option v-for="type in types" :value="type.name" :disabled="type.notSupported">
                {{ type.name.toUpperCase() }}
            </option>
        </optgroup>
    </select>
    <div v-if="column.type.notSupported">
        <small><?php echo e(__('voyager::database.type_not_supported')); ?></small>
    </div>
</div>


<?php $__env->stopSection(); ?>

<script>
    let databaseTypes = <?php echo json_encode($db->types); ?>;

    function getDbType(name) {
        let type;
        name = name.toLowerCase().trim();

        for (category in databaseTypes) {
            type = databaseTypes[category].find(function (type) {
                return name == type.name.toLowerCase();
            });

            if (type) {
                return type;
            }
        }

        toastr.error("<?php echo e(__('voyager::database.unknown_type')); ?>: " + name);

        // fallback to a default type
        return databaseTypes.Numbers[0];
    }

    Vue.component('database-types', {
        props: {
            column: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                dbTypes: databaseTypes
            };
        },
        template: `<?php echo $__env->yieldContent('database-types-template'); ?>`,
        methods: {
            onTypeChange(event) {
                this.$emit('typeChanged', this.getType(event.target.value));
            },
            getType(name) {
                return getDbType(name);
            }
        }
    });
</script>
<?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\vendor\tcg\voyager\src/../resources/views/tools/database/vue-components/database-types.blade.php ENDPATH**/ ?>