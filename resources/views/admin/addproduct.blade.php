@extends('layouts.admin')
@push('style')
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="{{asset('js/summernote/summernote-bs4.css')}}">
@endpush
@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>ADD PRODUCT</h5>
    <hr>

    <form method="POST" action="{{ route('product.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="row ">

            <div class="col-12">
                <label for="name" class="">{{ __('Name') }}</label>
                <div class="form-group">
                    <div>
                        <input id="name" type="text" placeholder="Nama Produk" class="form-control  required @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="price" class="">{{ __('Price') }}</label>
                <div class="form-group">
                    <div>
                        <input id="price" type="number"
                            class="form-control   required @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price')  }}" placeholder="Harga"  required autocomplete="price" autofocus>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="brand" class="">{{ __('Brand') }}</label>
                <div class="form-group">
                    <div>
                        <select name="brand" id="addproductbrand" class="form-control" required>
                            <option selected="true" value="" disabled hidden>Choose product brand</option>
                            <option value="Lucky Collection">Lucky Collection</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="gender" class="">{{ __('Gender') }}</label>
                <div class="form-group">
                    <div>
                        <select name="gender" id="addproductgender" class="form-control" required>
                            <option selected="true" value="" disabled hidden>Choose product brand</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unisex">Unisex</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="category" class="">{{ __('Category') }}</label>
                <div class="form-group">
                    <div>
                        <select name="category" id="addproductcategory" class="form-control" required>
                            <option selected="true" value="" disabled hidden>Choose category brand</option>
                            <option value="Pakaian">Pakaian</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Product Image</label>
                    <input type="file" class="form-control" required id="image" name="images[]" multiple>
                    @error('image')

                    <div style="color:red; font-weight:bold; font-size:0.7rem;">{{ $message }}</div>

                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="">Link Product</label>
                    <input type="text" placeholder="Link Shopee" name="shopee" class="form-control"> <br>
                    <input type="text" placeholder="Link Tokopedia" name="tokopedia" class="form-control"> <br>
                    <input type="text" placeholder="Link Bukalapak" name="bukalapak" class="form-control">

                </div>
            </div>
            <div class=" col-12">
                <div class="form-group">
                    <label class="">Contents</label>
                    <textarea id="summernote" name="contents" required></textarea>
                </div>
            </div>


        </div>

        <button type="submit" class="btn btn-success w-100">ADD PRODUCT</button>

    </form>

</div>

@push('js')

<script src="{{ asset('js/summernote/summernote-bs4.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#summernote').summernote({
            height: "300px",
            // callbacks: {
            //     onImageUpload: function (image) {
            //         uploadImage(image[0]);
            //     },
            //     onMediaDelete: function (target) {
            //         deleteImage(target[0].src);
            //     }
            // }
        });

        // function uploadImage(image) {
        //     var data = new FormData();
        //     data.append("image", image);
        //     $.ajax({
        //         url: "",
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         data: data,
        //         type: "POST",
        //         success: function (url) {
        //             // console.log(url);
        //             if (url.status == true) {
        //                 $('#summernote').summernote("insertImage", url.url);
        //             } else {
        //                 alert('error');
        //             }
        //         },
        //         error: function (data) {
        //             console.log(data);
        //         }
        //     });
        // }

        // function deleteImage(src) {
        //     $.ajax({
        //         data: {
        //             src: src
        //         },
        //         type: "POST",
        //         url: "",
        //         cache: false,
        //         success: function (response) {
        //             alert('Berhasil Hapus');
        //         }
        //     });
        // }

    });
</script>
@endpush
@endsection