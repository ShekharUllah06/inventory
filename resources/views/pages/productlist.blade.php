@extends('layouts.master')
@section('page_title', 'Products')
@section('page_description', 'You can search and edit products')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Products
            </div>
            @if(count($products))
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Code</th>
                            <th>Name</th>
                            <th class="text-right">Unit</th>
                            <th class="text-center">Group</th>
                            <th class="text-right">Purchase Price</th>
                            <th class="text-right">Sales Price</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) { ?>
                            <tr>
                                <td class="text-center text-muted">
                                    {{$product->id}}
                                </td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            {{$product->product_name}}
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">{{$product->unit}}</td>
                                <td class="text-center">
                                    <div class="badge badge-warning">{{$product->product_group}}</div>
                                </td>
                                <td class="text-right">{{$product->purchase_price}}</td>
                                <td class="text-right">{{$product->sales_price}}</td>
                                <td class="text-right">{{$product->product_date}}</td>
                                <td class="text-center">

                                    <?php
                                    if ($product->status == "1") {
                                        echo '<div class="badge badge-success">';
                                        echo 'Active';
                                        echo '</div>';
                                    } else {
                                        echo '<div class="badge badge-danger">';
                                        echo 'Inactive';
                                        echo '</div>';
                                    }
                                    ?>

                                </td>

                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-alternate btn-sm">Edit</button>
                                </td>
                            </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="text-center">
                {{$products->links("pagination::bootstrap-4")}}
            </div>
            @else
            <p class="alert alert-info">
                No Listing Found
            </p>
            @endif
        </div>
    </div>
</div>
@stop