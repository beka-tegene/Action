<section class="container mt-5 col-8">
<div class="card">
        <div class="card-header">
            <h4>Change Password</h4>
        </div>
        <div class="card-body">
            <div>
                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('admin.postpassword') }}">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-md-12 pb-4">
                            <div class="form-group">
                                    <label for="oldpassword">Enter old  Password</label>
                                    <input type="password" name="current_password"  id="newpassword" class="form-control @error('current_password') is-invalid @enderror" value="" required placeholder="Enter current  Password">
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="newpassword">Enter New Password</label>
                                    <input type="password" name="newpassword"  id="newpassword" class="form-control @error('newpassword') is-invalid @enderror" value="" required placeholder="New Password">
                                    @error('newpassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="newpassword_confirmation">Confirm New Password</label>
                                    <input type="password" name="newpassword_confirmation"  id="newpassword_confirmation" class="form-control @error('newpassword_confirmation') is-invalid @enderror" value="" required placeholder="Confirm Password">
                                    @error('newpassword_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group button d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-lock"></i> Update Password</button>
                                    {{--  <a role="button" href="admin/index.html" class="bizwheel-btn theme-2">Login</a>  --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
