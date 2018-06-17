<b-tabs pills card vertical class="bg-white border-right">
    <b-tab title="All Offering">
        @include('offering.partials.tabs.all-offerings')
    </b-tab>
    <b-tab title="Recently Uploaded">
        @include('offering.partials.tabs.recently-added')
    </b-tab>
    <b-tab title="Uploader">
        @include('offering.partials.tabs.uploader')
    </b-tab>
    
    
</b-tabs>