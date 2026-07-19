@php
  $custom_labels = json_decode(session('business.custom_labels'), true);
  $product_custom_field1 = !empty($custom_labels['product']['custom_field_1']) ? $custom_labels['product']['custom_field_1'] : __('lang_v1.product_custom_field1');
  $product_custom_field2 = !empty($custom_labels['product']['custom_field_2']) ? $custom_labels['product']['custom_field_2'] : __('lang_v1.product_custom_field2');
  $product_custom_field3 = !empty($custom_labels['product']['custom_field_3']) ? $custom_labels['product']['custom_field_3'] : __('lang_v1.product_custom_field3');
  $product_custom_field4 = !empty($custom_labels['product']['custom_field_4']) ? $custom_labels['product']['custom_field_4'] : __('lang_v1.product_custom_field4');
@endphp
<table class="table tw-w-full tw-text-sm tw-text-left tw-text-gray-600 tw-whitespace-nowrap tw-border-collapse custom-modern-table" id="stock_report_table">
    <thead class="tw-bg-gray-50 tw-text-gray-700 tw-uppercase tw-text-xs tw-border-b tw-border-gray-200">
        <tr>
            <th class="tw-px-4 tw-py-3">@lang('messages.action')</th>
            <th class="tw-px-4 tw-py-3">SKU</th>
            <th class="tw-px-4 tw-py-3">@lang('business.product')</th>
            <th class="tw-px-4 tw-py-3">@lang('lang_v1.variation')</th>
            <th class="tw-px-4 tw-py-3">@lang('product.category')</th>
            <th class="tw-px-4 tw-py-3">@lang('sale.location')</th>
            <th class="tw-px-4 tw-py-3">@lang('purchase.unit_selling_price')</th>
            <th class="tw-px-4 tw-py-3">@lang('report.current_stock')</th>
            @can('view_product_stock_value')
            <th class="stock_price tw-px-4 tw-py-3">@lang('lang_v1.total_stock_price') <small class="tw-text-gray-500">(@lang('lang_v1.by_purchase_price'))</small></th>
            <th class="tw-px-4 tw-py-3">@lang('lang_v1.total_stock_price') <small class="tw-text-gray-500">(@lang('lang_v1.by_sale_price'))</small></th>
            <th class="tw-px-4 tw-py-3">@lang('lang_v1.potential_profit')</th>
            @endcan
            <th class="tw-px-4 tw-py-3">@lang('report.total_unit_sold')</th>
            <th class="tw-px-4 tw-py-3">@lang('lang_v1.total_unit_transfered')</th>
            <th class="tw-px-4 tw-py-3">@lang('lang_v1.total_unit_adjusted')</th>
            <th class="tw-px-4 tw-py-3">{{$product_custom_field1}}</th>
            <th class="tw-px-4 tw-py-3">{{$product_custom_field2}}</th>
            <th class="tw-px-4 tw-py-3">{{$product_custom_field3}}</th>
            <th class="tw-px-4 tw-py-3">{{$product_custom_field4}}</th>
            @if($show_manufacturing_data)
                <th class="current_stock_mfg tw-px-4 tw-py-3">@lang('manufacturing::lang.current_stock_mfg') @show_tooltip(__('manufacturing::lang.mfg_stock_tooltip'))</th>
            @endif
        </tr>
    </thead>
    <tfoot>
        <tr class="tw-bg-gray-100 tw-font-bold tw-text-gray-900 tw-text-center footer-total tw-border-t tw-border-gray-200">
            <td colspan="7" class="tw-px-4 tw-py-4"><strong>@lang('sale.total'):</strong></td>
            <td class="footer_total_stock tw-px-4 tw-py-4"></td>
            @can('view_product_stock_value')
            <td class="footer_total_stock_price tw-px-4 tw-py-4"></td>
            <td class="footer_stock_value_by_sale_price tw-px-4 tw-py-4"></td>
            <td class="footer_potential_profit tw-px-4 tw-py-4"></td>
            @endcan
            <td class="footer_total_sold tw-px-4 tw-py-4"></td>
            <td class="footer_total_transfered tw-px-4 tw-py-4"></td>
            <td class="footer_total_adjusted tw-px-4 tw-py-4"></td>
            <td colspan="4" class="tw-px-4 tw-py-4"></td>
            @if($show_manufacturing_data)
                <td class="footer_total_mfg_stock tw-px-4 tw-py-4"></td>
            @endif
        </tr>
    </tfoot>
</table>
<style>
    #stock_report_table {
        white-space: nowrap !important;
    }
    #stock_report_table th, #stock_report_table td {
        white-space: nowrap !important;
        width: auto !important;
    }
    .custom-modern-table tbody tr:hover {
        background-color: #f9fafb !important;
    }
    .custom-modern-table tbody td {
        padding: 0.75rem 1rem !important;
        border-bottom: 1px solid #e5e7eb !important;
    }
</style>