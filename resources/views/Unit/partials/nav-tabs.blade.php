<b-tabs pills card vertical class="bg-white border-right">
    <b-tab title="All Units">
        @include('unit.partials.tabs.all-units')
    </b-tab>
    <b-tab title="Recently Uploaded">
        @include('unit.partials.tabs.recently-added')
    </b-tab>
    <b-tab title="Uploader">
        @include('unit.partials.tabs.uploader')
    </b-tab>
    
</b-tabs>