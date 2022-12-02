@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.registro.actions.edit', ['name' => $registro->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <registro-form
                :action="'{{ $registro->resource_url }}'"
                :data="{{ $registro->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.registro.actions.edit', ['name' => $registro->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.registro.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </registro-form>

        </div>
    
</div>

@endsection