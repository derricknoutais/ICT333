<b-tabs pills card vertical class="bg-white border-right">
    <b-tab title="All Staff">
        @include('staff.partials.tabs.all-staff')
    </b-tab>
    <b-tab title="Recently Uploaded">
        @include('staff.partials.tabs.recently-added')
    </b-tab>
    <b-tab title="Uploader">
        @include('staff.partials.tabs.uploader')
    </b-tab>
</b-tabs>