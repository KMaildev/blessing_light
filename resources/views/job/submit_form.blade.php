<form action="{{ route('cv.store') }}"  method="post" novalidate="novalidate" autocomplete="off">
    @csrf
    <div class="contact-msg">
        <div class="alert alert-success">
            <div class="success-msg">
                <i class="fa fa-thumbs-o-up ico-block"></i>
                <p>Thanks for getting in touch with us, We'll check your message and get back to you
                    shortly!</p>
            </div>
        </div>
    </div>

    <div class="form-group col-md-12 p-l-0">
        <label>Name<span class="red">*</span></label>
        <input type="text" name="name" class="form-control required">
    </div>


    <div class="clearfix"></div>
    <div class="form-group">
        <label>Email<span class="red">*</span></label>
        <input type="email" name="email" id="contact-email" class="form-control required">
    </div>

    <div class="form-group col-md-6 p-l-0">
        <label>Age</label>
        <input type="text" name="age" class="form-control">
    </div>

    <div class="form-group col-md-6 p-r-0">
        <label>Expected Salary</label>
        <input type="text" name="salary" class="form-control">
    </div>

    <div class="clearfix"></div>
    <div class="form-group">
        <label>Website (If Exists)</label>
        <input type="text" name="website" class="form-control">
    </div>

    <div class="form-group">
        <label>Position<span class="red">*</span></label>
        <select class="form-control required" name="position" id="position">
            <option value="">select Position you are applying for</option>
            @foreach ($job_lists as $job_list)
                <option value="{{ $job_list->title ?? '' }}">
                    {{ $job_list->title ?? '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Details</label>
        <textarea class="form-control" name="details" style="height: 130px"></textarea>
    </div>

    <div>
        <input type="submit" class="btn btn-block btn-lg main-bg uppercase" value="Apply Now">
    </div>
</form>
