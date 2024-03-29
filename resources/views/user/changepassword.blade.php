@extends('user.layouts.master')

@section('body')

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        @if(session()->has('message'))
        <div class="alert alert-danger fade in alert-dismiss show mt-4">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">x</span>
        </div>
        @endif
        @if(session()->has('messageall'))
        <div class="alert alert-success fade in alert-dismiss show mt-4">
            {{ session()->get('messageall') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">x</span>
        </div>
        @endif
        @if(count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger fade in alert-dismiss show mt-4">
            {{ $error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">x</span>
        </div>
        @endforeach
        @endif
        <div class="card mt-4">
            <div class="card-header text-center text-white bg-dark mb-3 ">
                <h2>Change Password</h2>
            </div>
            <div class="card-body ">
                <form action="{{route('user.changePassword')}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <table class="table-custom">
                        <tr>
                            <td>Enter Current Password</td>
                            <td> <input type="password" class="form-control" id="old_password" placeholder="Enter Current password" name="old_password"></td>
                        </tr>
                        <tr>
                            <td>Enter New Password</td>
                            <td> <input type="password" class="form-control" id="new_password" placeholder="Enter New password" name="new_password"></td>
                        </tr>
                        <tr>
                            <td>Re-enter New Password</td>
                            <td> <input type="password" class="form-control" id="password_confirmation" placeholder="Re-enter New password" name="password_confirmation"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="text-center mb-3 mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>


@endsection
@push('styles')
<style>
    .table-custom {
        border-collapse: separate;
        border-spacing: 26px 15px;
        margin-left: 6rem;
    }
</style>
@endpush

@push('scripts')

@endpush