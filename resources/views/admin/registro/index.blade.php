@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.registro.actions.index'))

@section('body')

    <registro-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/registros') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.registro.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/registros/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.registro.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'Codigo'">{{ trans('admin.registro.columns.Codigo') }}</th>
                                        <th is='sortable' :column="'danado'">{{ trans('admin.registro.columns.danado') }}</th>
                                        <th is='sortable' :column="'descripcion_equipo'">{{ trans('admin.registro.columns.descripcion_equipo') }}</th>
                                        <th is='sortable' :column="'Edicion'">{{ trans('admin.registro.columns.Edicion') }}</th>
                                        <th is='sortable' :column="'entregado_firma'">{{ trans('admin.registro.columns.entregado_firma') }}</th>
                                        <th is='sortable' :column="'fecha'">{{ trans('admin.registro.columns.fecha') }}</th>
                                        <th is='sortable' :column="'Fecha_validez'">{{ trans('admin.registro.columns.Fecha_validez') }}</th>
                                        <th is='sortable' :column="'id'">{{ trans('admin.registro.columns.id') }}</th>
                                        <th is='sortable' :column="'marca'">{{ trans('admin.registro.columns.marca') }}</th>
                                        <th is='sortable' :column="'modelo'">{{ trans('admin.registro.columns.modelo') }}</th>
                                        <th is='sortable' :column="'movimiento_desde'">{{ trans('admin.registro.columns.movimiento_desde') }}</th>
                                        <th is='sortable' :column="'movimiento_hasta'">{{ trans('admin.registro.columns.movimiento_hasta') }}</th>
                                        <th is='sortable' :column="'movimiento_indefinido'">{{ trans('admin.registro.columns.movimiento_indefinido') }}</th>
                                        <th is='sortable' :column="'Nuevo'">{{ trans('admin.registro.columns.Nuevo') }}</th>
                                        <th is='sortable' :column="'persona_que_entrega'">{{ trans('admin.registro.columns.persona_que_entrega') }}</th>
                                        <th is='sortable' :column="'persona_que_recibe'">{{ trans('admin.registro.columns.persona_que_recibe') }}</th>
                                        <th is='sortable' :column="'recibido_firma'">{{ trans('admin.registro.columns.recibido_firma') }}</th>
                                        <th is='sortable' :column="'serie'">{{ trans('admin.registro.columns.serie') }}</th>
                                        <th is='sortable' :column="'tipo_movimiento'">{{ trans('admin.registro.columns.tipo_movimiento') }}</th>
                                        <th is='sortable' :column="'Ubicacion_equipo'">{{ trans('admin.registro.columns.Ubicacion_equipo') }}</th>
                                        <th is='sortable' :column="'usado_buen_estado'">{{ trans('admin.registro.columns.usado_buen_estado') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="23">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/registros')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/registros/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.Codigo }}</td>
                                        <td>@{{ item.danado }}</td>
                                        <td>@{{ item.descripcion_equipo }}</td>
                                        <td>@{{ item.Edicion }}</td>
                                        <td>@{{ item.entregado_firma }}</td>
                                        <td>@{{ item.fecha | date }}</td>
                                        <td>@{{ item.Fecha_validez | date }}</td>
                                        <td>@{{ item.id }}</td>
                                        <td>@{{ item.marca }}</td>
                                        <td>@{{ item.modelo }}</td>
                                        <td>@{{ item.movimiento_desde | date }}</td>
                                        <td>@{{ item.movimiento_hasta | date }}</td>
                                        <td>@{{ item.movimiento_indefinido }}</td>
                                        <td>@{{ item.Nuevo }}</td>
                                        <td>@{{ item.persona_que_entrega }}</td>
                                        <td>@{{ item.persona_que_recibe }}</td>
                                        <td>@{{ item.recibido_firma }}</td>
                                        <td>@{{ item.serie }}</td>
                                        <td>@{{ item.tipo_movimiento }}</td>
                                        <td>@{{ item.Ubicacion_equipo }}</td>
                                        <td>@{{ item.usado_buen_estado }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/registros/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.registro.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </registro-listing>

@endsection