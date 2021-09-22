<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">General Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="site_name">Site Name</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter site name"
                    id="site_name"
                    name="site_name"
                    value="{{ config('settings.site_name') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="site_title">Site Header Title</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter site header title"
                    id="site_title"
                    name="site_title"
                    value="{{ config('settings.site_title') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="default_email_address">Email Address</label>
                <input
                    class="form-control"
                    type="email"
                    placeholder="Enter email address"
                    id="default_email_address"
                    name="default_email_address"
                    value="{{ config('settings.default_email_address') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="website_name">Website Name</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter noc group name"
                    id="website_name"
                    name="website_name"
                    value="{{ config('settings.website_name') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="noc_group">Noc Group</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter noc group name"
                    id="noc_group"
                    name="noc_group"
                    value="{{ config('settings.noc_group') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="noc_group_website">Noc Group Website</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter noc group website name"
                    id="noc_group_website"
                    name="noc_group_website"
                    value="{{ config('settings.noc_group_website') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="footer_copyright_text">Site Footer</label>
                <textarea
                    class="form-control"
                    rows="4"
                    placeholder="Enter footer copyright text"
                    id="footer_copyright_text"
                    name="footer_copyright_text"
                >{{ config('settings.footer_copyright_text') }}</textarea>
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>