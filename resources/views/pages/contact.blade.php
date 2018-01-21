@extends('layouts._main')
@section('title')
    Renta.com - Hubungi Kami
@endsection
@section('body')
    <!-- Related Rented Row -->

    <div class="row">
        <div class="col-md-12">
            <h3 class="my-4">Contact us</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="">
                <div class="form-group has-success">
                    <label class="form-control-label" for="inputSuccess1">Email</label>
                    <input type="text" class="form-control form-control-success" id="inputSuccess1">
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="inputSuccess1">Phone</label>
                    <input type="text" class="form-control form-control-success" id="inputSuccess1">
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="inputSuccess1">Address</label>
                    <input type="text" class="form-control form-control-success" id="inputSuccess1">
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="inputSuccess1">Message</label>
                    <textarea class="form-control"></textarea>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
                <div class="form-group has-success">
                    <button class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection