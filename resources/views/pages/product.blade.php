@extends('layouts.master')
@section('page_title', 'Add New Product')
@section('page_description', 'You can add new product from this page')
@section('content')
<?php

    use App\Models\Product;

    $code = Product::count();
    $code = $code + 1;
?>
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Product Entry Form</h5>

        <form class="needs-validation" novalidate method="POST" action="/createproduct">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="dtp">Date</label>
                    <input name="dtp" type="date" class="form-control" id="dtp" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a date.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="txtCode">Code</label>

                    <input name="txtCode" type="text" disabled="true" class="form-control" id="txtCode" placeholder="Product Code" value='<?php
echo $code;
?>' required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a product code.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">

                    <label for="txtProductName">Product Name</label>
                    <input type="text" class="form-control" id="txtProductName" name="txtProductName" placeholder="Product Name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a product name.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="txtUnit">Unit</label>
                    <input name="txtUnit" type="number" min="0" class="form-control" id="txtUnit" placeholder="Product Unit" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a product unit.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="drpdwnProductType">Product Group</label>
                    <br>
                    <select name="drpdwnProductType" id="drpdwnProductType" required class="form-control">
                        <option value="Type 1">Type 1</option>
                        <option value="Type 2">Type 2</option>
                        <option value="Type 3">Type 3</option>
                        <option value="Type 4">Type 4</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a product group.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="txtPurchasePrice">Purchase Price</label>
                    <input name="txtPurchasePrice" type="number" min="0" class="form-control" id="txtPurchasePrice" placeholder="Purchase Price" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a purchase price.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="txtSalesPrice">Sale Price</label>
                    <input name="txtSalesPrice" type="number" min="0" class="form-control" id="txtSalesPrice" placeholder="Sale price" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a sale price.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="drpdwnStatus">Status</label>
                    <br>
                    <select name="drpdwnStatus" id="drpdwnStatus" required class="form-control">
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>

                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a product status.
                    </div>
                </div>
            </div>




            <button class="btn btn-primary" type="submit">Add product</button>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </div>
</div>
@stop