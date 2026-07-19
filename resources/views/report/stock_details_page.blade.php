@extends('layouts.app')
@section('title', __('report.stock_details'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 class="tw-text-xl md:tw-text-3xl tw-font-bold tw-text-black">{{ __('report.stock_details')}}</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-filter" aria-hidden="true"></i> @lang('report.filters')
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        {!! Form::open(['url' => action([\App\Http\Controllers\ReportController::class, 'getStockDetails']), 'method' => 'get', 'id' => 'stock_details_filter_form' ]) !!}
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('product_id', __('lang_v1.search_product') . ':') !!}
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-search"></i>
                                    </span>
                                    {!! Form::select('product_id', [], null, ['class' => 'form-control', 'id' => 'product_id', 'placeholder' => __('lang_v1.search_product_placeholder')]); !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('location_id', __('purchase.business_location').':') !!}
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    {!! Form::select('location_id', $business_locations, null, ['class' => 'form-control select2', 'placeholder' => __('messages.please_select')]); !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <br>
                                <button type="submit" class="tw-dw-btn tw-dw-btn-primary tw-text-white">@lang('lang_v1.search')</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @component('components.widget', ['class' => 'box-solid'])
                <div id="stock_details_content"></div>
            @endcomponent
        </div>
    </div>
</section>
<!-- /.content -->

@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#product_id').select2({
                ajax: {
                    url: '/purchases/get_products',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                          term: params.term,
                        };
                    },
                    processResults: function (data) {
                        var data_formated = [];
                        data.forEach(function (item) {
                            var temp = {
                                'id': item.product_id,
                                'text': item.text
                            }
                            data_formated.push(temp);
                        });
                        return {
                            results: data_formated
                        };
                    }
                },
                minimumInputLength: 1,
            });

            $('#stock_details_filter_form').on('submit', function(e) {
                e.preventDefault();
                var product_id = $('#product_id').val();
                var location_id = $('select[name="location_id"]').val();

                if (!product_id) {
                    return;
                }

                $.ajax({
                    url: '{{ action([\App\Http\Controllers\ReportController::class, "getStockDetails"]) }}',
                    type: 'GET',
                    data: {
                        product_id: product_id,
                        location_id: location_id
                    },
                    success: function(response) {
                        $('#stock_details_content').html(response);
                        __currency_convert_recursively($('#stock_details_content'));
                    }
                });
            });
        });
    </script>
@endsection
