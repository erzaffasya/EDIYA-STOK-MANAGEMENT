<x-app-layout>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Benefit</h4>
                <h6>Ubah Data Benefit</h6>
            </div>
        </div>
        <!-- /add -->
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('benefit.update', $Benefit->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Benefit</label>
                                <input name="benefit" value="{{$Benefit->benefit}}" type="text">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('benefit.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /add -->
    </div>
</x-app-layout>
